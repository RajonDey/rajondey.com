<?php

/*
	
@package rdctheme


/*	
=============================
FRONT-END ENQUEUE FUNCTIONS
=============================
*/

function rdcircles_load_scripts(){

	
	wp_register_script( 'jquery' , get_template_directory_uri() . '/assets/dist/js/jquery.js', false, '1.12.4', true );
	wp_enqueue_script( 'jquery' );

	// CSS
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/dist/css/style.css', array(), '1.0.0', 'all' );
	// Prettify CSS  
	wp_enqueue_style( 'prettify-sunburst', get_template_directory_uri() . '/assets/dist/css/prettify/sunburst.css', array(), '1.0.0', 'all');


	// FONTS 
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/dist/fonts/font-faces.css' );
	
	// JS
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/dist/js/main.js'  );
	wp_enqueue_script( 'rdc', get_template_directory_uri() . '/assets/dist/js/rdc.js'  );
	wp_enqueue_script( 'prettify-js', get_template_directory_uri() . '/assets/dist/js/prettify.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' );

}
add_action( 'wp_enqueue_scripts', 'rdcircles_load_scripts' );















