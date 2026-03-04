<?php
/**
 * Local SEO More Than Rankings Section
 * 
 * @package seospecialistusa
 */
?>

<section class="local-more-than-rankings py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-4 fw-bold text-brand-blue mb-4">Why Local SEO Is More Than Just Rankings</h2>
                
                <div class="rankings-content mb-5">
                    <p class="fw-bold text-brand-red mb-4 fs-6">
                        Local SEO isn’t just about showing up, it’s about standing out.
                    </p>
                    <p class="text-muted mb-4 opacity-90">
                        Our goal is to make sure your business becomes the <em>obvious choice</em> when someone searches locally for what you offer.
                    </p>
                    <p class="text-muted mb-4 opacity-90">
                        We help you build credibility through reviews, improve conversion-focused design on your site, and maintain a consistent brand presence across every local touchpoint.
                    </p>
                    <p class="text-muted mb-0 opacity-90">
                        That’s how you turn online visibility into real-world growth.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'local-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic -->
            <div class="col-lg-6 m-0">
                <div class="rankings-graphic rounded-4 overflow-hidden shadow-lg position-relative">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/local-seo/why-local-seo.jpg.webp' ); ?>" alt="More Than Just Rankings Graphic" class="img-fluid w-100">
                    <!-- Overlays can be added via CSS if needed to match the magnifying glass icons -->
                </div>
            </div>
        </div>
    </div>
</section>
