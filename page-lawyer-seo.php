<?php
/**
 * Template Name: Lawyer SEO Page
 * 
 * @package seospecialistusa
 */

get_header();

// Include Lawyer SEO Sections
get_template_part( 'template-parts/sections/lawyer/hero' );
get_template_part( 'template-parts/sections/lawyer/why-matters' );
get_template_part( 'template-parts/sections/lawyer/services-slider' );
get_template_part( 'template-parts/sections/lawyer/why-choose' );
get_template_part( 'template-parts/sections/lawyer/process' );
get_template_part( 'template-parts/sections/lawyer/practice-areas' );
get_template_part( 'template-parts/sections/lawyer/results-expectations' );
get_template_part( 'template-parts/sections/lawyer/lawyer-cta' );

// Global Footer CTA
// get_template_part( 'template-parts/sections/on-page/footer-cta' );

get_footer();
