<?php
/**
 * On-Page SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="on-page-hero position-relative section-padding-lg">
    <div class="container-custom">
        <div class="row align-items-center g-5">
            <!-- Content Column -->
            <div class="col-lg-7 text-white">
                <nav class="about-breadcrumb mb-4 d-flex">
                    <div class="breadcrumb-glass px-3 py-1 rounded-pill">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-white text-decoration-none small">Home</a>
                        <span class="mx-2 text-white opacity-50 small">—</span>
                        <span class="text-white opacity-75 small">On Page</span>
                    </div>
                </nav>

                <h1 class="display-4 fw-bold mb-4 on-page-hero-title text-white">
                    On Page SEO Services by  SEO Specialist USA
                </h1>
                
                <div class="on-page-hero-desc mb-5" style="max-width: 650px;">
                    <p class="fs-6 opacity-90 lh-base mb-4">
                        Turn your website into a high-performing marketing tool. Our On Page SEO Services help businesses across the United States improve search visibility, attract qualified traffic, and convert more visitors into paying customers.
                    </p>
                    <p class="fs-6 opacity-90 lh-base">
                        Every page on your website should work together to drive growth. We make sure it does.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Form Column -->
            <div class="col-lg-5">
                <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'title' => 'Get in Touch',
                        'button_text' => 'Send',
                        'class' => 'grow-together-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
    
</section>
