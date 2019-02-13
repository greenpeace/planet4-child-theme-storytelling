<?php

/**
 * Enqueue style sheets
 */

function enqueue_child_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/_src/css/crate.css', array(), 6.2, 'all' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);

function enqueue_child_js() {
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/_src/js/main.js', array(), 1, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_js', 99);