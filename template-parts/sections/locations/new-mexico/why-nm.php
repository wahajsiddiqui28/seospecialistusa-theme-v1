<?php
/**
 * New Mexico SEO — Why New Mexico Businesses Need SEO Section
 *
 * @package seospecialistusa
 */
?>

<section class="nm-why py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why New Mexico Businesses Need SEO</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">

                <p class="fs-6 text-muted mb-4 pe-lg-4">
                    New Mexico’s economy blends traditional industries with emerging tech and tourism sectors. Albuquerque serves as the state’s commercial hub with over 560,000 residents. Santa Fe attracts millions of visitors annually. Las Cruces and Rio Rancho continue growing their business communities.
                </p>

                <p class="fs-6 text-muted mb-5 pe-lg-4">
                    Local companies face distinct search challenges. Home service providers in Albuquerque compete for map rankings against dozens of competitors. Tourism businesses need visibility during peak seasons. Professional services must stand out in smaller but competitive markets.
                </p>
                <p class="fs-6 text-muted mb-5 pe-lg-4">
                    Search behavior varies by location and industry. Customers in urban areas search differently than those in rural communities. Your SEO strategy must account for these patterns, not follow a one-size-fits-all approach.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'new-mexico-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="nm-why-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/new-mexico/Mexico-Businesses-1.avif' ); ?>" alt="Why New Mexico Businesses Need SEO" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
