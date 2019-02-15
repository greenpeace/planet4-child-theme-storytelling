<?php /* Template Name: Blank Color Scheme */
/**
 * The template for displaying pages with a blank color scheme (originally made to display the style guide).
 *
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

use Timber\Timber;

$context        = Timber::get_context();
$post           = new P4_Post();
$page_meta_data = get_post_meta( $post->ID );

$context['post']                = $post;
$context['custom_body_classes'] = 'template-blank';

Timber::render( array( 'page.twig' ), $context );
