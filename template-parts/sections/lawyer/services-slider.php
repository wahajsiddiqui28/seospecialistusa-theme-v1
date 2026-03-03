<?php
/**
 * Lawyer SEO Services Slider Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-services-slider py-5 bg-white">
    <div class="container-custom py-lg-5">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold text-brand-blue mb-3">What’s Included in Our Lawyer SEO Services</h2>
            <p class="fs-6 text-muted">We combine proven SEO techniques with legal industry insight to deliver campaigns that attract high-value leads, not just traffic.</p>
        </div>

        <div id="lawyerServicesSlider" class="carousel slide" data-bs-ride="carousel">
            <!-- Custom Indicators -->
            <div class="carousel-indicators mb-0 pb-4">
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="0" class="active rounded-circle border-0" style="width: 12px; height: 12px; opacity: 1;" aria-current="true"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="1" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="2" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="3" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="4" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="5" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
                <button type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide-to="6" class="rounded-circle border-0" style="width: 12px; height: 12px; opacity: 0.5;"></button>
            </div>

            <div class="carousel-inner shadow-lg rounded-4 overflow-hidden" style="background-color: #8343a4; min-height: 420px;">
                <!-- Slide 1 -->
                <div class="carousel-item active p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Comprehensive Website Audit</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            We begin with a detailed analysis of your site to identify technical issues, content gaps, and ranking opportunities specific to your legal practice areas.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Legal Keyword Research</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            Our team finds the most valuable keywords that your ideal clients are using, such as “personal injury lawyer near me” or “best criminal defense attorney.”
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">On-Page SEO Optimization</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            We optimize every element of your website, from meta tags to headlines and internal linking, to improve rankings for your most important legal keywords.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Local SEO for Lawyers</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            Most clients look for attorneys in their city or county. We optimize your Google Business Profile, citations, and location pages to ensure your firm appears in local searches and map results.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Content Marketing for Legal Practices</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            We create high-quality, informative content that establishes your authority, educates your audience, and builds trust, blog posts, practice area pages, and FAQs tailored for your law firm.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Link Building & Authority Growth</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            Our team builds ethical, high-quality backlinks from reputable legal directories, local sites, and media publications to strengthen your online authority.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Slide 7 -->
                <div class="carousel-item p-5 text-center text-white" data-bs-interval="5000">
                    <div class="py-4">
                        <h2 class="display-5 fw-bold mb-4 text-white">Tracking, Analytics & Reporting</h2>
                        <p class="fs-6 opacity-90 mb-5 mx-auto" style="max-width: 750px;">
                            You’ll receive clear monthly reports showing how your keywords, traffic, and leads are improving, so you always know what’s working.
                        </p>
                        <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                            <?php 
                            get_template_part( 'template-parts/components/cta-buttons', null, array(
                                'wrapper_class' => 'lawyer-slider-ctas d-flex align-items-center gap-3 flex-wrap',
                                'phone_class' => 'btn-dark-blue',
                                'button_class' => 'btn-white'
                            )); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon p-3" aria-hidden="true" style="filter: brightness(0) invert(1);"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lawyerServicesSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon p-3" aria-hidden="true" style="filter: brightness(0) invert(1);"></span>
            </button>
        </div>
    </div>
</section>
