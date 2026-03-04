<?php
/**
 * Template Name: E-Commerce SEO Page
 * 
 * @package seospecialistusa
 */

get_header();

// Include E-Commerce SEO Sections
get_template_part( 'template-parts/sections/ecommerce/hero' );
get_template_part( 'template-parts/sections/ecommerce/why-matters' );
get_template_part( 'template-parts/sections/ecommerce/benefits' );
get_template_part( 'template-parts/sections/ecommerce/services-grid' );
get_template_part( 'template-parts/sections/ecommerce/platforms' );
get_template_part( 'template-parts/sections/ecommerce/process-timeline' );
get_template_part( 'template-parts/sections/ecommerce/industries' );
get_template_part( 'template-parts/sections/ecommerce/why-choose' );
get_template_part( 'template-parts/sections/ecommerce/ecommerce-cta' );

// Global Footer CTA
// get_template_part( 'template-parts/sections/on-page/footer-cta' );

get_footer();
