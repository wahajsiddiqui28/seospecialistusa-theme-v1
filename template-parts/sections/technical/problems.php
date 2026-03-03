<?php
/**
 * Technical SEO Problems Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-problems py-5" style="background-color: #fdf2f2;">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Image -->
            <div class="col-lg-5 m-0">
                <div class="problems-graphic position-relative">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical-seo/technical-seo-image-4-scaled.jpg.webp' ); ?>" alt="Real technical SEO problems we solve" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-7 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Real Problems We Solve Every Day</h2>
                <p class="fs-6 text-muted mb-4 pe-lg-5">
                    Technical SEO isn’t just theory, it’s fixing the problems that silently eat your traffic and rankings.
                </p>

                <h5 class="fw-bold mb-4 text-brand-red">We commonly fix:</h5>

                <ul class="problems-list list-unstyled">
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Slow page load times and poor Core Web Vitals scores</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Pages that Google can’t crawl or index</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Duplicate content and canonical tag errors</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Broken internal and external links</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Missing or outdated XML sitemaps</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Mobile usability issues and layout shifts</span>
                    </li>
                    <li class="d-flex align-items-start gap-2 mb-3">
                        <i class="fas fa-check-double text-brand-red mt-1"></i>
                        <span class="fs-6 text-dark opacity-85">Mixed-content or SSL problems</span>
                    </li>
                </ul>

                <p class="mb-5 fs-6 text-muted border-top pt-4 mt-4">
                    Each fix makes your site more visible, trustworthy, and ready to convert visitors into customers.
                </p>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'technical-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
