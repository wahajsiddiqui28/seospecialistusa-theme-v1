<?php
/**
 * Template Name: Location Page
 * 
 * This template handles dynamic location pages.
 * It uses the page slug to load the correct blueprint.
 */

get_header();

// Get the current page slug
$slug = get_post_field( 'post_name', get_the_ID() );
?>

<div class="location-page-container slug-<?php echo esc_attr( $slug ); ?>">
    <?php seo_specialist_render_sections( 'locations', $slug ); ?>
</div>

<?php
get_footer();