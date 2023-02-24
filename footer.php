<?php
/**
 * The template for displaying the footer.
 *
 * Contains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

<footer class="footer text-white" role="contentinfo">

  <div class="grid-container">
    <div class="inner-footer grid-x grid-margin-x grid-margin-y text-center large-text-left">
      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 1</h4>
        <p>Some text</p>
      </div>

      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 2</h4>
          <p>Some text</p>
      </div>
      <div class="small-12 medium-4 large-4 cell">
        <h4 class="mb20">Footer Column 3</h4>
          <p>Some text</p>
      </div>

    <div class="small-12 medium-12 large-12 cell text-center">
        <p class="text-small">Copyright <?php echo date('Y'); ?>. All Rights Reserved. </p>
        <p class="text-small">
            Built for
            <a href="https://marvinoka4.com/?utm_source=<?php echo site_url(); ?>&amp;utm_medium=website-credit&amp;utm_campaign=referral" target="_blank" title="Structured Growth">
                <img width="20" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fa/caret-square-o-up.svg" alt="Structured Growth"></a>
            by <a href="https://marvinoka4.com/?utm_source=<?php echo site_url(); ?>&amp;utm_medium=website-credit&amp;utm_campaign=referral" target="_blank" title="Marvin Okafor">DragonLord</a>
        </p>
    </div>
    </div>
  </div>

</footer>

</div>
</div>

<?php wp_footer(); ?>
<div class="cookie"></div>
</body>
</html> <!-- end page -->
