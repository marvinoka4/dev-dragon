<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.


function custom_welcome() {
// Content you want to show inside the widget
$theme = wp_get_theme();
echo '<h2>Site Overview</h2>';
echo '<p>This site is built on <strong>'.$theme->get( 'Name' ).'</strong> (version: '.$theme->get( 'Version' ).') which is a base theme developed by <a href="https://marvinoka4.com" target="_blank">Marvin Okafor</a>.</p>';
echo '<p>To ensure the site always performs as good as possible and to improve security, we have disabled some of the core WordPress functionality including switching the base theme and installing plugins. These tasks should only be performed by an experienced site administrator, as if not done correctly could break the site or create a security vulnerability. If you require either of these tasks to be carried out please contact us and we will be happy to help. marvinoka4@gmail.com</p>';
}

function custom_post_helper() {
// Content you want to show inside the widget
$args = array(
   '_builtin' => false,
	 'show_in_menu' => true
);
$output = 'objects'; // 'names' or 'objects' (default: 'names')
$operator = 'and'; // 'and' or 'or' (default: 'and')

$post_types = get_post_types( $args, $output, $operator );

if ( $post_types ) { // If there are any custom public post types.
		echo '<p>Custom post types are used to extend the functionality of your WordPress site. Below are the custom post types set up on this site.</p>';
		echo '<hr />';
    echo '<ul>';
    foreach ( $post_types  as $post_type ) {
      echo '<li><h3>'.$post_type->labels->menu_name.'</h3><p>'.$post_type->description.'</p></li>';
    }
    echo '<ul>';
}
}

function default_post_helper() {
// Content you want to show inside the widget
		echo '<p>Below you will find descriptions for the default menu items found in every WordPress site.</p>';
		echo '<hr />';
    echo '<ul>';

    echo '<li><h3>Pages</h3>
		<p>Pages are used to manage static content on the site such as inner page content that is not managed in a Custom Post Type.</p></li>';

		echo '<li><h3>Posts</h3>
		<p>Posts are used to manage blog posts and news items. If your website has a blog or newsfeed this content is managed under Posts.</p></li>';

		echo '<li><h3>Media</h3>
		<p>Media is where all the images are stored. You can upload images directly to posts and pages but they can be centrally managed through the media page.</p></li>';

		echo '<li><h3>Comments</h3>
		<p>If comments are enabled you can manage and moderate them via the comments menu item.</p></li>';

		echo '<li><h3>SEO</h3>
		<p>The SEO tab will give you advanced SEO settings. SEO settings for specific pages are managed on the page itself.</p></li>';


    echo '<ul>';

}


// Calling all custom dashboard widgets
function docks_custom_dashboard_widgets() {
	add_meta_box('custom_welcome','Overview', 'custom_welcome', 'dashboard', 'normal', 'high');
	add_meta_box('custom_dashboard_help', 'Custom Content Management', 'custom_post_helper', 'dashboard', 'side', 'high');
	add_meta_box('default_dashboard_help', 'Default Content Management', 'default_post_helper', 'dashboard', 'side', 'low');
	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
	global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['welcome-panel']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['wpseo-dashboard-overview']);
	//unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);

	remove_action('welcome_panel', 'wp_welcome_panel');
}
// removing the dashboard widgets

// adding any custom widgets
add_action('wp_dashboard_setup', 'docks_custom_dashboard_widgets', 11);
