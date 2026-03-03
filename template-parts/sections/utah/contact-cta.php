<?php
/**
 * Utah SEO — Get Started with SEO Services in Utah Section
 *
 * @package seospecialistusa
 */
?>

<section id="contact" class="ut-contact-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left: Text Content -->
            <div class="col-lg-6 text-white">
                <h2 class="display-5 fw-bold text-white mb-4">Get Started with SEO Services in Utah</h2>

                <p class="fs-6 text-white opacity-95 mb-4">
                    Ready to increase your visibility in Utah search results? We serve businesses in Salt Lake City, Provo, Ogden, St. George, and across the Beehive State with SEO strategies that drive measurable growth.
                </p>

                <p class="fs-6 text-white opacity-95 mb-4">
                    Schedule a consultation to discuss your goals, review your current performance, and receive a clear roadmap for improving your rankings. No pressure, no sales pitch—just honest analysis and actionable recommendations.
                </p>

                <p class="fs-6 text-white fw-bold mb-5">
                    Contact SEO Specialist USA today and start ranking where your customers are searching.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'utah-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right: Contact Form Component -->
            <div class="col-lg-6">
                <?php
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'ut-contact-form'
                    ));
                ?>
            </div>

        </div>
    </div>
</section>
