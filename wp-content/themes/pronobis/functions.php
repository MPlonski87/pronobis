<?php
	
	// load styles
	function add_styles() {
		wp_enqueue_style('normalize', get_template_directory_uri() . '/vendor/node_modules/normalize.css/normalize.css');
		wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/vendor/node_modules/flexboxgrid/dist/flexboxgrid.min.css');
		wp_enqueue_style('animate', get_template_directory_uri() . '/vendor/node_modules/animate.css/animate.min.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/dist/assets/styles/css/style.css');
	}
	add_action( 'wp_enqueue_scripts', 'add_styles'); 

	// load menu
	function register_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_menu' );	
	
?>