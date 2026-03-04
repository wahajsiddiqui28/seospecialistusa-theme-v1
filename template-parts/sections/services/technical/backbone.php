<?php
/**
 * Technical SEO Backbone Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-backbone py-5 bg-white overflow-hidden">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">The Backbone of Your Online Success</h2>
                
                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Search engines love structure, speed, and precision. Technical SEO ensures your website checks all those boxes. Without it, your digital marketing efforts can fall flat no matter how good your content is.
                </p>

                <h4 class="fw-bold mb-4 text-brand-red">We make your site:</h4>

                <div class="technical-features-list">
                    <!-- Feature 1 -->
                    <div class="tech-feature-item d-flex align-items-start gap-3 mb-4 p-3 border rounded-3 transition-all">
                        <div class="tech-icon text-brand-blue fs-3">
                            <i class="fas fa-wind"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Fast-loading and efficient</h5>
                            <p class="small text-muted mb-0">Faster sites rank higher and convert better.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="tech-feature-item d-flex align-items-start gap-3 mb-4 p-3 border rounded-3 transition-all">
                        <div class="tech-icon text-brand-blue fs-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Easily crawlable</h5>
                            <p class="small text-muted mb-0">We help Google understand your pages clearly and completely.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="tech-feature-item d-flex align-items-start gap-3 mb-4 p-3 border rounded-3 transition-all">
                        <div class="tech-icon text-brand-blue fs-3">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Error-free and stable</h5>
                            <p class="small text-muted mb-0">No broken links, redirect loops, or crawl issues.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="tech-feature-item d-flex align-items-start gap-3 mb-4 p-3 border rounded-3 transition-all">
                        <div class="tech-icon text-brand-blue fs-3">
                            <i class="fas fa-atom"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Technically sound</h5>
                            <p class="small text-muted mb-0">Secure HTTPS, schema markup, XML sitemaps, and optimized code.</p>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="tech-feature-item d-flex align-items-start gap-3 mb-4 p-3 border rounded-3 transition-all">
                        <div class="tech-icon text-brand-blue fs-3">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1">Mobile-first ready</h5>
                            <p class="small text-muted mb-0">Perfect for every screen and device.</p>
                        </div>
                    </div>
                </div>

                <p class="mb-4 fw-medium text-dark mt-4">We turn complex technical data into measurable business outcomes.</p>

                <div class="d-flex align-items-center gap-3 mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Graphic -->
            <div class="col-lg-6 m-0">
                <div class="technical-backbone-graphic text-center">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical-seo/the-backbone-of-your-online-success.webp' ); ?>" alt="Technical SEO backbone of success" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>
