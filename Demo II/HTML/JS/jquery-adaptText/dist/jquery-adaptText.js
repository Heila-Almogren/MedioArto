/**
* jQuery AdaptText v1.3.4
* https://github.com/amazingSurge/jquery-adaptText
*
* Copyright (c) amazingSurge
* Released under the LGPL-3.0 license
*/
(function(global, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (typeof exports !== 'undefined') {
    factory(require('jquery'));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery);
    global.jqueryAdaptTextEs = mod.exports;
  }
})(this, function(_jquery) {
  'use strict';

  var _jquery2 = _interopRequireDefault(_jquery);

  function _interopRequireDefault(obj) {
    return obj && obj.__esModule
      ? obj
      : {
          default: obj
        };
  }

  function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError('Cannot call a class as a function');
    }
  }

  var _createClass = (function() {
    function defineProperties(target, props) {
      for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ('value' in descriptor) descriptor.writable = true;
        Object.defineProperty(target, descriptor.key, descriptor);
      }
    }

    return function(Constructor, protoProps, staticProps) {
      if (protoProps) defineProperties(Constructor.prototype, protoProps);
      if (staticProps) defineProperties(Constructor, staticProps);
      return Constructor;
    };
  })();

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
    var _this = this;

    var _now =
      Date.now ||
      function() {
        return new Date().getTime();
      };

    var timeout = void 0;
    var context = void 0;
    var args = void 0;
    var result = void 0;
    var previous = 0;
    var later = function later() {
      previous = _now();
      timeout = null;
      result = func.apply(context, args);
      if (!timeout) {
        context = args = null;
      }
    };

    return function() {
      for (
        var _len = arguments.length, params = Array(_len), _key = 0;
        _key < _len;
        _key++
      ) {
        params[_key] = arguments[_key];
      }

      /*eslint consistent-this: "off"*/
      var now = _now();
      var remaining = wait - (now - previous);
      context = _this;
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

  var NAMESPACE$1 = 'adaptText';

  var instances = [];
  var viewportWidth = (0, _jquery2.default)(window).width();

  /**
   * Plugin constructor
   **/

  var adaptText = (function() {
    function adaptText(element, options) {
      _classCallCheck(this, adaptText);

      this.element = element;
      this.$element = (0, _jquery2.default)(element);

      // options
      this.options = _jquery2.default.extend(
        true,
        {},
        DEFAULTS,
        options,
        this.$element.data()
      );

      this.width = this.$element.width();

      this.isDisabled = false;

      this._init();
    }

    _createClass(
      adaptText,
      [
        {
          key: '_init',
          value: function _init() {
            this.resize();

            if (this.options.scrollable) {
              this._scrollOnHover();
            }

            instances.push(this);

            this._trigger('ready');
          }
        },
        {
          key: '_scrollOnHover',
          value: function _scrollOnHover() {
            /* eslint consistent-return: "off" */
            var that = this;

            this.$element.css({
              overflow: 'hidden',
              'text-overflow': 'ellipsis',
              'white-space': 'nowrap'
            });
            this.$element.hover(
              function() {
                var distance = that.element.scrollWidth - that.$element.width();

                if (distance > 0) {
                  var scrollSpeed =
                    Math.sqrt(distance / that.width) * that.options.scrollSpeed;

                  that.$element.css('cursor', 'e-resize');
                  return that.$element.stop().animate({
                    'text-indent': -distance
                  }, scrollSpeed, function() {
                    return that.$element.css('cursor', 'text');
                  });
                }
              },
              function() {
                return that.$element.stop().animate(
                  {
                    'text-indent': 0
                  },
                  that.options.scrollResetSpeed
                );
              }
            );
          }
        },
        {
          key: 'resize',
          value: function resize() {
            if (this.isDisabled === true) {
              return;
            }
            this.width = this.$element.width();
            if (this.width === 0) {
              return;
            }

            this.$element.css(
              'font-size',
              Math.floor(
                Math.max(
                  Math.min(
                    this.width / this.options.compression,
                    parseFloat(this.options.max)
                  ),
                  parseFloat(this.options.min)
                )
              )
            );
          }
        },
        {
          key: 'enable',
          value: function enable() {
            if (this.isDisabled === true) {
              this.isDisabled = false;
            }

            this._trigger('enable');
          }
        },
        {
          key: 'disable',
          value: function disable() {
            if (this.isDisabled === false) {
              this.isDisabled = true;
            }

            this._trigger('disable');
          }
        },
        {
          key: '_trigger',
          value: function _trigger(eventType) {
            for (
              var _len2 = arguments.length,
                params = Array(_len2 > 1 ? _len2 - 1 : 0),
                _key2 = 1;
              _key2 < _len2;
              _key2++
            ) {
              params[_key2 - 1] = arguments[_key2];
            }

            var data = [this].concat(params);

            // event
            this.$element.trigger(NAMESPACE$1 + '::' + eventType, data);

            // callback
            eventType = eventType.replace(/\b\w+\b/g, function(word) {
              return word.substring(0, 1).toUpperCase() + word.substring(1);
            });
            var onFunction = 'on' + eventType;

            if (typeof this.options[onFunction] === 'function') {
              this.options[onFunction].apply(this, params);
            }
          }
        }
      ],
      [
        {
          key: 'resize',
          value: function resize(force) {
            if (
              !force &&
              (0, _jquery2.default)(window).width() === viewportWidth
            ) {
              return;
            }
            viewportWidth = (0, _jquery2.default)(window).width();

            _jquery2.default.each(instances, function() {
              if (this.options.onResizeEvent) {
                this.resize();
              }
            });
          }
        },
        {
          key: 'setDefaults',
          value: function setDefaults(options) {
            _jquery2.default.extend(
              DEFAULTS,
              _jquery2.default.isPlainObject(options) && options
            );
          }
        }
      ]
    );

    return adaptText;
  })();

  if (window.addEventListener) {
    window.addEventListener('resize', throttle(adaptText.resize, 200), false);
  } else if (window.attachEvent) {
    window.attachEvent('onresize', throttle(adaptText.resize, 200));
  }

  var info = {
    version: '1.3.4'
  };

  var NAMESPACE = 'adaptText';
  var OtherAdaptText = _jquery2.default.fn.adaptText;

  var jQueryAdaptText = function jQueryAdaptText(options) {
    for (
      var _len3 = arguments.length,
        args = Array(_len3 > 1 ? _len3 - 1 : 0),
        _key3 = 1;
      _key3 < _len3;
      _key3++
    ) {
      args[_key3 - 1] = arguments[_key3];
    }

    if (typeof options === 'string') {
      var method = options;

      if (/^_/.test(method)) {
        return false;
      } else if (/^(get)/.test(method)) {
        var instance = this.first().data(NAMESPACE);
        if (instance && typeof instance[method] === 'function') {
          return instance[method].apply(instance, args);
        }
      } else {
        return this.each(function() {
          var instance = _jquery2.default.data(this, NAMESPACE);
          if (instance && typeof instance[method] === 'function') {
            instance[method].apply(instance, args);
          }
        });
      }
    }

    return this.each(function() {
      if (!(0, _jquery2.default)(this).data(NAMESPACE)) {
        (0, _jquery2.default)(this).data(
          NAMESPACE,
          new adaptText(this, options)
        );
      }
    });
  };

  _jquery2.default.fn.adaptText = jQueryAdaptText;

  _jquery2.default.adaptText = _jquery2.default.extend(
    {
      setDefaults: adaptText.setDefaults,
      noConflict: function noConflict() {
        _jquery2.default.fn.adaptText = OtherAdaptText;
        return jQueryAdaptText;
      }
    },
    info
  );
});
