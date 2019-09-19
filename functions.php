<?php
require get_template_directory() . '/wp-bootstrap4-navwalker.php';
function test2_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'social-menu' => __( 'Social Menu' )
    )
  );
}
add_action( 'init', 'test2_menus' );