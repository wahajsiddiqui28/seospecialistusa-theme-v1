<?php
/**
 * Restaurant SEO Why Must Section
 * 
 * @package seospecialistusa
 */
?>

<section class="restaurant-why-must py-5  border-brand-red">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why SEO Is a Must for Restaurants</h2>
                
                <div class="must-content text-muted pe-lg-5">
                    <p class="fs-6 mb-4">
                        When someone searches “best restaurant near me,” you want your name at the top. That’s where our SEO services for restaurants come in. We help your business appear in Google Maps, Local 3-Pack listings, and organic search results, the places people look before choosing where to eat.
                    </p>

                    <h4 class="fw-bold text-dark mb-4 mt-5 fs-6">A strong SEO strategy can help your restaurant:</h4>
                    
                    <ul class="list-unstyled mb-5">
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Increase website traffic and online reservations.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Appear in local searches and “near me” results.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Get more delivery and takeout orders.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3" >
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Build a consistent, trustworthy online presence.</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3" >
                            <i class="fas fa-dot-circle text-brand-red"></i>
                            <span class="fs-6 text-dark opacity-90">Outrank local competitors and national chains.</span>
                        </li>
                    </ul>

                    <p class="fs-6 text-dark mb-5 italic">
                        If your restaurant isn’t visible online, you’re losing diners daily.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'restaurant-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic Slider -->
            <div class="col-lg-6 m-0">
                <div id="restaurantMustSlider" class="carousel slide carousel-fade shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/restaurant-seo/section-2-image-3.jpg.webp' ); ?>" alt="Restaurant SEO Importance 1" class="img-fluid w-100 object-fit-cover" style="height: 500px;">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/restaurant-seo/section-2-image-1.jpg.webp' ); ?>" alt="Restaurant SEO Importance 2" class="img-fluid w-100 object-fit-cover" style="height: 500px;">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/restaurant-seo/section-2-image-2.jpg.webp' ); ?>" alt="Restaurant SEO Importance 3" class="img-fluid w-100 object-fit-cover" style="height: 500px;">
                        </div>
                    </div>

                    <!-- Custom Indicators -->
                    <div class="carousel-indicators mb-0 pb-3">
                        <button type="button" data-bs-target="#restaurantMustSlider" data-bs-slide-to="0" class="active rounded-circle border-0" style="width: 12px; height: 12px; opacity: 1;"></button>
                        <button type="button" data-bs-target="#restaurantMustSlider" data-bs-slide-to="1" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                        <button type="button" data-bs-target="#restaurantMustSlider" data-bs-slide-to="2" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                    </div>

                    <!-- Navigation Arrows -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#restaurantMustSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#restaurantMustSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
