<?php
/**
 * Contact Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="contact-hero-section position-relative overflow-hidden py-5" style="min-height: 500px; display: flex; align-items: center;">
    <!-- Background Image with Overlay -->
    <div class="position-absolute w-100 h-100 top-0 start-0 z-0">
        <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/home/seospecialistusa-banner.webp' ); ?>" alt="Contact Us" class="w-100 h-100 object-fit-cover">
        <div class="position-absolute w-100 h-100 top-0 start-0" style="background: linear-gradient(90deg, rgba(0, 40, 104, 0.8) 0%, rgba(191, 10, 48, 0.8) 100%);"></div>
    </div>

    <div class="container-custom position-relative z-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-5 text-center">
                    <div class="breadcrumb-pill bg-dark bg-opacity-50 d-inline-flex px-4 py-2 rounded-pill border border-white border-opacity-25 text-white small">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-white text-decoration-none">Home</a>
                        <span class="mx-2">—</span>
                        <span>Contact Us</span>
                    </div>
                </nav>

                <h1 class="display-3 fw-bold mb-4 text-white text-center">Let’s Grow Your Business Together</h1>
                
                <p class="fs-6 opacity-90 mb-5 text-white pe-lg-5 text-center">
                    Need help getting found on Google? Whether you’re ready to start a project or just have questions, we’re here to guide you. Get in touch with SEO Specialist USA and let’s discuss how we can help your business grow online.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'contact-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
