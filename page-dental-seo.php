<?php
/**
 * Template Name: Dental SEO Page
 * 
 * @package seospecialistusa
 */

get_header();

// Include Dental SEO Sections
get_template_part( 'template-parts/sections/dental/hero' );
get_template_part( 'template-parts/sections/dental/why-need' );
get_template_part( 'template-parts/sections/dental/process-steps' );
get_template_part( 'template-parts/sections/dental/partnership' );
get_template_part( 'template-parts/sections/dental/why-choose' );
get_template_part( 'template-parts/sections/dental/results' );
get_template_part( 'template-parts/sections/dental/case-studies-cta' );

// Global Footer CTA
// get_template_part( 'template-parts/sections/on-page/footer-cta' );

get_footer();
