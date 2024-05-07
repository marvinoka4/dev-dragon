<?php




function register_block_types() {
  acf_register_block_type( array(
    'name'              => 'test',
    'title'             => __( 'test', 'Dragon' ),
    'description'       => __( 'A custom test block.', 'Dragon' ),
    'render_template'   => '/parts/blocks/test.php',
    'enqueue_style'     => get_template_directory_uri() . '/assets/styles/scss/blocks/_test-block.scss',
    'category'          => 'common',
    'icon'              => 'smiley',
    'keywords'          => array( 'block', 'Dragon' ),
  ) );

}

add_action('acf/init', 'register_block_types');

function enqueue_block_editor_assets() {
  wp_enqueue_script(
    'test-admin',
    get_template_directory_uri() . '/assets/scripts/js/blocks/test-admin.js',
    array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ),
    filemtime( get_template_directory() . '/assets/scripts/js/blocks/test-admin.js' )
  ); 

}
add_action( 'admin_enqueue_scripts', 'enqueue_block_editor_assets' );
