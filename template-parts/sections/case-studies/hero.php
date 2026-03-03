<?php
/**
 * Case Studies Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="case-studies-hero position-relative">
    <div class="container-custom">
        <div class="case-hero-wrapper text-white text-center">
            <!-- Breadcrumb -->
            <nav class="about-breadcrumb mb-4 d-flex justify-content-center">
                <div class="breadcrumb-glass px-4 py-2 rounded-pill">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white text-decoration-none">Home</a>
                    <span class="mx-2">—</span>
                    <span class="text-white opacity-75">Case Studies</span>
                </div>
            </nav>

            <h1 class="display-3 fw-bold mb-4 case-hero-title text-white">
                What Makes Our Digital Marketing, <br class="d-none d-lg-block"> Agency Stand Out?
            </h1>
            
            <div class="case-hero-desc mx-auto" style="max-width: 950px;">
                <p class="fs-6 mb-5 opacity-90 lh-base">
                    Your business deserves to stand out online, and our professional SEO services in USA make that possible. At SEO Specialist USA, we help companies rank higher, get more visitors, and turn clicks into customers. Our proven SEO company focuses on measurable growth with more leads, more sales, and stronger visibility.
                </p>
            </div>

            <div class="case-hero-actions d-flex justify-content-center align-items-center gap-3 flex-wrap">
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                    'phone_class' => 'btn-dark-blue',
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
