# [jQuery adaptText](https://github.com/amazingSurge/jquery-adaptText) ![bower][bower-image] [![NPM version][npm-image]][npm-url] [![Dependency Status][daviddm-image]][daviddm-url] [![prs-welcome]](#contributing)

> A jQuery plugin that help rescale text depending on it's container width.

## Table of contents
- [Main files](#main-files)
- [Quick start](#quick-start)
- [Requirements](#requirements)
- [Usage](#usage)
- [Examples](#examples)
- [Options](#options)
- [Methods](#methods)
- [Events](#events)
- [No conflict](#no-conflict)
- [Browser support](#browser-support)
- [Contributing](#contributing)
- [Development](#development)
- [Changelog](#changelog)
- [Inspired](#inspired)
- [Copyright and license](#copyright-and-license)

## Main files
```
dist/
├── jquery-adaptText.js
├── jquery-adaptText.es.js
└── jquery-adaptText.min.js
```

## Quick start
Several quick start options are available:
#### Download the latest build

 * [Development](https://raw.githubusercontent.com/amazingSurge/jquery-adaptText/master/dist/jquery-adaptText.js) - unminified
 * [Production](https://raw.githubusercontent.com/amazingSurge/jquery-adaptText/master/dist/jquery-adaptText.min.js) - minified

#### Install From Bower
```sh
bower install jquery-adaptText --save
```

#### Install From Npm
```sh
npm install jquery-adaptText --save
```

#### Install From Yarn
```sh
yarn add jquery-adaptText
```

#### Build From Source
If you want build from source:

```sh
git clone git@github.com:amazingSurge/jquery-adaptText.git
cd jquery-adaptText
npm install
npm install -g gulp-cli babel-cli
gulp build
```

Done!

## Requirements
`jquery-adaptText` requires the latest version of [`jQuery`](https://jquery.com/download/).

## Usage
#### Including files:

```html
<script src="/path/to/jquery.js"></script>
<script src="/path/to/jquery-adaptText.js"></script>
```

#### Required HTML structure

```html
<p class="responsive">Hello world</p>
<p class="responsive" data-compression="10" data-max="100" data-min="10">Hello world</p>
<h1 class="responsive" data-scrollable="true">Long Text With Scrollable Support</h1>
```

#### Initialization
All you need to do is call the plugin on the element:

```javascript
jQuery(function($) {
  $('.responsive').adaptText(); 
});
```

## Examples
There are some example usages that you can look at to get started. They can be found in the
[examples folder](https://github.com/amazingSurge/jquery-adaptText/tree/master/examples).

## Options
`jquery-adaptText` can accept an options object to alter the way it behaves. You can see the default options by call `$.adaptText.setDefaults()`. The structure of an options object is as follows:

```
{
  compression: 10,
  max: Number.POSITIVE_INFINITY,
  min: Number.NEGATIVE_INFINITY,
  scrollable: false,
  scrollSpeed: 1000,
  scrollResetSpeed: 300,
  onResizeEvent: true
}
```

## Methods
Methods are called on adaptText instances through the adaptText method itself.
You can also save the instances to variable for further use.

```javascript
// call directly
$().adaptText('resize');

// or
var api = $().data('adaptText');
api.resize();
```

#### resize()
Resize the font size.
```javascript
$().adaptText('resize');
```

#### enable()
Enable the resize functions.
```javascript
$().adaptText('enable');
```

#### disable()
Disable the resize functions.
```javascript
$().adaptText('disable');
```

## Events
`jquery-adaptText` provides custom events for the plugin’s unique actions. 

```javascript
$('.the-element').on('adaptText::ready', function (e) {
  // on instance ready
});

```

Event   | Description
------- | -----------
ready   | Fires when the instance is ready for API use.
enable  | Fired immediately when the `enable` instance method has been called.
disable | Fired immediately when the `disable` instance method has been called.

## No conflict
If you have to use other plugin with the same namespace, just call the `$.adaptText.noConflict` method to revert to it.

```html
<script src="other-plugin.js"></script>
<script src="jquery-adaptText.js"></script>
<script>
  $.adaptText.noConflict();
  // Code that uses other plugin's "$().adaptText" can follow here.
</script>
```

## Browser support

Tested on all major browsers.

| <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/safari/safari_32x32.png" alt="Safari"> | <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/chrome/chrome_32x32.png" alt="Chrome"> | <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/firefox/firefox_32x32.png" alt="Firefox"> | <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/edge/edge_32x32.png" alt="Edge"> | <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/internet-explorer/internet-explorer_32x32.png" alt="IE"> | <img src="https://raw.githubusercontent.com/alrra/browser-logos/master/opera/opera_32x32.png" alt="Opera"> |
|:--:|:--:|:--:|:--:|:--:|:--:|
| Latest ✓ | Latest ✓ | Latest ✓ | Latest ✓ | 9-11 ✓ | Latest ✓ |

As a jQuery plugin, you also need to see the [jQuery Browser Support](http://jquery.com/browser-support/).

## Contributing
Anyone and everyone is welcome to contribute. Please take a moment to
review the [guidelines for contributing](CONTRIBUTING.md). Make sure you're using the latest version of `jquery-adaptText` before submitting an issue. There are several ways to help out:

* [Bug reports](CONTRIBUTING.md#bug-reports)
* [Feature requests](CONTRIBUTING.md#feature-requests)
* [Pull requests](CONTRIBUTING.md#pull-requests)
* Write test cases for open bug issues
* Contribute to the documentation

## Development
`jquery-adaptText` is built modularly and uses Gulp as a build system to build its distributable files. To install the necessary dependencies for the build system, please run:

```sh
npm install -g gulp
npm install -g babel-cli
npm install
```

Then you can generate new distributable files from the sources, using:
```
gulp build
```

More gulp tasks can be found [here](CONTRIBUTING.md#available-tasks).

## Changelog
To see the list of recent changes, see [Releases section](https://github.com/amazingSurge/jquery-adaptText/releases).

## Inspired

- [fittext](http://fittextjs.com) by Paravel
- [SlabText](http://www.frequency-decoder.com/demo/slabText/) by Brian McAllister
- [responsiveText](http://groundwork.sidereel.com/?url=responsiveText-js) by Gary Hepting
- [jquery-responsive-text](http://github.com/ghepting/jquery-responsive-text) by ghepting

## Copyright and license
Copyright (C) 2016 amazingSurge.

Licensed under [the LGPL license](LICENSE).

[⬆ back to top](#table-of-contents)

[bower-image]: https://img.shields.io/bower/v/jquery-adaptText.svg?style=flat
[bower-link]: https://david-dm.org/amazingSurge/jquery-adaptText/dev-status.svg
[npm-image]: https://badge.fury.io/js/jquery-adaptText.svg?style=flat
[npm-url]: https://npmjs.org/package/jquery-adaptText
[license]: https://img.shields.io/npm/l/jquery-adaptText.svg?style=flat
[prs-welcome]: https://img.shields.io/badge/PRs-welcome-brightgreen.svg
[daviddm-image]: https://david-dm.org/amazingSurge/jquery-adaptText.svg?style=flat
[daviddm-url]: https://david-dm.org/amazingSurge/jquery-adaptText
