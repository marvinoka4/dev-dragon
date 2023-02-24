<div class="grid-container margin-top-2">

    <h1><?php the_title();?></h1>
    <h2>Content section</h2>

    <?php if ( have_posts() ): while( have_posts() ): the_post();?>

        <?php the_content();?>

    <?php endwhile; else: endif;?>

</div>
