<?php
/*
Plugin Name: Collapsible Comments
Plugin URI: http://deuced.net/collapsible-comments/ 
Description: Makes all comments collapse and expand inline with an exerpt at every page or post.
Version: 3.8
Author: ..::DeUCeD::..
Author URI: http://www.deuced.net/
*/
/*

Collapsible Comments plugin provides an easy way to make all comments to collapse and expand inline with an excerpt at every page or post. You can set the number of characters that will be shown for each comment and after clicking a link, they will be expanded. You can also specify the style by editing a simple line. Collapsible Comments is tested on Firefox, Opera, Safari and IE 6 & 7 and works without problems. 

*/
/*	Copyright 2007-2008 ..::DeUCeD::..

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

*/
global $ccID, $ccTEXT_lenght, $CCstyle;
//  ccTEXT variable is the number of characters to display as a summary and CCstyle is the style you want your comments to appear, summary or full comment (example below), CHANGE THEM
    $ccTEXT_lenght = 130;
    $CCstyle = 'font-weight: normal;'; 
//  An example of what i use-->  $CCstyle = 'font-weight: normal; padding: 0px 10px 0px 10px; border: 1px solid #a0a0a0; text-align: justify; background-color: #fffff0;';
// **************** DO NOT CHANGE BELOW THAT LINE **************** //
    $ccID = comment_ID();
// Pre-2.6 compatibility
if ( !defined('WP_CONTENT_URL') )
  define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
if ( !defined('WP_CONTENT_DIR') )
  define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
### Function: Collapsible Comments
if(function_exists('load_plugin_textdomain'))
        load_plugin_textdomain('collapsible-comments',WP_CONTENT_DIR . '/plugins/collapsible-comments');
/* FUNCTION to put CCJS in HEAD */
function addHeaderCCJS() {
echo '<!-- call Collapsible Comments Javascript in HEAD -->'."\n";
  if (function_exists('wp_enqueue_script')) {
      wp_enqueue_script('collapsible-comments', WP_CONTENT_URL . '/plugins/collapsible-comments/ccomments.js', false, '4.0');
      wp_print_scripts('collapsible-comments');
      }
echo '<!-- done Collapsible Comments Javascript in HEAD -->'."\n";
                        }
add_action('wp_head', 'addHeaderCCJS');
/* FUNCTION to make the comments collapsible */
 function collapsiblecomments () {
   global $ccID, $ccTEXT_lenght, $CCstyle;
   $cc_COM = get_comment($ccID, ARRAY_A);
   $ccTEXT = $cc_COM[comment_content];
   $ccTEXT_naked = strip_tags($ccTEXT);
//   echo strlen($ccTEXT_naked);
/* ======================== */
   $ccommentsreadit = __("[+]", "collapsiblecomments");
   $ccommentscloseit = __("[-]", "collapsiblecomments");
   $ccommentsup = __("[Close &uarr;]", "collapsiblecomments");
   $ccommentsdown = __("[Open &darr;]", "collapsiblecomments");
/* ======================== */
echo "\n".'<!-- Start Collapsible Comments box -->'."\n";
    echo '<p></p>';
if (strlen($ccTEXT_naked) > $ccTEXT_lenght ) {
/* show comment first chars */
    echo '<div style="' . $CCstyle . ' display: block;" id="sum', comment_ID(), '"> <a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsreadit . '</a> <p></p>' . substr($ccTEXT_naked, 0, $ccTEXT_lenght) . '... ...  <div style="text-align: right;"><a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsdown . '</a></div> </div>';      
    echo '<div style="' . $CCstyle . ' display: none;" id="com', comment_ID(), '"> <a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentscloseit . '</a> ' , comment_text() , ' <div style="text-align: right;"><a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsup . '</a></div> </div>';
} else {
    echo '<div style="' . $CCstyle . ' display: none;" id="sum', comment_ID(), '"> <a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsreadit . '</a> <p></p>' . substr($ccTEXT_naked, 0, $ccTEXT_lenght) . '... ...  <div style="text-align: right;"><a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsdown . '</a></div> </div>';      
    echo '<div style="' . $CCstyle . ' display: block;" id="com', comment_ID(), '"> <a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentscloseit . '</a> ' , comment_text() , ' <div style="text-align: right;"><a href="#" onclick="xcollapse(\'sum' , comment_ID() , '\');xcollapse(\'com' , comment_ID() , '\');return false;">' . $ccommentsup . '</a></div> </div>';
}
    echo '<p></p>';
echo "\n".'<!-- End Collapsible Comments box -->'."\n";
	}
/* END, now rest in piece! */
?>