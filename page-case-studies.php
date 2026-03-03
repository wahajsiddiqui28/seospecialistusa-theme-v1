<?php
/**
 * Template Name: Case Studies Page
 * 
 * @package seospecialistusa
 */

get_header();

// Case Studies Hero Section
get_template_part( 'template-parts/sections/case-studies/hero' );

// Reuse Stats Section (Same as About page stats)
get_template_part( 'template-parts/sections/about/stats' );

// Main Case Studies Grid (with filters)
get_template_part( 'template-parts/sections/case-studies/grid' );

// Testimonials
get_template_part( 'template-parts/sections/global/testimonials' );

// CTA Form Section
get_template_part( 'template-parts/sections/global/grow-together' );

get_footer();

