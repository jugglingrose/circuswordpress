<?php

function load_scripts() {
  wp_enqueue_script( 'boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'). '4.0.0', true);
  wp_enqueue_style( 'bootstrap-css' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.3.7', 'all');
  wp_enqueue_style( 'index', get_template_directory_uri() . '/css/index.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_scripts');
 ?>