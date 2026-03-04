<?php
/**
 * Lawyer SEO Practice Areas Section
 * 
 * @package seospecialistusa
 */
?>

<section class="lawyer-practice-areas py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-0">
            <!-- Left Side: Practice Areas List -->
            <div class="col-lg-6 pe-lg-5 py-4">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Law Firms and Practice Areas We Specialize In</h2>
                <p class="fw-bold text-brand-red mb-5 small">Our lawyer SEO agency works with firms across all legal specialties, including:</p>

                <div class="practice-list mb-5">
                    <?php 
                    $areas = [
                        'Personal Injury Attorneys',
                        'Family Law Firms',
                        'Criminal Defense Lawyers',
                        'Immigration Attorneys',
                        'Estate Planning & Probate Lawyers',
                        'Business & Corporate Law Firms',
                        'Employment & Labor Lawyers'
                    ];
                    foreach($areas as $area):
                    ?>
                    <div class="practice-item bg-white p-3 mb-3 border rounded-3 shadow-sm hover-translate-x">
                        <h6 class="fw-bold text-brand-blue mb-0"><?php echo esc_html($area); ?></h6>
                    </div>
                    <?php endforeach; ?>
                </div>

                <p class="fs-6 text-muted mb-0 small">
                    No matter your area of law, our lawyer SEO company builds visibility where your potential clients are searching most.
                </p>
            </div>

            <!-- Right Side: Meeting Table Image -->
            <div class="col-lg-6">
                <div class="practice-graphic h-100 min-vh-50 rounded-4 overflow-hidden shadow-lg position-relative" style="width: 70%;margin: 0 auto;">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/lawyer/Law-Firms-and-Practice.jpg.webp' ); ?>" alt="Law Firm Meeting" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>
