<?php
/**
 * Template Name: Local SEO Page
 * 
 * @package seospecialistusa
 */

get_header();

// Local SEO Sections
get_template_part( 'template-parts/sections/local/hero' );
get_template_part( 'template-parts/sections/local/why-matters' );
get_template_part( 'template-parts/sections/local/services-grid' );
get_template_part( 'template-parts/sections/local/why-choose' );
get_template_part( 'template-parts/sections/local/who-benefits' );
get_template_part( 'template-parts/sections/local/more-than-rankings' );
get_template_part( 'template-parts/sections/local/local-cta' );

get_footer();
