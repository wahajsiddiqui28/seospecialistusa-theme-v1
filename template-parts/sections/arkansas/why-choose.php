<?php
/**
 * Arkansas SEO — Why Choose SEO Specialist USA for Arkansas SEO Section
 *
 * @package seospecialistusa
 */
?>

<section class="ar-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0 ps-lg-5">
                <h2 class="display-5 fw-bold text-brand-red mb-4">Why Choose SEO Specialist USA for Arkansas SEO</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">

                <p class="fs-6 text-muted mb-4 pe-lg-4">
                    We work with businesses across different markets and understand how to adapt strategies based on competition levels and search behavior. Arkansas presents unique opportunities: mid-sized cities with growing economies, underserved smaller markets, and industries where digital marketing adoption is developing.
                </p>

                <p class="fs-6 text-muted mb-4 pe-lg-4">
                    Our remote approach delivers results without requiring a physical office in your city. Expertise, execution, and accountability matter. You receive transparent reporting, direct communication, and data-driven strategies.
                </p>

                <p class="fs-6 text-muted mb-5 pe-lg-4">
                    We focus on ROI. Every recommendation connects to business outcomes: phone calls, form submissions, or foot traffic based on your goals. SEO strategy aligns with what drives revenue for your business.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'arkansas-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Arkansas Map Image -->
            <div class="col-lg-6 m-0">
                <div class="ar-why-choose-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/arkansas/WhyChoose-Arkansas.jpg.webp' ); ?>" alt="Arkansas Map SEO" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
