<?php /* Template Name: Leaf Scheme */
/**
 * The template for displaying pages with the leaf color scheme.
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
$context['custom_body_classes'] = 'template-leaf';
$context['anim_folder'] = 'anim_leaf';

Timber::render( array( 'page.twig' ), $context );
