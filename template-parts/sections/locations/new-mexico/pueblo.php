<?php
/**
 * New Mexico SEO — Pueblo SEO Expectations Section
 *
 * @package seospecialistusa
 */
?>

<section class="nm-pueblo py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Realistic SEO Expectations</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">

                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Initial ranking improvements typically appear within 90-120 days. Substantial growth usually occurs by month six. Results depend on competition level, starting position, and market dynamics.
                </p>

                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Local businesses often see increased Google Maps visibility, leading to more direction requests and phone calls. Service businesses experience growth in organic inquiry volume. E-commerce sites benefit from improved product and category rankings.
                </p>

                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Sustainable growth combines optimization with strong service delivery. Rankings bring traffic, but your business must convert that traffic into customers.
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
                <div class="nm-pueblo-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/new-mexico/Realistic-SEO-Expectations-1536x1434.jpg.webp' ); ?>" alt="Pueblo SEO Expectations New Mexico" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
