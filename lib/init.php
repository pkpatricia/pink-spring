<?php
/**
 * Spring Theme initial setup and constants
 */
function spring_setup() {
  // Make theme available for translation
  load_theme_textdomain( 'spring-theme', get_template_directory() . '/lang' );

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus( array(
    'primary_navigation' => __( 'Primary Navigation', 'spring-theme' ),
    'quicklink_navigation' => __( 'Quicklink Navigation', 'spring-theme' ),
    'footer_navigation' => __( 'Footer Navigation', 'spring-theme' ),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 500, 370, false );

  // Add and Modify Image Sizes
  add_image_size( 'custom_size', 1400, 1400 );

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}
add_action('after_setup_theme', 'spring_setup');


// Backwards compatibility for older than PHP 5.3.0
if ( !defined( '__DIR__' ) ) { define( '__DIR__', dirname( __FILE__ ) ); }
