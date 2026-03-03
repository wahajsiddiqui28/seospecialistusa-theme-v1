<?php
/**
 * Technical SEO Footer CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-footer-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-4 fw-bold mb-4 text-white">Ready to Build a Stronger Website?</h2>
                
                <p class="fs-6 opacity-90 mb-5 pe-lg-5 text-white">
                    Your website deserves a clean, fast, and technically sound foundation. Let SEO Specialist USA, a trusted technical SEO services company in the U.S., help you unlock the full potential of your site.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-5">
                <?php 
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class' => 'technical-final-form'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
