<?php
/**
 * Dental SEO Case Studies CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="dental-case-studies-cta py-5 bg-white">
    <div class="container-custom">
        <div class="case-studies-inner position-relative p-4 p-lg-5 rounded-4 overflow-hidden shadow-lg border border-brand-red border-4" style="background-color: #000;">
            <div class="row align-items-center position-relative z-1 g-4">
                <!-- Left Side: Content -->
                <div class="col-lg-7">
                    <h2 class="display-4 fw-bold text-white mb-3">Discover Our SEO Case Studies</h2>
                    <h5 class="fw-bold text-white mb-4">Partner with the Best Dental SEO Company</h5>
                    
                    <div class="cta-text text-white opacity-90 pe-lg-4">
                        <p class="mb-3">
                            If your dental website isn’t showing up on the first page, your competitors are getting the calls that should be yours. It’s time to change that.
                        </p>
                        <p class="mb-3">
                            At SEO Specialist USA, we’re proud to be one of the best dental SEO companies helping dentists worldwide attract more patients through powerful search engine optimization.
                        </p>
                        <p class="mb-3">
                            Our proven strategies, local expertise, and personalized approach help your practice grow faster and more sustainably.
                        </p>
                        <p class="mb-4">
                            Ready to get more patients and dominate local search? Contact SEO Specialist USA today and let’s start building your path to online success with our trusted dental SEO services.
                        </p>
                    </div>
                </div>

                <!-- Right Side: Graphic & Buttons -->
                <div class="col-lg-5 text-center text-lg-end">                    
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end gap-3 flex-wrap">
                        <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'dental-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
