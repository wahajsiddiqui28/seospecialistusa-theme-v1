<?php
/**
 * Lawyer SEO Why Matters Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-why-matters py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why SEO Matters for Law Firms</h2>
                
                <div class="matters-content text-muted pe-lg-5">
                    <p class="fs-6 mb-4">
                        Legal marketing has changed. Traditional advertising no longer guarantees consistent clients, but ranking high on Google does. With the right lawyer SEO service, your firm can appear where people are searching, whether they're looking for a personal injury attorney, family lawyer, or criminal defense firm.
                    </p>
                    <p class="fs-6 mb-5">
                        We understand how competitive the legal market is, which is why our lawyer SEO agency focuses on strategies that bring measurable results and long-term growth.
                    </p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'lawyer-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic Slider -->
            <div class="col-lg-6 m-0">
                <div id="lawyerMattersSlider" class="carousel slide carousel-fade shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/lawyer/image-1536x1024.jpg.webp' ); ?>" alt="Why Lawyer SEO Matters 1" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/lawyer/new-image.avif' ); ?>" alt="Why Lawyer SEO Matters 2" class="img-fluid w-100 object-fit-cover" style="height: 400px;">
                        </div>
                    </div>

                    <!-- Custom Indicators -->
                    <div class="carousel-indicators mb-0 pb-3">
                        <button type="button" data-bs-target="#lawyerMattersSlider" data-bs-slide-to="0" class="active rounded-circle border-0" style="width: 12px; height: 12px; opacity: 1;"></button>
                        <button type="button" data-bs-target="#lawyerMattersSlider" data-bs-slide-to="1" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                    </div>

                    <!-- Navigation Arrows -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#lawyerMattersSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#lawyerMattersSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark bg-opacity-25 rounded-circle p-3" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
