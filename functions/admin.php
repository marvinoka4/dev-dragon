<?php

// Remove Menu bar front end
add_filter('show_admin_bar', '__return_false');

add_action( 'admin_bar_menu', 'remove_wp_nodes', 100 );

function remove_wp_nodes()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'new-content' );
		//$wp_admin_bar->remove_menu( 'view' );
		$wp_admin_bar->remove_menu( 'comments' );
		//$wp_admin_bar->remove_menu( 'site-name' );
		$wp_admin_bar->remove_menu( 'wp-logo' );
		$wp_admin_bar->remove_menu( 'customize' );
		//$wp_admin_bar->remove_menu( 'stats' );
		$wp_admin_bar->remove_menu( 'updates' );
		$wp_admin_bar->remove_menu( 'search' );
		//$wp_admin_bar->remove_menu( 'jetpack-idc' );
		$wp_admin_bar->remove_menu( 'wpseo-menu' );

}


/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/


/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function joints_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="https://searchstation.co.uk" target="_blank">Search Station</a></span>.', 'docks');
}

// adding it to the admin area
add_filter('admin_footer_text', 'joints_custom_admin_footer');


define('DISALLOW_FILE_EDIT', true);
