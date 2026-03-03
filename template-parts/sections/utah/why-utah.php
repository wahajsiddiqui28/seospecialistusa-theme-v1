<?php
/**
 * Utah SEO — Why Utah Businesses Need SEO Section
 *
 * @package seospecialistusa
 */
?>

<section class="ut-why py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-0">

            <!-- Left Side: Heading + 2 bordered text blocks + 2 buttons -->
            <div class="col-lg-6 px-lg-5 pe-lg-5">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Utah Businesses Need SEO</h2>

                <div class="ut-why-block mb-4 p-4" style="border-left: 4px solid #bf0a30; background-color: #fff8f8; border-radius: 0 8px 8px 0;">
                    <p class="fs-6 text-muted mb-0">
                        Utah's economy spans technology, healthcare, manufacturing, and tourism. Companies in the Wasatch Front face intense digital competition. Businesses in smaller cities like Logan and Cedar City need to reach both local customers and broader markets.
                    </p>
                </div>

                <div class="ut-why-block mb-5 p-4" style="border-left: 4px solid #bf0a30; background-color: #fff8f8; border-radius: 0 8px 8px 0;">
                    <p class="fs-6 text-muted mb-0">
                        Search behavior varies by industry and location. Tech companies need visibility for decision-makers researching solutions. Home service providers compete for Google Maps placement. Outdoor recreation businesses target seasonal traffic. Healthcare providers focus on local patients.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'utah-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Text block + horizontal line + image -->
            <div class="col-lg-6 px-lg-5 ps-lg-5">

                <p class="fs-6 text-muted mb-4">
                    Effective SEO accounts for these market differences. Your strategy must match how your specific customers search and the competitive landscape you face.
                </p>

                <hr style="border-color: #bf0a30; opacity: 1; border-width: 2px; margin-bottom: 24px;">

                <div class="ut-why-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/utah/Utah-Businesses-1536x1024.jpg.webp' ); ?>" alt="Utah Business SEO" class="img-fluid rounded-4 shadow w-100">
                </div>

            </div>

        </div>
    </div>
</section>
