<?php
/**
 * About Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="about-hero-banner position-relative">
    <div class="container-custom">
        <div class="about-hero-wrapper text-center text-white">
            <!-- Breadcrumb -->
            <nav class="about-breadcrumb mb-4 d-flex justify-content-center">
                <div class="breadcrumb-glass px-4 py-2 rounded-pill">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white text-decoration-none">Home</a>
                    <span class="mx-2">—</span>
                    <span class="text-white opacity-75">About</span>
                </div>
            </nav>

            <h1 class="display-4 fw-bold mb-4 about-hero-title text-white">About SEO Specialist USA</h1>
            
            <div class="about-hero-desc mx-auto" style="max-width: 900px;">
                <p class="fs-6 mb-4">
                    At SEO Specialist USA, we help businesses grow, compete, and stand out in today's digital world. As a full-service digital marketing company, we serve clients globally combining creativity, technology, and strategy to build strong brands and drive measurable results.
                </p>
                <p class="fs-6 mb-5 opacity-90">
                    We understand that digital marketing isn't one-size-fits-all. That's why every strategy we create is tailored to the client's unique goals, audience, and market. Our mission is simple: *to help businesses grow online through smart, transparent, and performance-driven marketing.
                </p>
            </div>

            <div class="about-hero-actions d-flex justify-content-center align-items-center gap-3 flex-wrap mb-5 pb-5">
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                    'phone_class' => 'btn-dark-blue',
                    'button_class' => 'btn-white'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Overlapping Charts Image -->
<div class="about-hero-graphic my-5">
    <div class="graphic-container shadow-2xl rounded-4 border-2 border border-brand-red overflow-hidden">
        <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/about/about-section-2.jpg.webp" alt="Organic Traffic Growth Results" class="img-fluid w-100">
    </div>
</div>
