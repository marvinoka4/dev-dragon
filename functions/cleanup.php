<?php

// Fire all our initial functions at the start
add_action('after_setup_theme','docks_start', 16);

function docks_start() {

    // launching operation cleanup
    add_action('init', 'docks_head_cleanup');

    // remove pesky injected css for recent comments widget
    add_filter( 'wp_head', 'docks_remove_wp_widget_recent_comments_style', 1 );

    // clean up comment styles in the head
    add_action('wp_head', 'docks_remove_recent_comments_style', 1);

    // clean up gallery output in wp
    add_filter('gallery_style', 'docks_gallery_style');

    // adding sidebars to Wordpress
    //add_action( 'widgets_init', 'docks_register_sidebars' );

    remove_action( 'template_redirect', 'rest_output_link_header', 11 );
    remove_action( 'wp_head', 'rest_output_link_wp_head');
    remove_action( 'wp_head', 'wp_resource_hints', 2 );

    // cleaning up excerpt
    add_filter('excerpt_more', 'docks_excerpt_more');

} /* end docks start */

//The default wordpress head is a mess. Let's clean it up by removing all the junk we don't need.
function docks_head_cleanup() {
	// Remove category feeds
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds
	remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version
	remove_action( 'wp_head', 'wp_generator' );

} /* end docks head cleanup */

// Remove injected CSS for recent comments widget
function docks_remove_wp_widget_recent_comments_style() {
   if ( has_filter('wp_head', 'wp_widget_recent_comments_style') ) {
      remove_filter('wp_head', 'wp_widget_recent_comments_style' );
   }
}




// Remove injected CSS from recent comments widget
function docks_remove_recent_comments_style() {
  global $wp_widget_factory;
  if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}


// Remove injected CSS from gallery
function docks_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}


// This removes the annoying […] to a Read More link
function docks_excerpt_more($more) {
	global $post;
	// edit here if you like
return '<a class="excerpt-read-more" href="'. get_permalink($post->ID) . '" title="'. __('Read', 'dockswp') . get_the_title($post->ID).'">'. __('... Read more &raquo;', 'dockswp') .'</a>';
}


//  Stop WordPress from using the sticky class (which conflicts with Foundation), and style WordPress sticky posts using the .wp-sticky class instead
function remove_sticky_class($classes) {
	if(in_array('sticky', $classes)) {
		$classes = array_diff($classes, array("sticky"));
		$classes[] = 'wp-sticky';
	}

	return $classes;
}
add_filter('post_class','remove_sticky_class');




// Remove block Library styles
function remove_block_css(){
wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
