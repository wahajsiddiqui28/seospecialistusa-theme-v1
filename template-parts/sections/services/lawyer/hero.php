<?php
/**
 * Lawyer SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-hero position-relative py-5 overflow-hidden">
    <!-- Background Wrapper -->
    <div class="lawyer-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>
    
    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-transparent p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>" class="text-white opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Lawyer SEO</li>
                    </ol>
                </nav>

                <h1 class="display-4 fw-bold mb-4 text-white">Lawyer SEO Services That Bring You More Clients</h1>
                
                <div class="lawyer-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4 text-white">
                        When people need legal help, they turn to Google first. If your law firm isn’t showing up at the top of search results, you’re losing potential clients to competitors. SEO Specialist USA helps attorneys and law firms gain visibility, trust, and consistent leads through powerful lawyer SEO services built specifically for the legal industry.
                    </p>
                    <p class="fs-6 opacity-90 text-white">
                        Our mission is simple, to connect you with the clients actively searching for your legal expertise.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap pt-2">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'lawyer-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                        'class' => 'lawyer-hero-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>
