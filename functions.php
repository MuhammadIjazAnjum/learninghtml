<?php
//image constant
if( !defined('LHTML_PATH')){
   define( 'LHTML_PATH', get_stylesheet_directory_uri() . '/imgs' );
  }
// function
function learninghtml() {
	wp_enqueue_style( 'learninghtml-style', get_stylesheet_uri() );
	 wp_enqueue_style( 'floating', get_template_directory_uri().'/css/floating.css' );
	wp_enqueue_style( 'griding', get_template_directory_uri().'/css/griding.css' );
	wp_enqueue_style( 'bootst', get_template_directory_uri().'/css/bootstarpcss.css' );

     wp_enqueue_style( 'lthml-bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' );
     wp_enqueue_script( 'lthml-jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
     wp_enqueue_script( 'lthml-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js' );
 //    wp_enqueue_style( 'twisty-bootstarp', get_template_directory_uri().'/css/bootstrap.css' );
 //    wp_enqueue_style( 'twisty-awesome', get_template_directory_uri().'/css/font-awesome.css' );
 // 	wp_enqueue_style( 'twisty-animation', get_template_directory_uri().'/css/animate.css' );
 //    wp_enqueue_script( 'twisty-scroll', get_template_directory_uri().'/css/scroll.js' );
 //   require get_template_directory(). '/inc/default-css.php';
  
}add_action( 'wp_enqueue_scripts', 'learninghtml' );