<?php
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 global $wp_query;
 $wp_query->set_404();
 status_header( 404 );
 get_template_part( 404 ); exit();

get_header(); ?>

	

<?php get_footer(); ?>
