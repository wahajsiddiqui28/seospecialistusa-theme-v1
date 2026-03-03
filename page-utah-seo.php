<?php
/**
 * Template Name: Utah SEO
 *
 * @package seospecialistusa
 */

get_header(); ?>

<div class="utah-page">

    <?php
    get_template_part( 'template-parts/sections/utah/hero' );
    get_template_part( 'template-parts/sections/utah/why-utah' );
    get_template_part( 'template-parts/sections/utah/services' );
    get_template_part( 'template-parts/sections/utah/why-choose' );
    get_template_part( 'template-parts/sections/utah/industries' );
    get_template_part( 'template-parts/sections/utah/process' );
    get_template_part( 'template-parts/sections/utah/timeline' );
    get_template_part( 'template-parts/sections/utah/contact-cta' );
    get_template_part( 'template-parts/sections/utah/faq' );
    ?>

</div>

<?php get_footer(); ?>
