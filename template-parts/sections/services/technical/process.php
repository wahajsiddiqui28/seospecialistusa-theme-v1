<?php
/**
 * Technical SEO Process Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-process py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Steps -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">How Our Technical SEO Process Works</h2>
                <p class="fs-6 text-muted mb-5 pe-lg-5">
                    We believe in process-driven results. Our step-by-step workflow ensures your site stays ahead of every technical curve.
                </p>

                <div class="process-steps-list">
                    <!-- Step 1 -->
                    <div class="process-item d-flex gap-3 mb-4">
                        <div class="process-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">1. Deep Discovery & Audit :</h5>
                            <p class="fs-6 text-muted mb-0">We analyze site architecture, crawl logs, and server health.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="process-item d-flex gap-3 mb-4">
                        <div class="process-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">2. Roadmap & Prioritization :</h5>
                            <p class="fs-6 text-muted mb-0">You'll get a clear, actionable plan of what to fix first for maximum impact.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="process-item d-flex gap-3 mb-4">
                        <div class="process-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">3. Implementation & Testing :</h5>
                            <p class="fs-6 text-muted mb-0">We apply changes, monitor performance, and test using Google-approved tools.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="process-item d-flex gap-3 mb-4">
                        <div class="process-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">4. Review & Reporting :</h5>
                            <p class="fs-6 text-muted mb-0">You'll receive easy-to-read progress reports with clear data and results.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="process-item d-flex gap-3 mb-4">
                        <div class="process-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">5. Continuous Improvement :</h5>
                            <p class="fs-6 text-muted mb-0">As search algorithms evolve, we keep your site fully optimized.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap mt-5">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="process-graphic text-center p-3 rounded-4 bg-light overflow-hidden shadow-sm border">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical-seo/technical-seo-image-3-2019x2048.jpg.webp' ); ?>" alt="Technical SEO Process illustration" class="img-fluid w-100 rounded">
                </div>
            </div>
        </div>
    </div>
</section>
