<?php
/**
 * SEO Audit — Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="sa-hero py-5 sa-hero-bg">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left: Text -->
            <div class="col-lg-6 text-white">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill" style="background-color: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25);">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="text-white text-decoration-none fs-6">Home</a>
                        <span class="text-white opacity-75">—</span>
                        <span class="fs-6 text-white fw-semibold">SEO Audit</span>
                    </div>
                </nav>

                <h1 class="hero-title fw-bold text-white mb-4 lh-sm">Get SEO Audit Services in USA</h1>

                <p class="fs-5 text-white opacity-90 mb-5">
                    Find out what's stopping your website from ranking. With a detailed SEO audit report from SEO Specialist USA, you'll get the fixes and opportunities that drive results.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'seo-audit-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right: Form Card -->
            <div class="col-lg-5 offset-lg-1">
                
                    <?php
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class'       => 'sa-hero-form'
                    ) );
                    ?>
                </div>
        </div>
    </div>
</section>
