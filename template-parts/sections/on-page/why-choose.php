<?php
/**
 * On-Page SEO Why Choose Section
 * 
 * @package seospecialistusa
 */
?>

<section class="on-page-why-choose py-5" style="background-color: #fef1f3;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA</h2>
                
                <p class="fs-6 lh-base text-dark opacity-90 mb-4">
                    Choosing the right SEO partner makes all the difference. With SEO Specialist USA, you get experience, honesty, and measurable success.
                </p>

                <h5 class="text-brand-red fw-bold mb-4">Here's what sets us apart:</h5>

                <div class="choose-us-list mb-5">
                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="choose-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Experienced Team :</h6>
                            <p class="mb-0 text-muted small">Our specialists have years of experience optimizing websites across various industries in the U.S.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="choose-content">
                            <h6 class="fw-bold text-brand-blue mb-1">White-Hat SEO Only :</h6>
                            <p class="mb-0 text-muted small">We use ethical, Google-approved practices that deliver long-term, sustainable growth.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="choose-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Customized Strategies :</h6>
                            <p class="mb-0 text-muted small">Every business is unique, so we design optimization plans around your specific goals and audience.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3 mb-4">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="choose-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Dedicated Account Manager :</h6>
                            <p class="mb-0 text-muted small">You'll have one point of contact who understands your brand and oversees every stage of your SEO campaign.</p>
                        </div>
                    </div>

                    <div class="choose-item d-flex gap-3">
                        <div class="checkmark-icon text-brand-red">
                            <i class="fas fa-check-double mt-1"></i>
                        </div>
                        <div class="choose-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Transparent Reporting :</h6>
                            <p class="mb-0 text-muted small">We keep you informed with detailed performance reports and clear progress updates.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <p class="fw-medium text-dark opacity-80">We don't promise overnight success, we build a foundation for real, lasting results.</p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="why-choose-graphic position-relative p-2 p-lg-4">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/on-page/whychooseseo.avif' ); ?>" alt="Why Choose us for SEO" class="img-fluid w-100 rounded-4 shadow-sm object-fit-cover" style="min-height: 500px;">
                </div>
            </div>
        </div>
    </div>
</section>
