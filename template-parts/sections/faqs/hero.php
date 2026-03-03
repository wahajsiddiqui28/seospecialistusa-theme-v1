<?php
/**
 * FAQs Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="faqs-hero position-relative">
    <div class="container-custom">
        <div class="faqs-hero-wrapper text-white text-center">
            <!-- Breadcrumb -->
            <nav class="about-breadcrumb mb-4 d-flex justify-content-center">
                <div class="breadcrumb-glass px-4 py-2 rounded-pill">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white text-decoration-none">Home</a>
                    <span class="mx-2">—</span>
                    <span class="text-white opacity-75">FAQs</span>
                </div>
            </nav>

            <h1 class="display-3 fw-bold mb-4 faqs-hero-title text-white">
                SEO Specialist USA – <br> Frequently Asked Questions (FAQs)
            </h1>
            
            <div class="faqs-hero-desc mx-auto" style="max-width: 850px;">
                <p class="fs-6 mb-5 opacity-90 lh-base">
                    Your business deserves to stand out online, and our professional SEO services in USA make that possible. At SEO Specialist USA, we help companies rank higher, get more visitors, and turn clicks into customers. Our proven SEO company focuses on measurable growth with more leads, more sales, and stronger visibility.
                </p>
            </div>

            <div class="faqs-hero-actions d-flex align-items-center gap-3 flex-wrap justify-content-center">
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
