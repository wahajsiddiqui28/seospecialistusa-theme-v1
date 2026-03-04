<?php
/**
 * SEO Audit — What Is an SEO Audit & Why You Need It Sections
 *
 * @package seospecialistusa
 */
?>

<!-- What Is an SEO Audit? -->
<section class="sa-what py-5" style="background-color: #fdf2f2;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left: Text -->
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4" style="color: #bf0a30;">What Is an SEO Audit?</h2>
                <p class="fs-6 text-dark mb-5">
                    An SEO audit is a complete website checkup. It identifies technical errors, content issues, and missed opportunities that affect search rankings. Without it, you're only guessing what's wrong.
                </p>
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'd-flex align-items-center gap-3 flex-wrap',
                    'button_text'   => 'Get SEO Audit',
                    'use_modal'     => true
                ) ); 
                ?>
            </div>

            <!-- Right: Image -->
            <div class="col-lg-6">
                <div class="sa-img-frame rounded-4 overflow-hidden" style="border: 3px solid #bf0a30;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/seo-audit/what-is-audit-seo-scaled-1-1536x1020.jpg.webp' ); ?>" alt="What Is an SEO Audit" class="img-fluid w-100" style="height: 320px; object-fit: cover;">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Your Website Needs an SEO Audit -->
<section class="sa-why-need py-5 bg-white">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left: Image -->
            <div class="col-lg-6">
                <div class="sa-img-frame rounded-4 overflow-hidden" style="border: 3px solid #bf0a30;">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/seo-audit/seo-audit-1-scaled-1-1536x1024.jpg.webp' ); ?>" alt="Why Your Website Needs an SEO Audit" class="img-fluid w-100" style="height: 340px; object-fit: cover;">
                </div>
            </div>

            <!-- Right: Text -->
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4" style="color: #bf0a30;">Why Your Website Needs an SEO Audit</h2>
                <p class="fs-6 text-dark mb-0">
                    A website can look perfect on the surface but still fail in search engines. Our website SEO audit uncovers hidden errors, improves keyword targeting, and enhances your site's overall performance.
                </p>
            </div>

        </div>
    </div>
</section>
