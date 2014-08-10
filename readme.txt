=== Advanced lazy load ===
Contributors: kasonzhao
Donate link: 
Tags: lazy load, image lazyload
Requires at least: 3.3
Tested up to: 3.9
Stable tag: 1.5.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Reduce the loading time while opening your wordpress website, accelerate openning time. Images outside of viewport (visible part of web page) wont be loaded before user scrolls to them..

== Description ==

Advanced lazy load is aiming to speed up your website which powered by WordPress. 
It delays loading of images in (long) web pages. 
Images outside of viewport (visible part of web page) wont be loaded before user scrolls to them.


After active the plugin, when end user open website,
will load the text first, and the then load images in your website, in this case will help reduce the loading time, the image is still in your website, just load it later and base on user screen scrolling by jQuery script, scrolling down, more image will be loaded, no need to call back any external server.

Visit <a href="http://www.kasonz.com/developement/advanced-lazy-load/" target="_blank">kasonz.com</a> for more information.

== Installation ==

1. Upload folder 'advanced-lazy-load' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. After activate it, you can set the in the setting menu -> Advacned lazy load

== Frequently asked questions ==

Q: Where are the images going?
A: Still in your website, just make it load on demand.
Q: What should I do after activate it.
A: You can set the pixel in the setting, if don`t, then will use the default setting.


== Screenshots ==

1. /screenshot-1.jpg

2. /screenshot-2.jpg

3. /screenshot-3.jpg

== Changelog ==

= 1.1 =
* 	upgrade : change the wording error.

= 1.2 =
* 	upgrade : Fix the jquery library loaded issue.

= 1.3 =
* 	Bug fix : Fix the update alert issue.


= 1.4.2 =
* 	New option: Setting duration in setting page

= 1.5.0 =
* 	Modified the broken links

= 1.5.1 =
* 	New guide URL for plugin.