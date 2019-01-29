<?php

/**
 * Enqueue style sheets
 */

function enqueue_child_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/_src/css/crate.css', array(), 6.1, 'all' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);