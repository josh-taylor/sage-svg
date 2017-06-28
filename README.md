# Sage SVG

Easily use SVG images in your [Sage 9](https://roots.io/sage) Blade templates.

This repository is a wrapper for Adam Wathan's [Blade SVG](https://github.com/adamwathan/blade-svg) for Laravel, so a 
lot of the concepts from that repository are the same.

## Installation

You can install this package via Composer by running this command in the root of your Sage 9 installation.

```
composer require josh-taylor/sage-svg
```

## Getting Started

The package will automatically register a blade directive to inline your SVGs.

Place all your SVGs inside `resources/assets/icons` in your Sage 9 installation and you are good to go. **Recommend to run all your SVGs through [SVGO](https://jakearchibald.github.io/svgomg/) first!**

```html
<a href="/settings">
    @svg('cog', 'icon-lg') Settings
</a>

<!-- Renders -->
<a href="/settings">
    <svg class="icon icon-lg" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <!-- ... -->
    </svg>
</a>
```

For more advanced usage you can check out [Adam's](https://github.com/adamwathan/blade-svg) repository.

The only thing this libary does not support at the moment is non-inline SVG. But this is 
[better](https://css-tricks.com/pretty-good-svg-icon-system/) anyway right?

## Credits

Most of the work of this repository is down to Adam Wathan. This is just a wrapper to get it work with Sage 9 blade 
templates.


