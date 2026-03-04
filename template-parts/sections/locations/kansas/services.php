<?php
/**
 * Services Section for Kansas
 */
?>
<section class="section-padding bg-light-kansas">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-lg-7">
                <h2 class="display-5 fw-bold text-dark mb-3">Our SEO Services in Kansas</h2>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="mb-4 d-none d-lg-block">
                    <span class="badge bg-brand-red px-3 py-2 rounded-pill shadow-sm">Expertise & Results</span>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Services Grid -->
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-map-marked-alt fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">Local SEO</h3>
                            <p class="small text-muted mb-0">Local search drives customer acquisition. We optimize your Google Business Profile, manage citations, and build location-specific content. When potential customers search for services in their area, your business appears in map results and local listings.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-file-invoice fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">On-Page SEO</h3>
                            <p class="small text-muted mb-0">Every page needs proper optimization. We refine title tags, meta descriptions, headers, and content structure. Each element targets relevant keywords while remaining clear and persuasive for readers.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-laptop-code fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">Technical SEO</h3>
                            <p class="small text-muted mb-0">Technical problems prevent rankings. We fix crawl errors, improve site speed, resolve mobile issues, and ensure proper indexing. These fixes often produce quick visibility improvements.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-pen-fancy fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">Content Optimization</h3>
                            <p class="small text-muted mb-0">Quality content builds authority. We create keyword-focused pages and blog posts that answer customer questions. This captures search traffic across multiple related queries in your industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-link fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">Link Building</h3>
                            <p class="small text-muted mb-0">Domain authority determines competitive strength. We build high-quality backlinks through strategic outreach and partnerships with relevant, reputable sources.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kansas-card">
                            <i class="fas fa-chart-pie fa-2x text-brand-red mb-4"></i>
                            <h3 class="h5 mb-3 fw-bold">SEO Audits</h3>
                            <p class="small text-muted mb-0">Audits identify problems and opportunities. You receive detailed reports showing what helps or hurts your rankings, with prioritized recommendations for improvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <?php 
            get_template_part( 'template-parts/components/cta-buttons', null, array(
                'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 justify-content-center flex-wrap',
                'phone_class' => 'btn-dark-blue',
            )); 
            ?>
        </div>
    </div>
</section>
