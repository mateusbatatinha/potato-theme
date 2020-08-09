<?php

/**
 * enqueue global styles
 */
function potato_theme_stypt() {
	wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css', array(), rand(111,9999), 'all'  );
	
	wp_deregister_script('jquery');
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, false, true);
    wp_enqueue_script( 'global-js', get_template_directory_uri() . '/js/global.js', array('jquery'),  rand(111,9999), 'all' );
	
}
add_action( 'wp_enqueue_scripts', 'potato_theme_stypt' );


?>
