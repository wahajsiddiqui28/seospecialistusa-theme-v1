<?php
/**
 * Delaware SEO Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="delaware-hero position-relative py-5 overflow-hidden">
    <!-- Background with dark overlay -->
    <div class="delaware-hero-bg position-absolute top-0 start-0 w-100 h-100" style="background-size: cover; background-position: center;"></div>

    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-transparent p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>" class="text-white opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url('/locations/') ); ?>" class="text-white opacity-75 text-decoration-none">Locations</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Delaware SEO</li>
                    </ol>
                </nav>

                <h1 class="display-3 fw-bold mb-4 text-white">SEO Services in Delaware</h1>

                <div class="delaware-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Dominate Delaware search results with tailored SEO strategies built to increase visibility, traffic, and revenue.
                    </p>
                    <p class="fs-6 opacity-90 mb-4">
                        Businesses across Wilmington, Dover, Newark, and the rest of Delaware rely on strong search performance. We help you outrank competitors and convert more customers.
                    </p>
                    <p class="fs-6 opacity-90">
                        Get a custom SEO plan designed for your Delaware market and business goals.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'delaware-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                <?php
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class'       => 'delaware-hero-form'
                ));
                ?>
            </div>
        </div>
    </div>
</section>
