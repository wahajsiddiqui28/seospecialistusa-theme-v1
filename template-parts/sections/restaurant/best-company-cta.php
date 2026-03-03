<?php
/**
 * Restaurant SEO Final CTA Section (Variation)
 * 
 * @package seospecialistusa
 */
?>

<section class="restaurant-best-cta py-5">
    <div class="container-custom">
        <div class="cta-wrapper bg-brand-red rounded-5 p-4 p-lg-5 overflow-hidden position-relative">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-7 text-white position-relative z-1">
                    <h2 class="display-5 fw-bold mb-4 text-white">Partner with the Best SEO Company for Restaurants</h2>
                    
                    <div class="cta-text opacity-90">
                        <p class="fs-6 italic mb-4">
                            Your food brings people together. Our SEO brings people to <em>you</em>.
                        </p>
                        <p class="fs-6 mb-4">
                            At SEO Specialist USA, we combine creativity, strategy, and proven SEO techniques to make your restaurant stand out where it matters most online. We’re proud to be one of the best SEO companies for restaurants, helping dining brands across the globe grow consistently and profitably.
                        </p>
                        <p class="fs-6 mb-5">
                            It’s time to turn searchers into diners.
                        </p>
                        <h4 class="h5 fw-bold mb-4">Ready to grow your restaurant?</h4>
                        <p class="fs-6 mb-5">
                            Contact SEO Specialist USA today to get started with our expert restaurant SEO services and attract more local customers than ever before.
                        </p>
                    </div>

                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'restaurant-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                        ?>
                    </div>
                </div>

                <!-- Right Form Card -->
                <div class="col-lg-5">
                    <?php 
                        get_template_part( 'template-parts/components/form', 'hero', array(
                            'title' => '',
                            'button_text' => 'Send',
                            'class' => 'restaurant-final-form'
                        )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.restaurant-best-cta .cta-wrapper {
    box-shadow: 0 30px 60px rgba(191, 10, 48, 0.4);
}
</style>
