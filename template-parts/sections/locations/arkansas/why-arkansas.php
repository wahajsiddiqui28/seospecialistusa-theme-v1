<?php
/**
 * Arkansas SEO — Why Arkansas Businesses Need SEO Services Section
 *
 * @package seospecialistusa
 */
?>

<section class="ar-why py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row g-0">

            <!-- Left Side: Content -->
            <div class="col-lg-6 pe-lg-5 ps-lg-5 py-4">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Arkansas Businesses Need SEO Services</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">

                <p class="fs-6 text-muted mb-4">
                    Arkansas has a diverse economy spanning multiple industries. Little Rock and Bentonville host major corporations, Jonesboro has manufacturing operations, and countless local service businesses serve communities statewide. This diversity creates different SEO challenges depending on your location and target audience.
                </p>

                <hr class="my-4" style="border-color: #e5e5e5;">

                <p class="fs-6 text-muted mb-4">
                    In cities like Little Rock, Fayetteville, and Rogers, competition for local search terms is intense. A plumbing company competes with national directories, lead generation sites, and franchises with substantial marketing budgets. Ranking in the local pack requires technical precision and authority building.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'arkansas-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Text blocks + Image -->
            <div class="col-lg-6 ps-lg-5 py-4">

                <p class="fs-6 text-muted mb-4">
                    Smaller markets across Arkansas face different challenges. Search volumes are lower, but so is competition. Businesses that invest in SEO early often dominate local results for years. Service providers in cities like Hot Springs and Jonesboro can capture the majority of organic traffic by implementing proper SEO strategies.
                </p>

                <hr class="my-4" style="border-color: #e5e5e5;">

                <p class="fs-6 text-muted mb-4">
                    Arkansas searchers include location qualifiers in their queries. Someone in Conway searching for a dentist types "dentist near me" or "Conway dentist" rather than generic terms. This behavior makes local SEO valuable for businesses targeting specific geographic areas.
                </p>

                <div class="ar-why-img mt-4">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/arkansas/Arkansas-Businesses.jpg.webp' ); ?>" alt="Arkansas Business SEO" class="img-fluid rounded-4 shadow w-100">
                </div>

            </div>

        </div>
    </div>
</section>
