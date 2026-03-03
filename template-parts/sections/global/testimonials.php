<?php
/**
 * Testimonials Section - Slider Version
 * 
 * @package seospecialistusa
 */
?>

<section class="section-testimonials section-padding bg-white overflow-hidden">
    <div class="container-fluid">
        <div class="row align-items-center g-5">
            <!-- Left Info -->
            <div class="col-lg-5">
                <div class="testimonial-info">
                    <span class="badge bg-brand-red mb-3 px-3 py-2"><?php esc_html_e('Testimonials', 'seospecialistusa'); ?></span>
                    <h2 class="display-5 fw-bold text-brand-black mb-4"><?php esc_html_e('Hear From Our Clients', 'seospecialistusa'); ?></h2>
                    <p class="mb-4 text-muted fs-5">
                        <?php esc_html_e('Businesses across the USA trust SEO Specialist USA to improve their online presence. Here’s what some of our clients have to say:', 'seospecialistusa'); ?>
                    </p>
                    
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'testimonial-actions d-flex align-items-center gap-2 flex-wrap',
                        'button_text' => 'Get Free Audit',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Slider -->
            <div class="col-lg-7">
                <div class="testimonials-slider-wrapper position-relative">
                    <!-- Swiper -->
                    <div class="swiper testimonials-swiper">
                        <div class="swiper-wrapper">
                            
                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                        <div class="client-meta d-flex align-items-center gap-3">
                                            <div class="client-img-wrap">
                                                <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/testimonials/Emily-Johnson-scaled.jpg.webp" alt="Emily Johnson">
                                            </div>
                                            <div>
                                                <h4 class="h5 mb-1 fw-bold text-brand-blue">Emily Johnson</h4>
                                                <span class="text-muted small"><i class="fas fa-map-marker-alt me-1 text-brand-red"></i> New York</span>
                                            </div>
                                        </div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="quote-icon-wrap mb-3">
                                        <i class="fas fa-quote-left text-brand-red opacity-25 fs-3"></i>
                                    </div>
                                    <p class="testimonial-text mb-0">
                                        "SEO Specialist USA has been a reliable partner for our business. Their team explains everything in simple terms, and I can see a steady rise in website traffic and new leads."
                                    </p>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="client-meta d-flex align-items-center gap-3">
                                        <div class="client-img-wrap">
                                            <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/testimonials/Michael-Carter-scaled.jpg.webp" alt="Michael Carter">
                                        </div>
                                        <div>
                                            <h4 class="h5 mb-1 fw-bold text-brand-blue">Michael Carter</h4>
                                            <span class="text-muted small"><i class="fas fa-map-marker-alt me-1 text-brand-red"></i> Los Angeles</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="quote-icon-wrap mb-3">
                                        <i class="fas fa-quote-left text-brand-red opacity-25 fs-3"></i>
                                    </div>
                                    <p class="testimonial-text mb-0">
                                        "Within a few months, our search rankings improved, and we started connecting with more local customers. Their approach is professional, transparent, and results-driven."
                                    </p>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="client-meta d-flex align-items-center gap-3">
                                        <div class="client-img-wrap">
                                            <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/testimonials/Samantha-Lee-scaled.jpg.webp" alt="Samantha Lee">
                                        </div>
                                        <div>
                                            <h4 class="h5 mb-1 fw-bold text-brand-blue">Samantha Lee</h4>
                                            <span class="text-muted small"><i class="fas fa-map-marker-alt me-1 text-brand-red"></i> Chicago</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="quote-icon-wrap mb-3">
                                        <i class="fas fa-quote-left text-brand-red opacity-25 fs-3"></i>
                                    </div>
                                    <p class="testimonial-text mb-0">
                                        "I’ve worked with other SEO companies before, but none matched the clarity and consistency of SEO Specialist USA. Their reports are easy to understand, and the results speak for themselves."
                                    </p>
                                </div>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="client-meta d-flex align-items-center gap-3">
                                        <div class="client-img-wrap">
                                            <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/testimonials/David-Martinez-scaled.jpg.webp" alt="David Martinez">
                                        </div>
                                        <div>
                                            <h4 class="h5 mb-1 fw-bold text-brand-blue">David Martinez</h4>
                                            <span class="text-muted small"><i class="fas fa-map-marker-alt me-1 text-brand-red"></i> Houston</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="quote-icon-wrap mb-3">
                                        <i class="fas fa-quote-left text-brand-red opacity-25 fs-3"></i>
                                    </div>
                                    <p class="testimonial-text mb-0">
                                        "From the start, they focused on our business goals, not just traffic numbers. We’re seeing more conversions and long-term growth thanks to their SEO strategy."
                                    </p>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Pagination -->
                        <div class="swiper-pagination mt-5"></div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next swiper-btn-custom"></div>
                    <div class="swiper-button-prev swiper-btn-custom"></div>
                </div>
            </div>
        </div>
    </div>
</section>
