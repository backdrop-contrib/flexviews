FlexViews
------------------------

Provides a Views plugin helper for displaying content from Views module in a CSS3 flexbox style

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Usage
 - License
 - Credits
 - Maintainers

INTRODUCTION
------------

Views module allows you to show lists of your content in various html formats:  tables, list items, floating grids, etc...
Newer browsers (IE 10+) can use CSS3 Flexbox as an alternative layout formatter.
However, different browsers support different syntax when implementing this.
This module provides a UI/point-click solution to provide a good base for supporting all syntaxes for all browsers that can support it.

It is possible that you may need to write custom CSS in your theme to fully realize your flexbox layout for Views content;  this module just does the grunt work to write all the cross-browser CSS.

For more information:

https://css-tricks.com/snippets/css/a-guide-to-flexbox/
http://flexbox.io/


TESTED
-----

Working with basic content from Views.

KNOWN ISSUES
---------------------

Not a complete WYSIWYG Flexbox solution, but more of a framework type helper.

REQUIREMENTS
------------

Views UI

INSTALLATION
------------

Install this module using the official Backdrop CMS instructions at https://backdropcms.org/guide/modules

COMING FROM DRUPAL?
-------------------

This module is not a port from Drupal, but is a Views Plugin

PERMISSIONS
------------


USAGE
-----

Install the module.

When editing a View, choose:
format: Flexviews
settings: choose all of your settings, as this writes the base CSS for this View


LICENSE
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

CREDITS
-----------

 - biolithic <https://github.com/biolithic>

MAINTAINERS
-----------

 - biolithic <https://github.com/biolithic>
