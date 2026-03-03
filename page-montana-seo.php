<?php
/**
 * Template Name: Montana SEO
 *
 * @package seospecialistusa
 */

get_header(); ?>

<div class="montana-page">

    <?php
    get_template_part( 'template-parts/sections/montana/hero' );
    get_template_part( 'template-parts/sections/montana/why-choose' );
    get_template_part( 'template-parts/sections/montana/solutions' );
    get_template_part( 'template-parts/sections/montana/industries' );
    get_template_part( 'template-parts/sections/montana/process' );
    get_template_part( 'template-parts/sections/montana/benefits' );
    get_template_part( 'template-parts/sections/montana/cta-audit' );
    get_template_part( 'template-parts/sections/montana/faq' );
    ?>

</div>

<?php get_footer(); ?>
