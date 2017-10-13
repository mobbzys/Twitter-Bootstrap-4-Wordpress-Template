<?php

add_theme_support( 'post-thumbnails' );  //Adds thumbnails compatibility to the theme 
// set_post_thumbnail_size( 250, 250 ); // 50 pixels wide by 50 pixels tall, resize mode

function dsm_Charity_styles() {
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');  
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'dsm_Charity_styles');     

function dsm_javascript_scripts() {
	$dependencies = ('jquery');
  wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', $dependencies, true); 
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true);
	
	// wp_enqueue_script('jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'dsm_javascript_scripts'); 

//MENUS

function dsm_my_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'dsm_my_menu' );

// Register Custom Navigation Walker
require_once('bs4navwalker.php');

//**WIDGET AREA**

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_widget',
    'before_widget' => '<div class = "col-md-4">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
