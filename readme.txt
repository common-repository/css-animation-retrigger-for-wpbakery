=== CSS Animation Retrigger for WPBakery ===
Contributors: WPExplorer
Donate link: https://www.wpexplorer.com/donate/
Tags: wpbakery, animations, css animation
Requires at least: 4.0
Requires PHP: 7.0
Tested up to: 6.6
Stable Tag: 1.1
License: GNU Version 2 or Any Later Version
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Retriggers the WPBakery CSS animations whenever the element is scrolled into view.

== Description ==
This is an add-on plugin for the WPBakery Page Builder Plugin. By default when using the WPBakery plugin and choosing CSS animations for your elements, the animations are only triggered the first time the element becomes visible on the page. This plugin loads an extra JS file that listens to scroll events so that the animation is retriggered whenever the element is scrolled into view.

This plugin is fully compatible with WPBakery "Slim Mode" in the [Total Theme](https://totalwptheme.com/).

== Installation ==

1. Upload 'css-animation-retrigger-for-wpbakery' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 1.1 =
* Updated the tested up to version.
* Removed unnecessary check to see if the core WPBakery plugin is active.
* Removed unnecessary index.php file.

= 1.0 =

* First official release