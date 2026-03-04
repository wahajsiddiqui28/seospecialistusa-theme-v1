<?php
/**
 * Template Name: Vermont SEO
 * 
 * @package seospecialistusa
 */

get_header(); ?>

<div class="vermont-page">

    <?php
    // Vermont Page Sections
    get_template_part( 'template-parts/sections/vermont/hero' );
    get_template_part( 'template-parts/sections/vermont/why-vermont' );
    get_template_part( 'template-parts/sections/vermont/services-grid' );
    get_template_part( 'template-parts/sections/vermont/market-insights' );
    get_template_part( 'template-parts/sections/vermont/local-insights' );
    get_template_part( 'template-parts/sections/vermont/workflow' );
    get_template_part( 'template-parts/sections/vermont/why-choose' );
    get_template_part( 'template-parts/sections/vermont/faq' );
    get_template_part( 'template-parts/sections/vermont/footer-cta' );
    ?>

</div>

<?php get_footer(); ?>
