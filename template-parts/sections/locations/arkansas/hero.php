<?php
/**
 * Arkansas SEO — Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="ar-hero position-relative py-3 overflow-hidden">
    <div class="ar-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container-custom position-relative py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">

                <h1 class="display-4 fw-bold mb-4 text-white">SEO Services in Arkansas</h1>

                <div class="ar-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-0">
                        Running a business in Arkansas means competing for visibility online. Professional SEO services help your business rank higher in search results when potential customers in Arkansas look for what you offer. From Little Rock's corporate landscape to service providers across the Natural State, most businesses lack an effective SEO strategy or use outdated tactics that Google no longer rewards. SEO Specialist USA helps Arkansas businesses rank higher, attract qualified traffic, and convert searches into customers.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'arkansas-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>

            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-5">
                <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'ar-hero-contact-form'
                    )); 
                    ?>
            </div>

        </div>
    </div>
</section>
