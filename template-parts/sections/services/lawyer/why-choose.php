<?php
/**
 * Lawyer SEO Why Choose Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA as Your Lawyer SEO Company</h2>
                
                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    We’re more than a marketing provider, we’re your long-term growth partner. Our team understands how people search for legal help and what makes them contact a law firm.
                </p>

                <p class="fw-bold text-brand-red mb-4 small text-uppercase tracking-wider">Here’s why we stand out among the best lawyer SEO companies:</p>

                <div class="lawyer-benefits-list mb-5">
                    <!-- Item 1 -->
                    <div class="lawyer-benefit-item d-flex align-items-start gap-3 p-3 mb-3 border rounded-3 shadow-sm bg-white">
                        <i class="fas fa-undo-alt text-brand-red fs-6 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-brand-blue mb-1">Legal Industry Expertise</h6>
                            <p class="small text-muted mb-0">We’ve optimized websites for multiple law firms across practice areas, from personal injury to immigration and criminal defense.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="lawyer-benefit-item d-flex align-items-start gap-3 p-3 mb-3 border rounded-3 shadow-sm bg-white">
                        <i class="fas fa-undo-alt text-brand-red fs-6 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-brand-blue mb-1">Tailored SEO Strategies</h6>
                            <p class="small text-muted mb-0">Every firm is different, and we build a unique plan that matches your location, audience, and goals.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="lawyer-benefit-item d-flex align-items-start gap-3 p-3 mb-3 border rounded-3 shadow-sm bg-white">
                        <i class="fas fa-undo-alt text-brand-red fs-6 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-brand-blue mb-1">Transparent Communication</h6>
                            <p class="small text-muted mb-0">No hidden tactics, you’ll always know what we’re doing and why.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="lawyer-benefit-item d-flex align-items-start gap-3 p-3 mb-3 border rounded-3 shadow-sm bg-white">
                        <i class="fas fa-undo-alt text-brand-red fs-6 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-brand-blue mb-1">Proven Track Record</h6>
                            <p class="small text-muted mb-0">Our results speak for themselves, more traffic, more calls, and more signed clients.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="lawyer-benefit-item d-flex align-items-start gap-3 p-3 mb-3 border rounded-3 shadow-sm bg-white">
                        <i class="fas fa-undo-alt text-brand-red fs-6 mt-1"></i>
                        <div>
                            <h6 class="fw-bold text-brand-blue mb-1">Affordable and Scalable Plans</h6>
                            <p class="small text-muted mb-0">Our lawyer SEO services are designed to grow with your firm, providing lasting value.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'lawyer-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic -->
            <div class="col-lg-6 m-0">
                <div class="lawyer-choose-graphic text-center">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/lawyer/Why-Choose-1.jpg.webp' ); ?>" alt="Why Choose Lawyer SEO" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
    </div>
</section>
