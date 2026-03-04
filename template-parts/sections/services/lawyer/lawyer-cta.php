<?php
/**
 * Lawyer SEO Final CTA Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-final-cta py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Left Side: Persuasive Content -->
            <div class="col-lg-7 text-white">
                <h2 class="display-4 fw-bold mb-4 text-white">Partner with the Best Lawyer SEO Company</h2>
                
                <div class="cta-desc pe-lg-5 mb-5">
                    <p class="fs-6 opacity-90 mb-4">
                        Your potential clients are searching for legal services online right now. The question is, will they find your firm or your competitor's?
                    </p>
                    <p class="fs-6 opacity-90 mb-4">
                        At SEO Specialist USA, we help law firms build credibility, authority, and visibility where it matters most. Our proven strategies and personalized approach make us one of the best lawyer SEO companies trusted by firms nationwide.
                    </p>
                    
                    <h5 class="fw-bold text-white mb-4">Ready to bring more clients to your law firm?</h5>
                    
                    <p class="fs-6 opacity-90">
                        Contact SEO Specialist USA today to schedule your free SEO consultation and discover how we can help your firm grow.
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

            <!-- Right Side: Contact Form Card -->
            <div class="col-lg-5">
                
                    <?php 
                    get_template_part( 'template-parts/components/form', 'hero', array(
                        'button_text' => 'Send',
                        'class' => 'lawyer-footer-form'
                    )); 
                    ?>
            </div>
        </div>
    </div>
</section>
