<?php
/**
 * Why Kansas Businesses Need SEO
 */
?>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="position-relative">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/pages/kansas-business-growth.png" alt="Why Kansas Businesses Need SEO" class="img-fluid rounded-4 shadow-lg">
                    <!-- Subtle overlay text for premium feel -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white rounded-bottom-4 d-none d-md-block">
                        <p class="h6 mb-0">Driving Market Growth in KS Economics</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h2 class="display-6 fw-bold mb-4 text-dark">Why Kansas Businesses Need SEO Services</h2>
                <p>Kansas has diverse business markets spanning manufacturing, agriculture, healthcare, and professional services. Each sector faces unique search challenges and customer behavior patterns.</p>
                <p>Search competition continues to intensify. Businesses that invest in professional SEO gain significant advantages over competitors relying on outdated tactics or neglecting their online presence entirely.</p>
                
                <div class="mt-4">
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
</section>
