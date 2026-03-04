<?php
/**
 * Montana SEO — Industries We Support Section
 *
 * @package seospecialistusa
 */
?>

<section class="mt-industries py-5" style="background-color: #bf0a30;">
    <div class="container-custom py-lg-5">
        <div class="row align-items-center g-5">

            <!-- Left Side: Heading + Button -->
            <div class="col-lg-5">
                <h2 class="display-5 fw-bold text-white mb-4">Industries We Support Across Montana</h2>
                <hr style="border-color: white; opacity: 0.5; max-width: 80px; border-width: 2px; margin: 0 0 25px;">
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'montana-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Industry Checklist -->
            <div class="col-lg-7">
                <div class="row g-3">
                    <h6 class="text-white">Our SEO services cater to:</h6>
                    <div class="col-md-6">
                        <ul class="list-unstyled mt-industry-list">
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">Local shops and retail</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">Professional services</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">Real estate agencies and law firms</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled mt-industry-list">
                           
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">Healthcare providers</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">E-commerce businesses</span>
                            </li>
                            <li class="d-flex align-items-center gap-3 mb-3">
                                <i class="fas fa-check-circle text-white fs-5 flex-shrink-0"></i>
                                <span class="text-white fs-6">Home improvement companies</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
