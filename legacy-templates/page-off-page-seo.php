<?php
/**
 * Template Name: Off-Page SEO Service Page
 * 
 * @package seospecialistusa
 */

get_header();

// 1. Hero Section (Image 1)
get_template_part( 'template-parts/sections/off-page/hero' );

// 2. Why Essential Section (Image 2)
get_template_part( 'template-parts/sections/off-page/why-essential' );

// 3. Expert Services Section (Image 3)
get_template_part( 'template-parts/sections/off-page/expert-services' );

// 4. Advanced Process Section (Image 4)
get_template_part( 'template-parts/sections/off-page/process' );

// 5. Why Choose Section (Image 5)
get_template_part( 'template-parts/sections/off-page/why-choose' );

// 6. FAQ Section
get_template_part( 'template-parts/sections/off-page/faq' );

// 7. Reuse Bottom CTA
get_template_part( 'template-parts/sections/on-page/footer-cta' );

get_footer();

