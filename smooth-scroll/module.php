<?php
/**
 * Load smoothscroll.js
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen
 */

if( !function_exists( 'ot_load_smoothscroll_js' ) ) :
  function ot_load_smoothscroll_js() {
    if(!is_child_theme()){
      wp_register_script( 'smoothscroll_js', get_template_directory_uri().'/lib/modules/smooth-scroll/js/smoothscroll.js', array( 'jquery' ), '1.0.1', true );
  } else {
      wp_register_script( 'smoothscroll_js', get_stylesheet_directory_uri().'/lib/modules/smooth-scroll/js/smoothscroll.js', array( 'jquery' ), '1.0.1', true );
  }
    wp_enqueue_script( 'smoothscroll_js' );
  }
  add_action( 'init', 'ot_load_smoothscroll_js' );

endif;
