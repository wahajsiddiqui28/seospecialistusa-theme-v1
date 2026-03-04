<?php
/**
 * Dental SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="dental-hero position-relative py-5 overflow-hidden">
    <!-- Background Wrapper with dark overlay -->
    <div class="dental-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-transparent p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>" class="text-white opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Dental SEO</li>
                    </ol>
                </nav>

                <h1 class="display-5 fw-bold mb-4 text-white">Dental SEO Services That <br> Help You Attract More <br> Patients Every Month</h1>
                
                <div class="dental-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4 text-white">
                        Your dental practice deserves more than word-of-mouth growth. In today’s world, patients search online before they ever step into a clinic. With professional dental SEO services from SEO Specialist USA, your practice can dominate local search results, attract consistent new patients, and build lasting online credibility.
                    </p>
                    <p class="fs-6 opacity-90 text-white">
                        We specialize in helping dental professionals grow visibility, increase patient appointments, and stay ahead of local competitors through proven, ethical, and data-driven SEO strategies.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'dental-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                    'class' => 'dental-hero-form'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
