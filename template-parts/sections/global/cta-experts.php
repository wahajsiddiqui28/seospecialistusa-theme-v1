<?php
/**
 * SEO Experts CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="section-cta-experts section-padding bg-white">
    <div class="container-custom">
        <div class="experts-box position-relative py-5 px-4 px-md-5 rounded border-2 border border-brand-blue shadow-premium">
            <div class="row align-items-center">
                <!-- Content -->
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold text-brand-red mb-3"><?php esc_html_e('Work with Top SEO Experts in USA', 'seospecialistusa'); ?></h2>
                    <p class="mb-4 text-brand-black opacity-90">
                        <?php esc_html_e('Partner with SEO Specialist USA to take your business higher in search rankings. Our SEO services in the USA are designed to increase traffic, improve online visibility, and drive measurable business growth. With proven strategies and a team of dedicated SEO professionals, we help brands connect with the right audience and achieve lasting results.', 'seospecialistusa'); ?>
                    </p>
                    
                    <?php 
                    get_template_part( 'template-parts/components/cta', 'buttons', array(
                        'wrapper_class' => 'expert-cta-wrapper d-flex align-items-center gap-3 flex-wrap'
                    )); 
                    ?>
                </div>

                <!-- Image -->
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="expert-image-container rounded overflow-hidden border border-brand-red border-2">
                        <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/home/work-with-top-seo-experts-in-usa.webp" alt="SEO Experts in USA" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
