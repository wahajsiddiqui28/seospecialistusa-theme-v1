<?php
/**
 * Restaurant SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="restaurant-hero-section position-relative overflow-hidden py-5" style="background: linear-gradient(118deg, #bf0a30 0%, #002868 100%); min-height: 600px; display: flex; align-items: center;">
    <div class="hero-bg-overlay position-absolute w-100 h-100 top-0 start-0" style="background-image: url('<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/restaurant-seo/Restaurant-seo-banner.avif' ); ?>'); background-size: cover; background-position: center; opacity: 0.4; mix-blend-mode: overlay;"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-white bg-opacity-10 d-inline-flex px-3 py-1 rounded-pill border border-white border-opacity-25 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url('/') ); ?>" class="text-white text-decoration-none small">Home</a></li>
                        <li class="breadcrumb-item active text-white small" aria-current="page">Restaurant SEO</li>
                    </ol>
                </nav>

                <h1 class="display-5 fw-bold mb-4 text-white">Restaurant SEO Services That Fill Your Tables and Boost Online Orders</h1>
                
                <div class="restaurant-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4 text-white">
                        In today’s digital world, people don’t find restaurants by walking down the street, they find them online. At SEO Specialist USA, we help restaurants stand out, attract more diners, and grow revenue through powerful, data-driven restaurant SEO services.
                    </p>
                    <p class="fs-6 opacity-90 text-white">
                        Whether you run a fine dining spot, a coffee shop, or a multi-location chain, our SEO experts make sure hungry customers find your restaurant first, not your competitor's.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap pt-2">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'restaurant-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
             
                    <?php 
                        get_template_part( 'template-parts/components/form', 'hero', array(
                            'title' => 'Get in Touch',
                            'button_text' => 'Send',
                            'class' => 'restaurant-final-form'
                        )); 
                    ?>
            </div>
        </div>
    </div>
</section>
