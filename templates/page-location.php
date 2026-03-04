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

// Render sections based on the blueprint
seo_specialist_render_sections( 'locations', $slug );

get_footer();