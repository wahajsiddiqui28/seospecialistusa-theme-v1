<?php
/**
 * Local SEO Why Choose Section
 * 
 * @package seospecialistusa
 */
?>

<section class="local-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="choose-graphic rounded-4 overflow-hidden shadow-lg">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/local-seo/Local-SEO-section3.jpg.webp' ); ?>" alt="Local SEO Partner" class="img-fluid w-100">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA as Your Local SEO Partner</h2>
                
                <p class="fs-6 text-muted mb-4">
                    We're not just another local SEO company. We're a team that understands how people search, how Google ranks, and what actually converts visitors into leads.
                </p>

                <h5 class="fw-bold text-brand-red mb-4">Here's what makes us different:</h5>

                <div class="choose-reasons">
                    <!-- Reason 1 -->
                    <div class="reason-item d-flex gap-3 mb-4 p-3 rounded-3 border border-light-subtle shadow-sm bg-white">
                        <div class="reason-icon text-brand-red mt-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-2">Affordable and Effective</h4>
                            <p class="small text-muted mb-0">Our affordable local SEO services deliver real impact without overcharging.</p>
                        </div>
                    </div>

                    <!-- Reason 2 -->
                    <div class="reason-item d-flex gap-3 mb-4 p-3 rounded-3 border border-light-subtle shadow-sm bg-white">
                        <div class="reason-icon text-brand-red mt-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-2">Custom Strategies</h4>
                            <p class="small text-muted mb-0">Every business is unique, so we tailor campaigns based on your goals, location, and competition.</p>
                        </div>
                    </div>

                    <!-- Reason 3 -->
                    <div class="reason-item d-flex gap-3 mb-4 p-3 rounded-3 border border-light-subtle shadow-sm bg-white">
                        <div class="reason-icon text-brand-red mt-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-2">Proven Results</h4>
                            <p class="small text-muted mb-0">We've helped businesses across the US and beyond rank higher and grow consistently.</p>
                        </div>
                    </div>

                    <!-- Reason 4 -->
                    <div class="reason-item d-flex gap-3 mb-4 p-3 rounded-3 border border-light-subtle shadow-sm bg-white">
                        <div class="reason-icon text-brand-red mt-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-2">Transparent Reporting</h4>
                            <p class="small text-muted mb-0">No vague metrics, just real progress you can track and measure.</p>
                        </div>
                    </div>

                    <!-- Reason 5 -->
                    <div class="reason-item d-flex gap-3 mb-4 p-3 rounded-3 border border-light-subtle shadow-sm bg-white">
                        <div class="reason-icon text-brand-red mt-1">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div>
                            <h4 class="h6 fw-bold text-brand-blue mb-2">Dedicated Support</h4>
                            <p class="small text-muted mb-0">You get direct access to our team, with consistent updates and guidance every step of the way.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'local-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
