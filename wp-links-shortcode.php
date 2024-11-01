<?php
/*
Plugin Name: WP Links Shortcode
Plugin URI: http://www.WeAreO3.com/plugins/wp-links-shortcode/
Description: This plugin adds a shortcode to emulate the WordPress native function wp_list_bookmarks. All native function arguments are available to the plugin.
Version: 1.0
Author: O3
Author URI: http://www.WeAreO3.com
License: GPL2
*/

// [bartag foo="foo-value"]
function wp_links_shortcode( $atts ) {
	extract( shortcode_atts( array(	
		'categorize' 		=> 1,
		'category' 			=> '',
		'exclude_category' 	=> '',
		'category_name' 	=> '',
		'category_before' 	=> '<li id="[category id]" class="linkcat">',
		'category_after' 	=> '</li>',
		'class' 			=> 'linkcat',
		'category_orderby' 	=> 'name',
		'category_order' 	=> 'ASC',
		'title_li' 			=> __('Bookmarks'),
		'title_before' 		=> '<h2>',
		'title_after' 		=> '</h2>',
		'show_private' 		=> 0,
		'include' 			=> '',
		'exclude' 			=> '',
		'orderby' 			=> 'name',
		'order' 			=> 'ASC',
		'limit' 			=> -1,
		'before' 			=> '<li>',
		'after' 			=> '</li>',
		'link_before' 		=> '',
		'link_after' 		=> '',
		'between' 			=> '<br />',
		'show_images' 		=> 1,
		'show_description' 	=> 0,
		'show_name' 		=> 0,
		'show_rating' 		=> 0,
		'show_updated' 		=> 0,
		'hide_invisible' 	=> 1
	), $atts ) );

	$html = wp_list_bookmarks(array(
		'categorize' 		=> "{$categorize}",
		'category' 			=> "{$category}",
		'exclude_category' 	=> "{$exclude_category}",
		'category_name' 	=> "{$category_name}",
		'category_before' 	=> "{$category_before}",
		'category_after' 	=> "{$category_after}",
		'class' 			=> "{$class}",
		'category_orderby' 	=> "{$category_orderby}",
		'category_order' 	=> "{$category_order}",
		'title_li' 			=> "{$title_li}",
		'title_before' 		=> "{$title_before}",
		'title_after' 		=> "{$title_after}",
		'show_private' 		=> "{$show_private}",
		'include' 			=> "{$include}",
		'exclude' 			=> "{$exclude}",
		'orderby' 			=> "{$orderby}",
		'order' 			=> "{$order}",
		'limit' 			=> "{$limit}",
		'before' 			=> "{$before}",
		'after' 			=> "{$after}",
		'link_before' 		=> "{$link_before}",
		'link_after' 		=> "{$link_after}",
		'between' 			=> "{$between}",
		'show_images' 		=> "{$show_images}",
		'show_description' 	=> "{$show_description}",
		'show_name' 		=> "{$show_name}",
		'show_rating' 		=> "{$show_rating}",
		'show_updated' 		=> "{$show_updated}",
		'hide_invisible' 	=> "{$hide_invisible}",
		'echo'				=> 0		
	));

	return $html;
}
add_shortcode( 'wp_list_bookmarks', 'wp_links_shortcode' );