<?php
/**
 * E-Commerce SEO Final CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="ecommerce-final-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom">
        <div class="row align-items-center g-5 py-lg-4">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-3 fw-bold mb-4 text-white">Let’s Grow Your Online Store Together</h2>
                
                <div class="cta-description mb-5 pe-lg-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Your products deserve to be seen, and found. With SEO Specialist USA, you’ll have a team of experts committed to helping your business climb rankings, drive consistent sales, and outperform competitors.
                    </p>
                    <p class="fs-6 opacity-90">
                        It’s time to make your online store more visible, valuable, and profitable.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'ecommerce-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Red Form Card -->
            <div class="col-lg-5">
                    <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'ecommerce-cta-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>
