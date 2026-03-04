<?php
/**
 * Services Section for Iowa
 */
?>
<section class="section-padding bg-light-iowa">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-lg-7">
                <h2 class="display-5 fw-bold text-dark mb-3">SEO Services in Iowa We Provide</h2>
                <p class="lead text-muted">Comprehensive search strategies designed to help Iowa businesses dominate their local and regional markets.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <div class="mb-4 d-none d-lg-block">
                    <span class="badge bg-brand-red px-3 py-2 rounded-pill">Expertise & Results</span>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Sidebar Image/Intro -->
            <div class="col-lg-4">
                <div class="featured-service-image h-100 position-relative rounded-4 overflow-hidden shadow-lg">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/pages/iowa-seo-services.png" alt="Iowa SEO Services" class="w-100 h-100 object-fit-cover">
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-brand-navy bg-opacity-75 text-white">
                        <h4 class="h5 fw-bold mb-2">Dominating the Iowa Market</h4>
                        <p class="small opacity-75 mb-0">From technical audits to local authority building, we cover every aspect of your growth.</p>
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-map-marker-alt fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">Local SEO</h3>
                            <p class="small text-muted mb-0">We optimize your Google Business Profile, build local citations, and target keywords Iowa customers use. You appear when nearby customers search for your services in West Des Moines or the Corridor region.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-file-code fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">On-Page SEO</h3>
                            <p class="small text-muted mb-0">Your website content must satisfy search algorithms while speaking to Iowa customers. We optimize title tags, headers, and page content to target relevant keywords effectively.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-cog fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">Technical SEO</h3>
                            <p class="small text-muted mb-0">Site speed, mobile responsiveness, and clean code determine ranking. We fix broken links, improve load times, and implement schema markup for rich results.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-pen-nib fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">Content Optimization</h3>
                            <p class="small text-muted mb-0">We develop content strategies that answer questions your Iowa customers ask. Quality content targeting commercial intent attracts links and builds authority.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-link fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">Link Building</h3>
                            <p class="small text-muted mb-0">We build high-quality backlinks from relevant Iowa directories and industry publications. Every link strengthens your domain authority and market presence.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iowa-card premium-card">
                            <div class="service-icon mb-4">
                                <i class="fas fa-search-plus fa-2x text-brand-red"></i>
                            </div>
                            <h3 class="h5 mb-3 fw-bold">SEO Audits</h3>
                            <p class="small text-muted mb-0">We conduct audits that identify what holds your website back. Technical issues, content gaps, and missed opportunities become clear through professional analysis.</p>
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
