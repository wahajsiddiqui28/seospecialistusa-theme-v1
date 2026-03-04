<?php
/**
 * New Mexico SEO — Start With SEO Services CTA Section
 *
 * @package seospecialistusa
 */
?>

<section id="contact" class="nm-cta-audit py-5" style="background-color: #0a0a0a;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-5 fw-bold mb-4 text-white">Get Started with SEO Services in New Mexico</h2>

                <p class="fs-6 opacity-90 mb-5 pe-lg-5 text-white">
                    Ready to increase your search visibility and attract more customers? We’ll analyze your current rankings, identify market opportunities, and build a strategy that drives measurable results.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'new-mexico-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-5">
                <div class="nm-cta-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/new-mexico/nm-cta-seo.jpg.webp' ); ?>" alt="Start With SEO Services in New Mexico" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
