<?php
/**
 * Montana SEO Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="mt-hero position-relative py-5 overflow-hidden">
    <div class="mt-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <div class="mb-4">
                    <span class="badge bg-brand-red px-3 py-2 fs-6 rounded-1 fw-semibold">Helping Montana Businesses Grow Online</span>
                </div>

                <h1 class="display-3 fw-bold mb-4 text-white">SEO Services Montana</h1>

                <div class="pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Montana businesses face increasing competition across industries such as tourism, real estate, healthcare, and local retail. A strong SEO strategy is essential to attract the right audience and increase online visibility. At SEO Specialist USA, we combine strategy, technology, and creativity to help Montana companies achieve measurable results.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'montana-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                    'class'       => 'mt-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
