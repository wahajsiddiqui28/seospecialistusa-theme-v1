<?php
/**
 * Rhode Island SEO Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="ri-hero position-relative py-5 overflow-hidden">
    <div class="ri-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <div class="ri-hero-badge mb-4">
                    <span class="badge bg-brand-red px-3 py-2 fs-6 rounded-1 fw-semibold">Grow Your Business With SEO Services in Rhode Island</span>
                </div>

                <h1 class="display-3 fw-bold mb-4 text-white">SEO Services Rhode Island</h1>

                <div class="ri-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Dominate Delaware search results with tailored SEO strategies built to increase visibility, traffic, and revenue.
                    </p>
                    <p class="fs-6 opacity-90 mb-4">
                        Businesses across Wilmington, Dover, Newark, and the rest of Delaware rely on strong search performance, we help you outrank competitors and convert more customers.
                    </p>
                    <p class="fs-6 opacity-90 mb-0">Get a custom SEO plan designed for your Delaware market and business goals.</p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'rhode-island-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                <?php
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class'       => 'ri-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
