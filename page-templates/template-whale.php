<?php /* Template Name: Whale Scheme */
/**
 * The template for displaying pages with the whale color scheme.
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
$context['custom_body_classes'] = 'template-whale';
$context['anim_folder'] = 'anim_whale';

Timber::render( array( 'page.twig' ), $context );
