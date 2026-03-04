<?php
/**
 * On-Page SEO Real Results Section
 * 
 * @package seospecialistusa
 */
?>

<section class="on-page-results py-5" style="background-color: #fef1f3;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Real Results You Can Measure</h2>
                
                <p class="text-brand-red fw-bold mb-4">We're driven by results, not promises. Our clients consistently see improvements in:</p>

                <div class="results-list mb-5">
                    <div class="result-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="result-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Keyword Rankings :</h6>
                            <p class="mb-0 text-muted small">Higher positions on Google for target terms.</p>
                        </div>
                    </div>

                    <div class="result-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="result-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Traffic Quality :</h6>
                            <p class="mb-0 text-muted small">Increased visitors who are genuinely interested in your services.</p>
                        </div>
                    </div>

                    <div class="result-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="result-content">
                            <h6 class="fw-bold text-brand-blue mb-1">User Engagement :</h6>
                            <p class="mb-0 text-muted small">Longer visits, better click-through rates, and lower bounce rates.</p>
                        </div>
                    </div>

                    <div class="result-item d-flex gap-3">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="result-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Conversions :</h6>
                            <p class="mb-0 text-muted small">More calls, form submissions, and sales from organic traffic.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <p class="text-dark opacity-80">Every optimization we make is tracked and refined to help your business grow.</p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-results-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic -->
            <div class="col-lg-6 m-0">
                <div class="results-graphic p-2 p-lg-4 bg-white rounded-4 shadow-sm overflow-hidden">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/on-page/RealResultsYouCanMeasure.jpg.webp' ); ?>" alt="Real SEO Results Measurement" class="img-fluid w-100 object-fit-cover" style="min-height: 450px;">
                </div>
            </div>
        </div>
    </div>
</section>
