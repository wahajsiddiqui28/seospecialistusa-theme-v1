<?php
/**
 * New Mexico SEO Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="nm-hero position-relative py-5 overflow-hidden">
    <div class="nm-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <div class="mb-4">
                    <span class="badge bg-brand-red px-3 py-2 fs-6 rounded-1 fw-semibold">Grow Your Business With SEO Services in New Mexico</span>
                </div>

                <h1 class="display-3 fw-bold mb-4 text-white">SEO Services in New Mexico</h1>

                <div class="pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Growing a business in New Mexico means competing for visibility where it matters most: search results. SEO services in New Mexico help local businesses rank higher on Google, attract qualified traffic, and turn online searches into paying customers. From Albuquerque’s tech sector to Santa Fe’s tourism industry, companies across the state need strategic search optimization to stand out in their markets.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'new-mexico-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                    'class'       => 'nm-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
