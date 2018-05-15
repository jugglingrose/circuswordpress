<?php

// Register Custom Navigation Walker

require_once('wp-bootstrap-navwalker.php');


//Including stylesheet and script files
function load_scripts() {
  wp_enqueue_script( 'boostrap-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(). '3.7.7', true);
  wp_enqueue_script( 'boostrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'). '4.0.0', true);
  wp_enqueue_style( 'bootstrap-css' , 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '3.3.7', 'all');
  wp_enqueue_style( 'index', get_template_directory_uri() . '/css/index.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
  array(
    'my_main_menu' => 'Main Menu'
  )
);

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
 ?>
