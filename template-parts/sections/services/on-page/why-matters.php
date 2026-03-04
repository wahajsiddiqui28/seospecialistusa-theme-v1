<?php
/**
 * On-Page SEO Why Matters Section
 * 
 * @package seospecialistusa
 */
?>

<section class="on-page-why-matters py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why On Page SEO Matters</h2>
                
                <div class="on-page-about-text mb-5">
                    <p class="fs-6 lh-base text-dark opacity-90 mb-4">
                        A beautiful website means nothing if it doesn't show up when people search. On Page SEO helps search engines understand your content and ensures your pages rank for the right keywords.
                    </p>
                    <p class="fs-6 lh-base text-dark opacity-90">
                        At SEO Specialist USA, we focus on optimizing your entire website structure, not just adding keywords. This includes technical, content, and design elements that make your site both search-friendly and user-friendly.
                    </p>
                </div>

                <div class="why-matters-list mb-5">
                    <h5 class="text-brand-red fw-bold mb-4">Why it matters:</h5>
                    
                    <div class="why-icon-item d-flex align-items-center gap-3 p-3 mb-3 border rounded-3 bg-white shadow-sm transition-base">
                        <div class="why-icon bg-light p-2 rounded-2">
                            <i class="fas fa-hammer text-brand-blue fs-4"></i>
                        </div>
                        <div class="why-text">
                            <h6 class="fw-bold text-brand-blue mb-1">Improved Rankings</h6>
                            <p class="m-0 small text-muted">Each page is optimized to target specific keywords your audience is already searching.</p>
                        </div>
                    </div>

                    <div class="why-icon-item d-flex align-items-center gap-3 p-3 mb-3 border rounded-3 bg-white shadow-sm transition-base">
                        <div class="why-icon bg-light p-2 rounded-2">
                            <i class="fas fa-user-check text-brand-blue fs-4"></i>
                        </div>
                        <div class="why-text">
                            <h6 class="fw-bold text-brand-blue mb-1">Better User Experience</h6>
                            <p class="m-0 small text-muted">A clean, fast, and well-structured site keeps visitors engaged longer.</p>
                        </div>
                    </div>

                    <div class="why-icon-item d-flex align-items-center gap-3 p-3 border rounded-3 bg-white shadow-sm transition-base">
                        <div class="why-icon bg-light p-2 rounded-2">
                            <i class="fas fa-users-cog text-brand-blue fs-4"></i>
                        </div>
                        <div class="why-text">
                            <h6 class="fw-bold text-brand-blue mb-1">Higher Conversions</h6>
                            <p class="m-0 small text-muted">Clear calls-to-action and optimized content turn readers into leads and customers.</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Mindmap Illustration -->
            <div class="col-lg-6 m-0">
                <div class="seo-mindmap-box position-relative p-2 p-lg-4">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/on-page/WhyOnPageSEOMatters.jpg.webp' ); ?>" alt="SEO On-Page Mindmap" class="img-fluid w-100 rounded-3">
                </div>
            </div>
        </div>
    </div>
</section>
