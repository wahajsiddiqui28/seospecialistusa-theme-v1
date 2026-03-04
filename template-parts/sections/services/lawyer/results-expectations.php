<?php
/**
 * Lawyer SEO Results/Expectations Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-results py-5" style="background-color: #fdf2f2;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Desktop/Tablet Graphic -->
            <div class="col-lg-6 m-0">
                <div class="results-graphic rounded-4 overflow-hidden shadow-lg">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/lawyer/What-You-Can-Expect-from-Our-Lawyer-SEO-Services.avif' ); ?>" alt="SEO Results Data" class="img-fluid w-100">
                </div>
            </div>

            <!-- Right Side: Expectations List -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">What You Can Expect from Our Lawyer SEO Services</h2>
                
                <ul class="expectations-list list-unstyled mb-5">
                    <li class="d-flex align-items-center gap-3 mb-3">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark fw-medium">Higher visibility for your law firm on Google.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-3">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark fw-medium">Increased website traffic from qualified leads.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-3">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark fw-medium">Better local presence in Google Maps and directories.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-3">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark fw-medium">Stronger online reputation through positive reviews and consistent branding.</span>
                    </li>
                    <li class="d-flex align-items-center gap-3 mb-3">
                        <i class="fas fa-dot-circle text-brand-red small"></i>
                        <span class="fs-6 text-dark fw-medium">Measurable increase in client inquiries and consultations.</span>
                    </li>
                </ul>

                <p class="fs-6 text-muted mb-5">
                    With SEO Specialist USA, you’re not just ranking higher, you’re gaining real, valuable clients who need your legal help.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'lawyer-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
