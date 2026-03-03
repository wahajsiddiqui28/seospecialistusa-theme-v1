<?php
/**
 * Who We Are Section
 * 
 * @package seospecialistusa
 */
?>

<section class="section-who-we-are py-5 bg-white">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center">
            <!-- Left Side: Image with Question Mark -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="who-we-are-image position-relative rounded-4 overflow-hidden shadow-premium">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/about/who-we-are.webp" alt="Who We Are - SEO Specialist USA Team" class="img-fluid w-100">
                    <div class="image-overlay-icon d-flex align-items-center justify-content-center">
                        <i class="fas fa-question text-white display-2 fw-bold opacity-75"></i>
                    </div>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7">
                <div class="who-we-are-content ps-lg-5">
                    <h2 class="display-4 fw-bold text-brand-blue mb-4">Who We Are</h2>
                    
                    <div class="who-we-are-text">
                        <p class="fs-6 text-dark mb-4 lh-base">
                            SEO Specialist USA is built on a passion for helping businesses succeed. Our team of digital strategists, SEO experts, designers, and developers work together to create online experiences that attract, engage, and convert. From startups to large enterprises, we provide customized digital solutions that make brands visible, trusted, and profitable.
                        </p>
                        
                        <p class="fs-6 text-dark mb-5 lh-base">
                            We've partnered with clients across industries eCommerce, real estate, healthcare, technology, and more helping them expand their reach and grow their online revenue.
                        </p>
                    </div>

                    <div class="who-we-are-actions d-flex align-items-center gap-3 flex-wrap mt-4">
                        <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
