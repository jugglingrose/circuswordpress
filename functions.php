<?php

// Register Custom Navigation Walker
require_once 'bootstrap-navwalker.php';

//Including stylesheet and script files
function load_scripts() {
  wp_enqueue_script( 'boostrap-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(). '3.2.1', true);
  wp_enqueue_script( 'boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'). '3.3.7', true);
  wp_enqueue_style( 'bootstrap-css' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.3.7', 'all');
  wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/js/lightbox.js', array('jquery'). '1.0.0', true);
  wp_enqueue_style( 'index', get_template_directory_uri() . '/css/index.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_scripts');

//Main configuration function
function circusred_config(){
  //register menus
  register_nav_menus(
    array(
      'my_main_menu' => 'Main Menu',
    )
  );

  //Theme Support
  //Post Thumbnails
  add_theme_support( 'post-thumbnails');
  add_theme_support( 'post-formats', array('video', 'image'));
}
add_action( 'after_setup_theme', 'circusred_config', 0);

//Remove default editor in dashboard from pages that do not require it



//Registering our sidebars
add_action('widgets_init', 'circus_sidebars');
function circus_sidebars(){
  register_sidebar(
    array(
      'name' => 'Blog Page Sidebar',
      'id' => 'sidebar-blog-1',
      'description' => 'This is the blog page sidebar. You can add widgets here',
      'before_widget' => '<div class="widget-wraper">',
      'after-widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
}

//Customize excerpt word count length for excerpt
function custom_excerpt_length() {
  return 50;
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>
