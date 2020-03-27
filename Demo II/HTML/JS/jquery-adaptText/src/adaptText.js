import $ from 'jquery';
import DEFAULTS from './defaults';
import * as util from './util';

const NAMESPACE = 'adaptText';

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
    this.$element.trigger(`${NAMESPACE}::${eventType}`, data);

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
  window.addEventListener("resize", util.throttle(adaptText.resize, 200), false);
} else if (window.attachEvent) {
  window.attachEvent("onresize", util.throttle(adaptText.resize, 200));
}

export default adaptText;
