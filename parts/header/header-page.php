<header class="header-page padding-vertical-3">
  <div class="grid-container">
    <div class="grid-x">
      <div class="small-12 cell">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="small-12 cell">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<nav id="breadcrumbs">','</nav>' );
            }
            ?>
      </div>
    </div>
  </div>
</header>
