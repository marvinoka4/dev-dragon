<?php $disable_sidebar = get_field('disable_sidebar'); ?>

<?php if ($disable_sidebar == true) {
        $class = "large-12";
        } else {
        $class = "large-8";
        }
?>

<div class="grid-container relative mb50">
  <div class="grid-x grid-margin-x align-center grid-margin-y">
    <div class="<?php echo $class; ?> small-12 cell">

      <main class="page-content-container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( '/parts/loop/loop-page' ); ?>
			<?php endwhile; endif; ?>
      </main>

    </div>
    <?php if ($disable_sidebar != true) {
      get_sidebar();
    } ?>
  </div>
</div>
