<?php
/**
 * Template Name: SEO Audit
 * 
 * @package seospecialistusa
 */

get_header(); ?>

<div class="seo-audit-page">

    <?php
    // SEO Audit Page Sections
    get_template_part( 'template-parts/sections/seo-audit/hero' );
    get_template_part( 'template-parts/sections/seo-audit/what-is' );
    get_template_part( 'template-parts/sections/seo-audit/audit-report' );
    get_template_part( 'template-parts/sections/seo-audit/why-choose' );
    get_template_part( 'template-parts/sections/seo-audit/faq' );
    ?>

</div>

<?php get_footer(); ?>
