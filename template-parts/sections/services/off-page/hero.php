<?php
/**
 * Off-Page SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="off-page-hero position-relative py-5 overflow-hidden">
    <!-- Background Wrapper with dark overlay -->
    <div class="off-page-hero-bg position-absolute top-0 start-0 w-100 h-100" style="background-size: cover; background-position: center;"></div>
    
    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-dark bg-opacity-50 px-3 py-2 rounded-pill d-inline-flex mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white opacity-75" aria-current="page">Off Page</li>
                    </ol>
                </nav>

                <h1 class="display-3 fw-bold mb-4 text-white">Off Page SEO Services</h1>
                
                <div class="off-page-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Your website deserves more than just great content; it needs authority, visibility, and trust. Our Off Page SEO Services help you build a strong online reputation through strategic link building, brand promotion, and authority growth across the web.
                    </p>
                    <p class="fs-6 opacity-90">
                        We don't rely on spammy backlinks or outdated tricks. We focus on quality, relevance, and sustainable results.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'off-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                        'class' => 'off-page-hero-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>

<style>
.off-page-hero {
    min-height: 80vh;
    display: flex;
    align-items: center;
}
.off-page-form-box {
    border-bottom: 8px solid var(--brand-red) !important;
}
</style>
