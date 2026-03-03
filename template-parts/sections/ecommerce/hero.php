<?php
/**
 * E-Commerce SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="ecommerce-hero position-relative py-5 overflow-hidden">
    <!-- Background Wrapper -->
    <div class="ecommerce-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-transparent p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>" class="text-white opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">E-Commerce SEO</li>
                    </ol>
                </nav>

                <h1 class="display-3 fw-bold mb-4 text-white">E-Commerce SEO Services That Drive Traffic and Sales</h1>
                
                <div class="ecommerce-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4 text-white">
                        Running an online store takes more than great products, you need visibility. At SEO Specialist USA, we offer powerful e-commerce SEO services that help your store rank higher, attract qualified traffic, and turn browsers into buyers.
                    </p>
                    <p class="fs-6 opacity-90 text-white">
                        Our team focuses on what matters most, revenue. From optimizing your product pages to improving your site structure and speed, we ensure your online store becomes a sales engine that runs 24/7.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'ecommerce-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                    <?php 
                    // Reusing the hero form component if possible, or custom one
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'ecommerce-form-clean'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>
