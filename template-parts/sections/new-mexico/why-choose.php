<?php
/**
 * New Mexico SEO — Why Choose SEO Specialist USA Section
 *
 * @package seospecialistusa
 */
?>

<section class="nm-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Image -->
            <div class="col-lg-5 m-0">
                <div class="nm-why-choose-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/new-mexico/Mexico-choose-1536x1024.jpg.webp' ); ?>" alt="Why Choose SEO Specialist USA in New Mexico" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Choose SEO Specialist USA in New Mexico</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">

                <div class="nm-why-choose-list">
                    <div class="d-flex gap-3 mb-4">
                        <i class="fas fa-check-double text-brand-red mt-1 flex-shrink-0"></i>
                        <div>
                            <!-- <h5 class="fw-bold text-brand-blue mb-1">Deep Local Market Knowledge</h5> -->
                            <p class="fs-6 text-muted mb-0">We work remotely with businesses across New Mexico, providing enterprise-level expertise without agency overhead costs. Our experience includes markets similar to yours: mid-sized cities, tourism economies, and competitive local sectors.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-4">
                        <i class="fas fa-check-double text-brand-red mt-1 flex-shrink-0"></i>
                        <div>
                            <!-- <h5 class="fw-bold text-brand-blue mb-1">Strategies Built for Every Business Size</h5> -->
                            <p class="fs-6 text-muted mb-0">You receive detailed monthly reports showing ranking movements, traffic growth, and completed work. We explain strategies in plain language and focus on what matters: ROI, not vanity metrics.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-4">
                        <i class="fas fa-check-double text-brand-red mt-1 flex-shrink-0"></i>
                        <div>
                            <!-- <h5 class="fw-bold text-brand-blue mb-1">Full Transparency &amp; Clear Reporting</h5> -->
                            <p class="fs-6 text-muted mb-0">Our priority is targeting searches with commercial intent. Ranking for irrelevant keywords doesn’t generate revenue. We focus on queries from people ready to hire, buy, or schedule services.</p>
                        </div>
                    </div>
                    <!-- <div class="d-flex gap-3 mb-4">
                        <i class="fas fa-check-double text-brand-red mt-1 flex-shrink-0"></i>
                        <div>
                            <h5 class="fw-bold text-brand-blue mb-1">Proven Results Across New Mexico</h5>
                            <p class="fs-6 text-muted mb-0">We consistently help New Mexico businesses increase leads, improve rankings, and grow revenue through ethical SEO methods.</p>
                        </div>
                    </div> -->
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'new-mexico-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>
