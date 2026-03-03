<?php
/**
 * Technical SEO Why Choose Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA</h2>
                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    There are plenty of SEO agencies but few that truly understand the technical layer. That’s our expertise.
                </p>

                <h5 class="fw-bold mb-4 text-brand-red">Why brands choose us:</h5>

                <div class="why-brands-list">
                    <!-- Item 1 -->
                    <div class="why-brand-item d-flex gap-3 mb-4">
                        <div class="why-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">U.S.-Based SEO Team :</h5>
                            <p class="fs-6 text-muted mb-0">We work with American businesses nationwide and understand your market.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="why-brand-item d-flex gap-3 mb-4">
                        <div class="why-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Certified Technical Experts:</h5>
                            <p class="fs-6 text-muted mb-0">Our specialists are skilled in Google Search Console, Core Web Vitals, and advanced site audits.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="why-brand-item d-flex gap-3 mb-4">
                        <div class="why-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Customized Fixes, Not Templates :</h5>
                            <p class="fs-6 text-muted mb-0">Every site is different, so our approach is 100% customized.</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="why-brand-item d-flex gap-3 mb-4">
                        <div class="why-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Performance-Driven Reporting:</h5>
                            <p class="fs-6 text-muted mb-0">You see exactly what improved load speed, crawl rate, and rankings.</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="why-brand-item d-flex gap-3 mb-4">
                        <div class="why-check mt-1">
                            <i class="fas fa-check-double text-brand-red"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Full-Service SEO Support:</h5>
                            <p class="fs-6 text-muted mb-0">Once your site is technically sound, we help you scale through on-page and off-page optimization too.</p>
                        </div>
                    </div>
                </div>

                <p class="mb-5 fs-6 text-dark fw-medium mt-4">We’re not just a technical SEO services agency, we’re your long-term digital growth partner.</p>

                <div class="d-flex align-items-center gap-3 flex-wrap mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-5 m-0">
                <div class="technical-choose-graphic">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical-seo/technical-seo-image-5-scaled.jpg.webp' ); ?>" alt="Why Choose SEO Specialist USA Illustration" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>
        </div>
    </div>
</section>
