<?php
/**
 * Template Name: Service Page
 * 
 * This template handles dynamic service pages.
 * It uses the page slug to load the correct blueprint.
 *
 * @package seospecialistusa
 */

get_header();

// Get the current page slug
$slug = get_post_field( 'post_name', get_the_ID() );
?>

<div class="service-page-container slug-<?php echo esc_attr( $slug ); ?>">
    <?php seo_specialist_render_sections( 'services', $slug ); ?>
</div>

<?php get_footer(); ?>
