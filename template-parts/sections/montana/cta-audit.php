<?php
/**
 * Montana SEO — Start With a Free SEO Audit CTA Section
 *
 * @package seospecialistusa
 */
?>

<section id="contact" class="mt-cta-audit py-5" style="background-color: #0a0a0a;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-5 fw-bold mb-4 text-white">Start With a Free SEO Audit</h2>

                <p class="fs-6 opacity-90 mb-5 pe-lg-5 text-white">
                    Find out how your Montana business can improve online visibility. Our dedicated SEO managers provide actionable insights and support within 24–48 hours. With no long-term contracts and affordable plans, you can take the first step toward better rankings today.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'montana-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-5">
                <div class="mt-cta-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/montana/mt-free-audit-cta.jpg.webp' ); ?>" alt="Start With a Free SEO Audit Montana" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
