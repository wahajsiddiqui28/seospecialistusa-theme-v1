<?php
/**
 * Utah SEO — Hero Section
 *
 * @package seospecialistusa
 */
?>

<section class="ut-hero position-relative py-3 overflow-hidden">
    <div class="ut-hero-bg position-absolute top-0 start-0 w-100 h-100"></div>

    <div class="container-custom position-relative py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h1 class="display-4 fw-bold text-white mb-4">SEO Services in Utah</h1>

                <p class="fs-6 text-white opacity-90 mb-5 pe-lg-4">
                    Our SEO services in Utah help businesses improve their search rankings and attract more customers. If you're competing in Salt Lake City, Provo, or St. George, strong SEO services in Utah make the difference between being found online and losing customers to competitors. SEO Specialist USA works with Utah businesses to increase visibility, drive qualified traffic, and generate measurable results.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'utah-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-5">
                <?php
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'ut-hero-contact-form'
                    ));
                ?>
            </div>

        </div>
    </div>
</section>
