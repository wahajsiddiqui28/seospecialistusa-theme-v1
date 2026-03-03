<?php
/**
 * The front page template file
 *
 * @package seospecialistusa
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        /**
         * 1. Hero Section
         */
        get_template_part( 'template-parts/sections/home/hero' );

        /**
         * 2. About Section
         */
        get_template_part( 'template-parts/sections/home/about' );

        /**
         * 3. Stats Section
         */
        get_template_part( 'template-parts/sections/home/stats' );

        /**
         * 4. Services Section
         */
        get_template_part( 'template-parts/sections/home/services' );

         /**
         * 5. Final CTA Banner
         */
        get_template_part( 'template-parts/sections/global/cta-banner' );

        /**
         * 10. Why Choose Us Section
         */
        get_template_part( 'template-parts/sections/home/why-choose' );
        /**
         * 7. Growth Section
         */
        get_template_part( 'template-parts/sections/home/growth' );
           /**
         * 8. Case Studies Section
         */
        get_template_part( 'template-parts/sections/case-studies/grid' );
               /**
         * 9. Testimonials Section
         */
        get_template_part( 'template-parts/sections/global/testimonials' );

        /**
         * 6. Process Section
         */
        get_template_part( 'template-parts/sections/home/process' );

        

          /**
         * 12. Experts CTA Section
         */
        get_template_part( 'template-parts/sections/global/cta-experts' );

 

        

        /**
         * 11. FAQ Section
         */
        get_template_part( 'template-parts/sections/faqs/accordion' );

   

       

        /**
         * 13. Locations Section
         */
        get_template_part( 'template-parts/sections/home/locations' );
        ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
