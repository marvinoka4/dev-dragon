<?php




function register_block_types() {
  acf_register_block_type( array(
    'name'              => 'testes',
    'title'             => __( 'testes', 'Dragon' ),
    'description'       => __( 'A custom testes block.', 'Dragon' ),
    'render_template'   => '/parts/blocks/testes.php',
    'enqueue_style'     => get_template_directory_uri() . '/assets/styles/scss/blocks/_testes-block.scss',
    'category'          => 'common',
    'icon'              => 'smiley',
    'keywords'          => array( 'block', 'Dragon' ),
  ) );
}

add_action('acf/init', 'register_block_types');

function enqueue_block_editor_assets() {
  wp_enqueue_script(
    'testes-admin',
    get_template_directory_uri() . '/assets/scripts/js/blocks/testes-admin.js',
    array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
    filemtime( get_template_directory() . '/assets/scripts/js/blocks/testes-admin.js' )
  ); 
}
add_action( 'admin_enqueue_scripts', 'enqueue_block_editor_assets' );
