<?php

function dragon_css() {

    wp_register_style('site-css', get_template_directory_uri() . '/assets/styles/css/app.css', array(), false, 'all' );

    wp_enqueue_style('site-css');
}

add_action('wp_enqueue_scripts', 'dragon_css', 999);


function dragon_js() {

    wp_enqueue_script('jquery');

    wp_register_script('site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), false, true );

    wp_enqueue_script('site-js');
}

add_action('wp_enqueue_scripts', 'dragon_js', 1999);