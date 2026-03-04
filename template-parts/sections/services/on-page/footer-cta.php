<?php
/**
 * On-Page SEO Bottom CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="on-page-bottom-cta-form py-5 mt-5" style="background-color: #bf0a30; border-top-left-radius: 120px; border-top-right-radius: 120px;">
    <div class="container-custom py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-4 fw-bold mb-4 text-white">
                    Ready to Grow with Our <br> Proven On-Page SEO <br> Service?
                </h2>
                
                <p class="fs-6 opacity-90 mb-5 pe-lg-5">
                    Unlock your website's full potential with SEO Specialist USA, the trusted On-Page SEO company helping businesses across the United States achieve real, measurable growth. Let's optimize smarter, rank higher, and convert better together.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'title' => 'Get in Touch',
                        'button_text' => 'Send',
                        'class' => 'grow-together-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>
