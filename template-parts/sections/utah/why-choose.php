<?php
/**
 * Utah SEO — Why Choose SEO Specialist USA in Utah Section
 *
 * @package seospecialistusa
 */
?>

<section class="ut-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Heading + 4 feature boxes + CTA -->
            <div class="col-lg-6 px-lg-5">
                <h2 class="display-5 fw-bold text-brand-red mb-5">Why Choose SEO Specialist USA in Utah</h2>

                <!-- Feature 1 -->
                <div class="ut-feature-box mb-4 p-4 rounded-3" style="border: 1px solid #f0d0d0;">
                    <h5 class="fw-bold mb-2" style="color: #bf0a30;">Remote Expertise, Local Focus</h5>
                    <p class="fs-6 text-muted fst-italic mb-0">You get experienced SEO specialists without expensive office overhead. We focus entirely on results, not appearances.</p>
                </div>

                <!-- Feature 2 -->
                <div class="ut-feature-box mb-4 p-4 rounded-3" style="border: 1px solid #f0d0d0;">
                    <h5 class="fw-bold mb-2" style="color: #bf0a30;">Full Transparency</h5>
                    <p class="fs-6 text-muted fst-italic mb-0">Regular reporting, clear communication, and honest timelines. We track meaningful metrics like qualified traffic and conversions.</p>
                </div>

                <!-- Feature 3 -->
                <div class="ut-feature-box mb-4 p-4 rounded-3" style="border: 1px solid #f0d0d0;">
                    <h5 class="fw-bold mb-2" style="color: #bf0a30;">Proven Methods</h5>
                    <p class="fs-6 text-muted fst-italic mb-0">We build sustainable visibility through strategies that work. No overnight ranking promises. No guaranteed positions. Just consistent improvement based on what the data shows.</p>
                </div>

                <!-- Feature 4 -->
                <div class="ut-feature-box mb-5 p-4 rounded-3" style="border: 1px solid #f0d0d0;">
                    <h5 class="fw-bold mb-2" style="color: #bf0a30;">Results-Driven Approach</h5>
                    <p class="fs-6 text-muted fst-italic mb-0">We adjust strategies based on performance. If something isn't working, we change it. You see exactly how SEO connects to business outcomes.</p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'utah-why-choose-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="ut-why-choose-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/utah/Why-ChooseBusinesses.avif' ); ?>" alt="Why Choose SEO Specialist USA Utah" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
