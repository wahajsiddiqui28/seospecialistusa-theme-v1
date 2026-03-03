<?php
/**
 * Technical SEO Hero Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-hero position-relative py-5 overflow-hidden">
    <!-- Background Wrapper with dark overlay -->
    <div class="technical-hero-bg position-absolute top-0 start-0 w-100 h-100" style="background-size: cover; background-position: center;"></div>
    
    <div class="container-custom position-relative z-1 py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb bg-transparent p-0 mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>" class="text-white opacity-75 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Technical SEO</li>
                    </ol>
                </nav>

                <h1 class="display-3 fw-bold mb-4 text-white">Technical SEO Services</h1>
                
                <div class="technical-hero-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Your website might look great but if it’s slow, hard to crawl, or poorly structured, search engines won’t see its true potential. At SEO Specialist USA, our technical SEO services fix everything that happens behind the scenes from crawlability to speed and indexing so your website can rank where it deserves to.
                    </p>
                    <p class="fs-6 opacity-90">
                        We help websites across the United States perform faster, stay compliant with Google’s algorithms, and deliver an effortless user experience.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
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
                    'class' => 'technical-hero-form'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
