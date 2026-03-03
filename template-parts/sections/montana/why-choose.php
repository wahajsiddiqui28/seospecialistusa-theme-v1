<?php
/**
 * Montana SEO — Why Choose Section
 *
 * @package seospecialistusa
 */
?>

<section class="mt-why-choose py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-6 fw-bold text-brand-blue mb-4">Why SEO Specialist USA is the Best Choice for Montana Companies</h2>
                <hr style="border-color: var(--brand-red); opacity: 1; max-width: 80px; border-width: 3px; margin: 0 0 25px;">
                    <h6>Our team brings over ten years of experience in SEO with a focus on local businesses. We provide:</h6>

                    <ul class="mt-3" style="list-style: none; padding: 0;">
                        <li><i class="fa-solid fa-check pe-2"></i> Dedicated SEO managers for personalized support</li>
                        <li><i class="fa-solid fa-check pe-2"></i> Transparent monthly reports showing real results</li>
                        <li><i class="fa-solid fa-check pe-2"></i> Affordable services with no long-term contracts</li>
                        <li><i class="fa-solid fa-check pe-2"></i> 24–48 hour client support for quick responses</li>
                    </ul>

                <p class="fs-6 text-muted mb-4 pe-lg-4">
                    These features make us a reliable partner for Montana businesses seeking measurable online growth.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'montana-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="mt-why-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/montana/Montana-best-Choice-1536x1422.jpg.webp' ); ?>" alt="Why SEO Specialist USA is the Best Choice for Montana Companies" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
