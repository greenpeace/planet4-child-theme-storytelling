<?php

/**
 * Enqueue style sheets
 */

function enqueue_child_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/_src/css/crate.css', array(), 6.3, 'all' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_styles', 99);

function enqueue_child_js() {
	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/_src/js/main.js', array(), 1, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_js', 99);


/**
 * Add Storytelling Logo to Login Page
 */
function my_login_logo() { ?>
    <style type="text/css">
    	body.login{
    		background: #3ea19e;
    	}
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/whale-logo.png);
			background-size: contain;
		    background-repeat: no-repeat;
		    width: 100%;
		    height: 47px;
        }
        #login #backtoblog a, #login #nav a{
        	color: #fff;
        }
        #login #backtoblog a:hover, #login #nav a:hover{
        	color: #f7e8d7;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_filter( 'locale', function() {
	return 'en';
});