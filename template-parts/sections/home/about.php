<?php
/**
 * About Section Template Part
 * 
 * @package seospecialistusa
 */
?>

<section class="section-about section-padding">
    <div class="container-custom">
        <div class="row align-items-center">
            <!-- Left Side: Image -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="about-image-wrapper">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/home/trusted-seo-agency-in-usa.webp" alt="Top SEO Specialists in the USA" class="img-fluid rounded shadow-lg">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-6">
                <div class="about-content ps-lg-4">
                    <span class="badge bg-brand-red mb-3 px-3 py-2">About Us</span>
                    <h2 class="display-5 fw-bold text-brand-blue mb-4">Trusted SEO Agency in USA</h2>
                    
                    <div class="about-text-content">
                        <p>At SEO Specialist USA, we believe search engine optimization should be simple, clear, and effective. As a professional SEO company in the USA, we focus on strategies that drive real results. Our approach boosts rankings, attracts the right traffic, and helps businesses gain stronger visibility in competitive markets.</p>
                        
                        <p class="mt-3">Our team blends technical expertise with creative strategy, creating campaigns that fit your goals and deliver measurable growth. That is why so many companies across the United States choose us as their trusted SEO agency.</p>
                    </div>

                    <?php 
                    get_template_part( 'template-parts/components/cta', 'buttons', array(
                        'wrapper_class' => 'about-actions d-flex align-items-center gap-3 mt-4 flex-wrap'
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
