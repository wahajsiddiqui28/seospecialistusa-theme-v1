<?php
/**
 * Local SEO Why Matters Section
 * 
 * @package seospecialistusa
 */
?>

<section class="local-why-matters py-5 border-brand-red">
    <div class="container-fluid">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0 pt-5">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Local SEO Matters for Your Local Business</h2>
                
                <div class="matters-content text-muted pe-lg-5">
                    <p class="fs-6 mb-4">
                        Local SEO helps your business stand out in competitive markets where people search for services "near me." Whether you own a restaurant, law firm, home service company, or retail store, local SEO connects your business with the audience that matters most, those ready to buy.
                    </p>

                    <h4 class="fw-bold text-dark mb-4 mt-5">Our local SEO marketing services ensure your business appears in:</h4>
                    
                    <ul class="list-unstyled mb-5">
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Google's Local 3-Pack</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Google Maps searches</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Localized organic search results</span>
                        </li>
                    </ul>

                    <p class="fs-6 fw-medium text-dark mb-5">
                        That means more calls, more visits, and more sales.
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

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="local-matters-graphic position-relative">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/local-seo/local-seo-local.avif' ); ?>" alt="Local SEO Map Analysis" class="img-fluid rounded-4 shadow-lg">
                    <!-- Overlay pin icons or building graphics if needed -->
                </div>
            </div>
        </div>
    </div>
</section>
