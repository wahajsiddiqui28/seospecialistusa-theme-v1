<?php
/**
 * Template Name: Wyoming SEO
 */

get_header(); ?>

<div class="wyoming-page">

    <?php 
    get_template_part( 'template-parts/sections/wyoming/hero' ); 
    get_template_part( 'template-parts/sections/wyoming/why-choose' ); 
    get_template_part( 'template-parts/sections/wyoming/landscapes' ); 
    get_template_part( 'template-parts/sections/wyoming/services' ); 
    get_template_part( 'template-parts/sections/wyoming/process' ); 
    get_template_part( 'template-parts/sections/wyoming/faq' ); 
    get_template_part( 'template-parts/sections/wyoming/footer-cta' ); 
    ?>

</div>

<?php get_footer(); ?>
