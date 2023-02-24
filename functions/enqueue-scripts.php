<?php

//move jQuery to the footer
function footer_jquery() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri().'/assets/scripts/js/vendor/jquery.js', false, true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'footer_jquery');

function foundation_scripts() {
    wp_enqueue_script('wp-foundation', get_template_directory_uri().'/assets/scripts/js/vendor/wp-foundation.js', array('jquery', 'wp-foundation'), false, true);
    wp_enqueue_script('foundation-js', get_template_directory_uri().'/assets/scripts/js/vendor/foundation.js', array('jquery'), false, true);
    wp_enqueue_script('what-input', get_template_directory_uri().'/assets/scripts/js/vendor/what-input.js', false, true);
    wp_enqueue_script('app', get_template_directory_uri().'/assets/scripts/js/app.js', array('jquery', 'foundation-js'), false, true);
}


function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way


    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/css/app.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
