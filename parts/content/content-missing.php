<?php
/**
 * The template part for displaying a message that posts cannot be found
 */
?>

<div class="post-not-found">

	<?php if ( is_search() ) : ?>

		<header class="article-header">
			<h1><?php _e( 'Sorry, No Results.', 'dockswp' );?></h1>
		</header>

		<main class="entry-content">
			<p><?php _e( 'Try your search again.', 'dockswp' );?></p>
		</main>

		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->



	<?php else: ?>

		<header class="article-header">
			<h1><?php _e( 'Oops, Post Not Found!', 'dockswp' ); ?></h1>
		</header>

		<main class="entry-content">
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'dockswp' ); ?></p>
		</main>

		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->

	<?php endif; ?>

</div>
