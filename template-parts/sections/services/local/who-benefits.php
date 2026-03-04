<?php
/**
 * Local SEO Who Benefits Section
 * 
 * @package seospecialistusa
 */
?>

<section class="local-benefits py-5 position-relative overflow-hidden" style="background-color: #fdf2f2;">
    <!-- Side Graphics (Absolute positioned images) -->
    <div class="side-graphic-left position-absolute start-0 top-50 translate-middle-y d-none d-xl-block" style="width: 300px; opacity: 0.8;">
        <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/local-seo/image-1-removebg-preview.png.webp' ); ?>" alt="magnifying glass left" class="img-fluid" style="transform: scaleX(-1);">
    </div>
    <div class="side-graphic-right position-absolute end-0 top-50 translate-middle-y d-none d-xl-block" style="width: 300px; opacity: 0.8;">
        <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/local-seo/image-3-removebg-preview.png.webp' ); ?>" alt="magnifying glass right" class="img-fluid">
    </div>

    <div class="container-custom py-lg-5 position-relative z-1">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-brand-blue mb-3">Who Can Benefit from Our Local SEO Marketing Services</h2>
            <p class="fs-6 text-muted">Our top local SEO company works with a wide range of industries that rely on local customers, including:</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="benefits-grid">
                    <!-- Benefit 1 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Home service providers (movers, plumbers, electricians, HVAC, cleaners)</span>
                    </div>

                    <!-- Benefit 2 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Medical and dental clinics</span>
                    </div>

                    <!-- Benefit 3 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Real estate agencies</span>
                    </div>

                    <!-- Benefit 4 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Restaurants, cafés, and local retail shops</span>
                    </div>

                    <!-- Benefit 5 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Law firms and consulting services</span>
                    </div>

                    <!-- Benefit 6 -->
                    <div class="benefit-item bg-white p-3 rounded-pill shadow-sm mb-3 d-flex align-items-center gap-3 border border-light">
                        <div class="benefit-check text-brand-red ms-2">
                            <i class="far fa-check-circle fs-4"></i>
                        </div>
                        <span class="fs-6 fw-medium text-dark">Automotive repair and dealerships</span>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <p class="fs-6 text-muted italic">If your customers come from your city, county, or region, local SEO can transform your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.benefit-item {
    transition: var(--transition-base);
    justify-content: center;
}
.benefit-item:hover {
    transform: scale(1.02);
    box-shadow: var(--shadow-md) !important;
    border-color: var(--brand-red) !important;
}
</style>
