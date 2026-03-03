<?php
/**
 * On-Page SEO Packages Banner
 * 
 * @package seospecialistusa
 */
?>
<section class="on-page-packages py-5">
    <div class="container-custom">
        <div class="packages-banner-wrapper position-relative overflow-hidden p-4 p-lg-5 rounded-4 bg-black border-brand-red border-5">
            <!-- Rocket Background Graphic -->
            <div class="packages-rocket-bg position-absolute end-0 bottom-0 opacity-25">
                 <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/on-page/rocket-outline.png' ); ?>" alt="" style="width: 300px;">
            </div>

            <div class="row align-items-center position-relative z-1">
                <!-- Content -->
                <div class="col-lg-6 text-white">
                    <h2 class="display-5 fw-bold mb-4 text-white">
                        Affordable On Page <br> SEO Packages
                    </h2>
                    
                    <div class="packages-desc pe-lg-5 mb-4">
                        <p class="fs-6 opacity-90 mb-4">
                            We understand that every business has different needs and budgets. That's why our On Page SEO Services are flexible and affordable, designed to deliver measurable value no matter your company size.
                        </p>
                        <p class="fs-6 opacity-90">
                            Our packages include everything from one-time website audits to complete, ongoing optimization. Whether you're a small business or an enterprise, we have a plan to fit your goals.
                        </p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="col-lg-6 text-lg-end">
                    <div class="d-flex align-items-center gap-3 justify-content-lg-end flex-wrap">
                        <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.border-brand-red.border-5 {
    border: 15px solid var(--brand-red) !important;
}
.packages-banner-wrapper {
    box-shadow: 0 40px 100px rgba(0,0,0,0.5);
}
.btn-premium{
    /* padding: 1rem 0.5rem !important; */
}
</style>
