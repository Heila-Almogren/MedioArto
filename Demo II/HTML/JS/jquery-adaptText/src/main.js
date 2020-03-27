import $ from 'jquery';
import adaptText from './adaptText';
import info from './info';

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
