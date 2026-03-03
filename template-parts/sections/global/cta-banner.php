<?php
/**
 * CTA Banner Section
 * 
 * @package seospecialistusa
 */
?>

<section class="section-cta-banner section-padding">
    <div class="container-custom">
        <div class="cta-banner-box">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2 class="display-5 fw-bold text-white mb-3">Grow Faster With Our SEO Services in USA</h2>
                    <p class="text-white opacity-75 mb-4">
                        The right SEO plan can change the way your business grows. At SEO Specialist USA, we help you gain stronger visibility, attract the right customers, and build lasting results in the competitive US market.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <?php 
                    get_template_part( 'template-parts/components/cta', 'buttons', array(
                        'wrapper_class' => 'cta-banner-actions d-flex align-items-center gap-3 justify-content-lg-end flex-wrap'
                    )); 
                    ?>
                </div>
            </div>
            <!-- Decorative Fin/Graphic Placeholder -->
            <div class="cta-banner-graphic"></div>
        </div>
    </div>
</section>
