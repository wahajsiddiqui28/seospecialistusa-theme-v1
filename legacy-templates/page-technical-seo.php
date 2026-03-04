<?php
/**
 * Template Name: Technical SEO Page
 * 
 * @package seospecialistusa
 */

get_header();

// Include Technical SEO Sections
get_template_part( 'template-parts/sections/technical/hero' );
get_template_part( 'template-parts/sections/technical/backbone' );
get_template_part( 'template-parts/sections/technical/services-tabs' );
get_template_part( 'template-parts/sections/technical/process' );
get_template_part( 'template-parts/sections/technical/problems' );
get_template_part( 'template-parts/sections/technical/why-choose' );
get_template_part( 'template-parts/sections/technical/impact' );
get_template_part( 'template-parts/sections/technical/faq' );
get_template_part( 'template-parts/sections/technical/footer-cta' );

get_footer();
