=== Collapsible Comments ===

Tags: comments
Requires at least: WP 2.2
Tested up to: WP 2.6
Stable tag: trunk
Contributors: DeUCeD
Donate link: 

An easy way to make each comment collapse and expand inline with excerpt at every page or post.

== Description ==

Collapsible Comments plugin provides an easy way to make all comments to collapse and expand inline with an excerpt at every page or post. You can set the number of characters that will be shown for each comment and after clicking a link, they will be expanded. You can also specify the style by editing a simple line. Collapsible Comments is tested on Firefox, Opera, Safari and IE 6 & 7 and works without problems. 

So have fun and keep blogging!

== Version and Info ==

Plugin Name: Collapsible Comments
Plugin URI: http://deuced.net/collapsible-comments/ 
Version: 3.8
Author: ..::DeUCeD::..
Author URI: http://www.deuced.net/

== Installation ==

1. Decompress and upload the folder collapsible-comments to the /wp-content/plugins/ directory.
2. Activate the plugin through the *Plugins* menu in WordPress.
3. Find the file comments.php in your theme directory and replace the expression **`<?php comment_text(); ?>`** with the **`<?php collapsiblecomments(); ?>`**

== Upgrading ==

1. Deactivate the plugin through the *Plugins* menu in WordPress.
2. Delete the folder collapsible-comments from your /wp-content/plugins/ directory.
3. Decompress and upload the new folder collapsible-comments to the /wp-content/plugins/ directory.
4. Activate the plugin through the *Plugins* menu in WordPress.

== Unistallation ==

1. Deactivate the plugin through the *Plugins* menu in WordPress.
2  Find the file comments.php in your theme directory and replace the expression  **`<?php collapsiblecomments(); ?>`** with the **`<?php comment_text(); ?>`** 
3. Delete the folder collapsible-comments from your /wp-content/plugins/ directory.

== Screenshots ==

See it in action: http://deuced.net/wpress/collapsible-comments/ 

== Frequently Asked Questions ==

Visit the plugin page: http://deuced.net/wpress/collapsible-comments/ 

== Changelog ==

Visit the plugin page: http://deuced.net/wpress/collapsible-comments/ 

== Credits ==

The Javascript is based on Arvind Satyanarayan example which toggles the visibility of multiple  elements on a page, see it at http://blog.movalog.com/a/javascript-toggle-visibility/

== KEEP IN MIND ==

This plugin is tested in my installation only. That means you must better test it before you use it even though it doesn't seem to interfere with other plugins. As far as i know it is compatible with all the plugins i use and you could check mines at my plugins page. As we all know, BACKUP AND TRY IT BEFORE YOU USE IT! You are the only responsible person for your DATA.

Copyright 2007-2008 ..::DeUCeD::..

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA