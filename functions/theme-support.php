<?php

// Adding WP Functions & Theme Support
function docks_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
	         array(
	         	'comment-list',
	         	'comment-form',
	         	'search-form',
	         )
	);

	// Adding post format support
	 //add_theme_support( 'post-formats',
		//array(
			//'aside',             // title less blurb
			//'gallery',           // gallery of images
			//'link',              // quick link to other site
			//'image',             // an image
			//'quote',             // a quick quote
			//'status',            // a Facebook like status update
			//'video',             // video
			//'audio',             // audio
			//'chat'               // chat transcript
		//)
	//);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'docks_theme_support', 1200 );

} /* end theme support */

add_action( 'after_setup_theme', 'docks_theme_support' );



// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function docks_placeholder_img() {
	echo '<img src="'.get_stylesheet_directory_uri().'/assets/images/util/placeholder.jpg" alt="Placeholder" width="600" height="400"/>';
	return;
}


add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
    return get_stylesheet_directory_uri().'/assets/images/util/dot.png';
}



add_filter( 'gform_confirmation', 'gform_confirmation_push', 10, 4 );
function gform_confirmation_push( $confirmation, $form, $entry, $ajax ) {
    if ( ! is_string( $confirmation ) ) {
        return $confirmation;
    }
    $form_title = rgar( $form, 'title' );
    $entry_id = rgar( $entry, 'id' );
    $confirmation .= GFCommon::get_inline_script_tag( "window.dataLayer.push({'event': 'generate_lead','Form': '$form_title', 'Entry' : ".$entry_id."});" );
    return $confirmation;
}
