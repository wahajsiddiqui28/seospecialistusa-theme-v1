<?php
/**
 * Restaurant SEO Final CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="restaurant-final-cta py-5">
    <div class="container-custom">
        <div class="cta-wrapper bg-brand-red rounded-5 p-4 p-lg-5 overflow-hidden position-relative">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-7 text-white position-relative z-1">
                    <h2 class="display-5 fw-bold mb-4 text-white">Start Growing with the Best Restaurant SEO Company</h2>
                    
                    <div class="cta-text opacity-90">
                        <p class="fs-6 mb-4">
                            At SEO Specialist USA, we’ve helped countless businesses dominate their local markets and achieve consistent growth. If you want your business to appear first when your customers are searching nearby, our local SEO services can make it happen.
                        </p>
                        <p class="fs-6 mb-4">
                            It’s time to claim your local market and turn searches into sales.
                        </p>
                        <p class="fs-6 mb-5">
                            Ready to grow locally? Contact SEO Specialist USA today for your free consultation.
                        </p>
                        <p class="fs-6 mb-5">
                            Let our experts show you why we’re one of the best local SEO companies trusted by businesses worldwide.
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

                <!-- Right Form -->
                <div class="col-lg-5">
                    <?php 
                        get_template_part( 'template-parts/components/form', 'hero', array(
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
.restaurant-final-cta .cta-wrapper {
    box-shadow: 0 30px 60px rgba(191, 10, 48, 0.3);
}
</style>
