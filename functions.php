<?php
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');


// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Remove 4.2 Emoji Support
require_once(get_template_directory().'/functions/disable-emoji.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress admin
require_once(get_template_directory().'/functions/admin.php');

// User roles
require_once(get_template_directory().'/functions/roles.php');

// Custom Dashboard
require_once(get_template_directory().'/functions/dashboard.php');

// ACF
require_once(get_template_directory().'/functions/acf.php');

// Gutenburg
require_once(get_template_directory().'/functions/gutenburg-core.php');
