/**
* jQuery AdaptText v1.3.4
* https://github.com/amazingSurge/jquery-adaptText
*
* Copyright (c) amazingSurge
* Released under the LGPL-3.0 license
*/
import $ from 'jquery';

var DEFAULTS = {
  compression: 10,
  max: Number.POSITIVE_INFINITY,
  min: Number.NEGATIVE_INFINITY,
  scrollable: false,
  scrollSpeed: 1000,
  scrollResetSpeed: 300,
  onResizeEvent: true
};

function throttle(func, wait) {
  const _now = Date.now || function() {
    return new Date().getTime();
  };

  let timeout;
  let context;
  let args;
  let result;
  let previous = 0;
  let later = function() {
    previous = _now();
    timeout = null;
    result = func.apply(context, args);
    if (!timeout) {
      context = args = null;
    }
  };

  return (...params) => {
    /*eslint consistent-this: "off"*/
    let now = _now();
    let remaining = wait - (now - previous);
    context = this;
    args = params;
    if (remaining <= 0 || remaining > wait) {
      if (timeout) {
        clearTimeout(timeout);
        timeout = null;
      }
      previous = now;
      result = func.apply(context, args);
      if (!timeout) {
        context = args = null;
      }
    } else if (!timeout) {
      timeout = setTimeout(later, remaining);
    }
    return result;
  };
}

const NAMESPACE$1 = 'adaptText';

const instances = [];
let viewportWidth = $(window).width();

/**
 * Plugin constructor
 **/
class adaptText {
  constructor(element, options) {
    this.element = element;
    this.$element = $(element);

    // options
    this.options = $.extend(true, {}, DEFAULTS, options, this.$element.data());

    this.width = this.$element.width();

    this.isDisabled = false;

    this._init();
  }

  _init() {
    this.resize();

    if (this.options.scrollable) {
      this._scrollOnHover();
    }

    instances.push(this);

    this._trigger('ready');
  }

  _scrollOnHover() {
    /* eslint consistent-return: "off" */
    const that = this;

    this.$element.css({
      'overflow': 'hidden',
      'text-overflow': 'ellipsis',
      'white-space': 'nowrap'
    });
    this.$element.hover(() => {
      const distance = that.element.scrollWidth - that.$element.width();

      if (distance > 0) {
        const scrollSpeed = Math.sqrt(distance / that.width) * that.options.scrollSpeed;

        that.$element.css('cursor', 'e-resize');
        return that.$element.stop().animate({
          "text-indent": -distance
        }, scrollSpeed, () => that.$element.css('cursor', 'text'));
      }
    }, () => that.$element.stop().animate({
      "text-indent": 0
    }, that.options.scrollResetSpeed));
  }

  resize() {
    if(this.isDisabled === true) {
      return;
    }
    this.width = this.$element.width();
    if (this.width === 0) {
      return;
    }

    this.$element.css('font-size', Math.floor(Math.max(
      Math.min(this.width / (this.options.compression), parseFloat(this.options.max)),
      parseFloat(this.options.min)
    )));
  }

  enable() {
    if (this.isDisabled === true) {
      this.isDisabled = false;
    }

    this._trigger('enable');
  }

  disable() {
    if (this.isDisabled === false) {
      this.isDisabled = true;
    }

    this._trigger('disable');
  }

  _trigger(eventType, ...params) {
    let data = [this].concat(params);

    // event
    this.$element.trigger(`${NAMESPACE$1}::${eventType}`, data);

    // callback
    eventType = eventType.replace(/\b\w+\b/g, (word) => {
      return word.substring(0, 1).toUpperCase() + word.substring(1);
    });
    let onFunction = `on${eventType}`;

    if (typeof this.options[onFunction] === 'function') {
      this.options[onFunction].apply(this, params);
    }
  }

  static resize(force) {
    if (!force && $(window).width() === viewportWidth) {
      return;
    }
    viewportWidth = $(window).width();

    $.each(instances, function() {
      if (this.options.onResizeEvent) {
        this.resize();
      }
    });
  }

  static setDefaults(options) {
    $.extend(DEFAULTS, $.isPlainObject(options) && options);
  }
}

if (window.addEventListener) {
  window.addEventListener("resize", throttle(adaptText.resize, 200), false);
} else if (window.attachEvent) {
  window.attachEvent("onresize", throttle(adaptText.resize, 200));
}

var info = {
  version:'1.3.4'
};

const NAMESPACE = 'adaptText';
const OtherAdaptText = $.fn.adaptText;

const jQueryAdaptText = function(options, ...args) {
  if (typeof options === 'string') {
    const method = options;

    if (/^_/.test(method)) {
      return false;
    } else if ((/^(get)/.test(method))) {
      const instance = this.first().data(NAMESPACE);
      if (instance && typeof instance[method] === 'function') {
        return instance[method](...args);
      }
    } else {
      return this.each(function() {
        const instance = $.data(this, NAMESPACE);
        if (instance && typeof instance[method] === 'function') {
          instance[method](...args);
        }
      });
    }
  }

  return this.each(function() {
    if (!$(this).data(NAMESPACE)) {
      $(this).data(NAMESPACE, new adaptText(this, options));
    }
  });
};

$.fn.adaptText = jQueryAdaptText;

$.adaptText = $.extend({
  setDefaults: adaptText.setDefaults,
  noConflict: function() {
    $.fn.adaptText = OtherAdaptText;
    return jQueryAdaptText;
  }
}, info);
