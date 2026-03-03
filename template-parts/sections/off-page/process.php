<?php
/**
 * Off-Page SEO Process Section
 * 
 * @package seospecialistusa
 */
?>

<section class="off-page-process py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Our Proven Off Page SEO Process</h2>
                <p class="text-dark opacity-80 mb-5 fs-6">
                    Our process is built on trust, transparency, and measurable growth.
                </p>

                <div class="process-checklist mb-5">
                    <div class="process-step d-flex gap-3 mb-4">
                        <div class="step-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="step-content">
                            <h6 class="fw-bold text-brand-blue mb-1">1. Research & Audit :</h6>
                            <p class="mb-0 text-muted small">We start with a complete backlink audit to understand your current authority and identify gaps.</p>
                        </div>
                    </div>

                    <div class="process-step d-flex gap-3 mb-4">
                        <div class="step-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="step-content">
                            <h6 class="fw-bold text-brand-blue mb-1">2. Strategy Development :</h6>
                            <p class="mb-0 text-muted small">We design a custom plan focusing on quality link building, niche outreach, and brand signals.</p>
                        </div>
                    </div>

                    <div class="process-step d-flex gap-3 mb-4">
                        <div class="step-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="step-content">
                            <h6 class="fw-bold text-brand-blue mb-1">3. Outreach & Relationship Building :</h6>
                            <p class="mb-0 text-muted small">Our team connects with bloggers, journalists, and publishers to earn natural, high-value backlinks.</p>
                        </div>
                    </div>

                    <div class="process-step d-flex gap-3 mb-4">
                        <div class="step-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="step-content">
                            <h6 class="fw-bold text-brand-blue mb-1">4. Content Promotion :</h6>
                            <p class="mb-0 text-muted small">We create and distribute compelling content that encourages shares and natural link growth.</p>
                        </div>
                    </div>

                    <div class="process-step d-flex gap-3">
                        <div class="step-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="step-content">
                            <h6 class="fw-bold text-brand-blue mb-1">5. Ongoing Reporting :</h6>
                            <p class="mb-0 text-muted small">You’ll receive monthly reports with detailed insights into new backlinks, domain authority improvements, and traffic growth.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'off-page-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic -->
            <div class="col-lg-6">
                <div class="process-visual p-3 bg-light rounded-4 shadow-sm">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/off-page/OurProvenOffPageSEOProcess.jpg.webp' ); ?>" alt="Proven Off-Page SEO Process Graphic" class="img-fluid w-100 rounded-3">
                </div>
            </div>
        </div>
    </div>
</section>
