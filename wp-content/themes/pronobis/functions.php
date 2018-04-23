<?php

	// load styles
	function add_styles() {
		//wp_enqueue_style('normalize', get_template_directory_uri() . '/vendor/node_modules/normalize.css/normalize.css');
		//wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/vendor/node_modules/flexboxgrid/dist/flexboxgrid.min.css');
		//wp_enqueue_style('animate', get_template_directory_uri() . '/vendor/node_modules/animate.css/animate.min.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/dist/assets/styles/css/style.css');
	}
	add_action( 'wp_enqueue_scripts', 'add_styles'); 

	// load scripts
	function add_scripts() {
		wp_enqueue_script("jquery");
	  wp_enqueue_script('scrollToTop', get_template_directory_uri() . '/assets/scripts/scrollToTop.js');
	  wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js');
	}
	add_action('wp_enqueue_scripts','add_scripts');
	
	// load menu
	function register_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu'));
	}
	add_action('init', 'register_menu');	

	// clean script tag
	add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
	add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
	function myplugin_remove_type_attr($tag, $handle) {
	    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
	}

?>