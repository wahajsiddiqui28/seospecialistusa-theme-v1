<?php
/**
 * Utah SEO — Industries We Serve in Utah Section
 *
 * @package seospecialistusa
 */
?>

<section class="ut-industries py-5" style="background-color: #fdf2f2;">
    <div class="container-custom py-lg-5">

        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-brand-blue mb-0">Industries We Serve in Utah</h2>
        </div>

        <div class="row g-0 align-items-start justify-content-center">

            <!-- Left Column: 3 Industries -->
            <div class="col-lg-3 pe-lg-4">

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-building text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Technology &amp; SaaS</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Help tech businesses rank for solution-focused keywords that reach decision-makers researching options.</p>
                </div>

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-home text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Home Services</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Dominate Google Maps and local pack results for HVAC, plumbing, electrical, and contractor services.</p>
                </div>

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-home text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Outdoor &amp; Recreation</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Capture seasonal traffic spikes and year-round interest for Utah's outdoor industry.</p>
                </div>

            </div>

            <!-- Center: Image + E-commerce below -->
            <div class="col-lg-4 px-lg-3 text-center">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/utah/Industries-Utah.jpg.webp' ); ?>" alt="Industries We Serve in Utah" class="img-fluid rounded-3 shadow w-100 mb-4">

                <div class="ut-ind-item mt-3 text-start">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-home text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">E-commerce</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Balance broad market reach with regional advantages for online retailers.</p>
                </div>
            </div>

            <!-- Right Column: 3 Industries -->
            <div class="col-lg-3 ps-lg-4">

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-heartbeat text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Healthcare &amp; Medical</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Optimize for neighborhood-level visibility so patients find your practice when searching for care.</p>
                </div>

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-tools text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Real Estate</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Target both broad market terms and specific neighborhood searches to generate consistent leads.</p>
                </div>

                <div class="ut-ind-item mb-5">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <i class="fas fa-tools text-brand-blue fs-4"></i>
                        <h5 class="fw-bold text-brand-red mb-0">Legal Services</h5>
                    </div>
                    <p class="fs-6 text-muted mb-0">Rank for practice-area keywords and establish authority through expert content.</p>
                </div>

            </div>

        </div>

        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap mt-3">
            <?php 
            get_template_part( 'template-parts/components/cta-buttons', null, array(
                'wrapper_class' => 'utah-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                'phone_class' => 'btn-dark-blue',
            )); 
            ?>
        </div>

    </div>
</section>
