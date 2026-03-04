<?php
/**
 * Delaware SEO Footer CTA Section
 *
 * @package seospecialistusa
 */
?>

<section id="contact" class="delaware-footer-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-5 fw-bold mb-4 text-white">Start Growing Your Delaware Business With Proven SEO Service</h2>

                <p class="fs-6 opacity-90 mb-5 pe-lg-5 text-white">
                    Your customers are searching every day, make sure they find you first. Our customized SEO strategies help Delaware businesses strengthen visibility, increase leads, and build long‑term authority across every major city in the state.
                </p>
                <p class="fs-6 opacity-90 mb-5 pe-lg-5 text-white">
                    From Wilmington to Dover and Newark, we design campaigns that match your goals, budget, and competitive landscape.
                </p>

                <h5 class="fw-bold text-white mb-3">Ready to accelerate your growth?</h5>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'delaware-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                <?php
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class'       => 'delaware-final-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
