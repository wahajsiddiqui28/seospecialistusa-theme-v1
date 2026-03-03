<?php
/**
 * Template Name: FAQs Page
 * 
 * @package seospecialistusa
 */

get_header();

// FAQ Hero Section
get_template_part( 'template-parts/sections/faqs/hero' );

// Reuse FAQ Section from homepage
get_template_part( 'template-parts/sections/faqs/accordion' );

// CTA Form Section
get_template_part( 'template-parts/sections/global/grow-together' );

get_footer();

