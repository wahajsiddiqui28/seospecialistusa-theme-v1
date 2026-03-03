<?php
/**
 * Off-Page SEO Why Choose Section
 * 
 * @package seospecialistusa
 */
?>

<section class="off-page-choose py-5" style="background-color: #fef1f3;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Graphic -->
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="choose-graphic p-2 bg-white rounded-4 shadow-sm">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/off-page/WhyChooseSEOSpecialistUSA.webp' ); ?>" alt="Why Choose SEO Specialist USA Off-Page" class="img-fluid w-100 rounded-3">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-6 order-1 order-lg-2">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA</h2>
                <p class="text-dark opacity-80 mb-4 fs-6">
                    We’re not just another off-page SEO company, we’re a trusted growth partner for businesses nationwide. Our focus is on long-term results, not short-term tricks.
                </p>

                <h6 class="text-brand-red fw-bold mb-4">Here's what makes us different:</h6>

                <div class="choose-list mb-5">
                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="item-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="item-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Ethical Practices Only :</h6>
                            <p class="mb-0 text-muted small">We never use black-hat tactics that could hurt your site. Every link we build adds real value.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="item-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="item-content">
                            <h6 class="fw-bold text-brand-blue mb-1">U.S.-Based SEO Experts :</h6>
                            <p class="mb-0 text-muted small">Our team understands American markets, trends, and local search patterns.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="item-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="item-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Transparent Communication :</h6>
                            <p class="mb-0 text-muted small">You’ll always know what we’re doing, why we’re doing it, and what results to expect.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="item-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="item-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Customized Strategies :</h6>
                            <p class="mb-0 text-muted small">No cookie-cutter plans, every campaign fits your brand, niche, and goals.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3">
                        <div class="item-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="item-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Proven Results :</h6>
                            <p class="mb-0 text-muted small">Our clients consistently see higher authority, increased organic traffic, and stronger brand recognition.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'off-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
