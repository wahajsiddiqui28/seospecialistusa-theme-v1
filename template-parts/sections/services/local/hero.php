<?php
/**
 * Local SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="local-hero-section position-relative overflow-hidden py-5" style="background: linear-gradient(118deg, #bf0a30 0%, #002868 100%); min-height: 600px; display: flex; align-items: center;">
    <!-- Background Overlay with Building Pattern - We'll use CSS for this if needed -->
    <div class="hero-bg-overlay position-absolute w-100 h-100 top-0 start-0" style="background-image: url('<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/home/seospecialistusa-banner.webp' ); ?>'); background-size: cover; background-position: center; opacity: 0.3; mix-blend-mode: overlay;"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-white bg-opacity-10 d-inline-flex px-3 py-1 rounded-pill border border-white border-opacity-25 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url('/') ); ?>" class="text-white text-decoration-none small">Home</a></li>
                        <li class="breadcrumb-item active text-white small" aria-current="page">Local SEO</li>
                    </ol>
                </nav>

                <h1 class="display-4 fw-bold mb-4 text-white">Local SEO Services That Help Your Business Dominate Local Search</h1>
                
                <div class="local-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4 text-white">
                        If your business isn't showing up when customers nearby search for your services, you're leaving money on the table. SEO Specialist USA offers professional local SEO services designed to help your business appear in Google's local results, attract nearby customers, and turn local searches into paying clients.
                    </p>
                    <p class="fs-6 opacity-90 text-white">
                        Our strategies are built for real growth, not just rankings. We combine proven optimization, local market research, and data-driven insights to help your business get found faster and chosen more often.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap pt-2">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'local-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <div class="col-lg-5">
                <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'local-hero-form'
                    )); 
                ?>
            </div>
        </div>
    </div>
    
    <!-- Red Pin Decoration -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-n5 opacity-20 z-0" style="width: 600px; height: 600px;">
        <svg viewBox="0 0 24 24" fill="var(--brand-red)" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
        </svg>
    </div>
</section>
