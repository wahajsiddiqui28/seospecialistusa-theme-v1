<?php
/**
 * SEO Audit — Why Choose SEO Specialist USA & Get Started CTA Sections
 *
 * @package seospecialistusa
 */
?>

<!-- Why Choose SEO Specialist USA -->
<section class="sa-why-choose py-5 bg-white">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left: Text -->
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4" style="color: #bf0a30;">Why Choose SEO Specialist USA?</h2>
                <p class="fs-6 text-dark mb-0">
                    We're trusted for results. Our audits go beyond automated scans, we combine advanced tools with human expertise. Businesses across USA and globally choose us because we deliver clarity, direction, and measurable outcomes.
                </p>
            </div>

            <!-- Right: Image -->
            <div class="col-lg-6">
                <div class="sa-img-frame rounded-4 overflow-hidden" style="border: 3px solid #bf0a30;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/seo-audit/4-scaled-1-1536x1112.jpg.webp' ); ?>" alt="Why Choose SEO Specialist USA" class="img-fluid w-100" style="height: 300px; object-fit: cover; background-color: #f4864b;">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Get Started Now CTA -->
<section class="sa-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-3">
        <div class="sa-cta-inner rounded-4 p-5" style="background-color: #0a0a0a; border: 2px dashed rgba(255,255,255,0.25);">
            <div class="row align-items-center g-4">

                <!-- Left: Text -->
                <div class="col-lg-8 text-white">
                    <h2 class="display-6 fw-bold text-white mb-3">Get Started Now</h2>
                    <p class="fs-6 text-white opacity-85 mb-0">
                        Your competitors are improving their SEO every day. Don't stay behind. Request a free SEO audit now and get your personalized SEO audit report within 24–48 hours.
                    </p>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'd-flex align-items-center justify-content-lg-end gap-3 flex-wrap',
                        'button_text'   => 'Request Your Free SEO Audit',
                        'use_modal'     => true
                    ) ); 
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>
