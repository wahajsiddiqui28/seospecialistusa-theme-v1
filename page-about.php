<?php
/**
 * Template Name: About Page
 * 
 * @package seospecialistusa
 */

get_header();

// Include About Page Sections
get_template_part( 'template-parts/sections/about/hero' );
get_template_part( 'template-parts/sections/about/stats' );

get_template_part( 'template-parts/sections/about/who-we-are' );
get_template_part( 'template-parts/sections/about/why-choose' );
get_template_part( 'template-parts/sections/about/what-we-do' );

get_template_part( 'template-parts/sections/global/mission-vision' );
get_template_part( 'template-parts/sections/global/grow-together' );

get_footer();

