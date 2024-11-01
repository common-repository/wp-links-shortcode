=== WP Links Shortcode ===

Contributors: Brian Onorio
Plugin Name: WP Links Shortcode
Plugin URI: http://www.WeAreO3.com/plugins/wp-links-shortcode/
Tags: wp, links, blogroll, bookmarks
Author URI: http://www.WeAreO3.com/
Author: O3
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.0
Version: 1.0 

This plugin adds a shortcode to emulate the WordPress native function wp_list_bookmarks.
== Description ==

This plugin makes it easy to output a list of Links on any WordPress Post, Page, or other Custom Post Type. The shortcode uses the
WordPress native `wp_list_bookmarks` function call to output the list. All native function arguments are available to the shortcode.

For more information on this plugin and support for this plugin, visit [WP Links Shortcode on O3](http://www.weareo3.com/plugins/wp-links-shortcode/).

== Installation ==

1. Download the plugin from the WordPress Repository or Upload to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use the `[wp_list_bookmarks]` shortcode in your posts or pages

== Frequently Asked Questions ==

1. Using all of the defaults, my category name has a bullet next to it. How do I get rid of this? This is a default value of the `wp_list_bookmarks` function. To remove it, add the `category_before = ''` and `category_after = ''` shortcodes. Your call should looks like this: `[wp_list_bookmarks category_before = '' category_after = '']`
1. Using all of the defaults, the description doesn't show. How do I add it? Use the `show_description = true` parameter. Your call should look like this: `[wp_list_bookmarks show_description = true`
1. Where can I find more details about all of the available parameters? On the [wp_list_bookmarks](http://codex.wordpress.org/Function_Reference/wp_list_bookmark) Codex Page.

== Usage ==

Simply add the following shortcode to a Post or Page:

`[wp_list_bookmarks]`

The following parameters are available, defaults in parenthesis:

* categorize (true)
* category (all categories)
* exclude_category (none)
* category_name (none)
* category_before (`<li id="[category id]" class="linkcat">`)
* category_after (`</li>`)
* class (linkcat)
* category_orderby (name)
* category_order (ASC)
* title_li (Bookmarks)
* title_before (`<h2>`)
* title_after (</h2>)
* show_private (false)
* include (none)
* exclude (none)
* orderby (name)
* order (ASC)
* limit (-1)
* before (`<li>`)
* after (`</li>`)
* link_before (none)
* link_after (none)
* between (`<br />`)
* show_images (true)
* show_description (false)
* show_name (false)
* show_rating (false)
* show_updated (false)
* hide_invisible (true)

For a full list of arguments and their available options, visit the `wp_list_bookmarks` function on the <a href="http://codex.wordpress.org/Function_Reference/wp_list_bookmarks" target="_blank">Codex</a>.

== Changelog ==

= 1.0 =
* Initial Release