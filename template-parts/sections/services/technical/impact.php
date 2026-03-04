<?php
/**
 * Technical SEO Success Stories Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-impact py-5" style="background-color: #fdf2f2;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Image -->
            <div class="col-lg-5 m-0">
                <div class="impact-graphic">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical-seo/technical-seo-image-6.avif' ); ?>" alt="Technical SEO Success Stories" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Success Stories & Client Impact</h2>
                
                <p class="fs-6 text-muted mb-5 pe-lg-5">
                    Across industries from eCommerce to local businesses our clients have seen consistent results after optimizing their site’s technical performance.
                </p>

                <h5 class="fw-bold mb-4 text-brand-red">After working with us, clients typically see:</h5>

                <ul class="impact-list list-unstyled mb-5">
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">35–50% improvement in crawl efficiency.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">40% faster page load speeds.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">20% increase in organic traffic within 3 months.</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Noticeable boosts in ranking stability and conversions.</span>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
