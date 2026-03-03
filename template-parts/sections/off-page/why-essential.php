<?php
/**
 * Off-Page SEO Why Essential Section
 * 
 * @package seospecialistusa
 */
?>

<section class="off-page-why-essential py-5 bg-white">
    <div class="container-fluid py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Side: Content -->
            <div class="col-lg-6 m-0">
                <h2 class="display-5 fw-bold text-brand-blue mb-4">Why Off Page SEO Is Essential for Growth</h2>
                
                <p class="text-dark opacity-80 mb-4">
                    Having a well-optimized website is just the start. Off Page SEO gives your business the credibility it needs to outrank competitors. It’s what tells Google and potential customers that your website is worth noticing.
                </p>

                <h6 class="text-brand-red fw-bold mb-4">Why it matters:</h6>

                <div class="why-essential-items mb-2">
                    <div class="essential-item d-flex gap-3 p-3 mb-3 bg-white rounded border border-secondary border-opacity-10 shadow-sm transition-base hover-shadow">
                        <div class="essential-icon text-brand-blue fs-3">
                            <i class="fas fa-building-circle-check"></i>
                        </div>
                        <div class="essential-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Builds Authority</h6>
                            <p class="mb-0 text-muted small">The more trusted websites link to you, the more credibility your site gains.</p>
                        </div>
                    </div>

                    <div class="essential-item d-flex gap-3 p-3 mb-3 bg-white rounded border border-secondary border-opacity-10 shadow-sm transition-base hover-shadow">
                        <div class="essential-icon text-brand-blue fs-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="essential-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Improves Rankings</h6>
                            <p class="mb-0 text-muted small">Strong backlinks and online mentions boost your visibility in search results.</p>
                        </div>
                    </div>

                    <div class="essential-item d-flex gap-3 p-3 mb-3 bg-white rounded border border-secondary border-opacity-10 shadow-sm transition-base hover-shadow">
                        <div class="essential-icon text-brand-blue fs-3">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="essential-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Increases Brand Awareness</h6>
                            <p class="mb-0 text-muted small">Quality off-page activity helps your brand appear across blogs, directories, and social media.</p>
                        </div>
                    </div>

                    <div class="essential-item d-flex gap-3 p-3 bg-white rounded border border-secondary border-opacity-10 shadow-sm transition-base hover-shadow">
                        <div class="essential-icon text-brand-blue fs-3">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="essential-content">
                            <h6 class="fw-bold text-brand-blue mb-1">Drives Referral Traffic</h6>
                            <p class="mb-0 text-muted small">Backlinks from relevant sources send highly targeted visitors straight to your site.</p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <p class="text-dark opacity-80 small italic">At SEO Specialist USA, we combine proven strategies with ethical practices to make your brand stand out beyond your website.</p>
                </div>

                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'off-page-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="col-lg-6 m-0">
                <div class="why-essential-graphic text-center p-3 rounded-4 bg-black overflow-hidden shadow-lg">
                    <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/off-page/WhyOffPageSEOIsEssentialforGrowth.webp' ); ?>" alt="Off-Page SEO Growth Illustration" class="img-fluid w-100 rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.essential-item {
    transition: all 0.3s ease;
}
.essential-item:hover {
    border-color: var(--brand-blue) !important;
    transform: translateX(10px);
}
.hover-shadow:hover {
    box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}
</style>
