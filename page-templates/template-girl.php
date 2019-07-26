<?php /* Template Name: Girl Scheme */
/**
 * The template for displaying pages with the girl color scheme.
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
$context['custom_body_classes'] = 'template-girl';
$context['anim_folder'] = 'anim_girl';

Timber::render( array( 'page.twig' ), $context );
