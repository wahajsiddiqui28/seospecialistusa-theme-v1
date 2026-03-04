<?php
/**
 * Technical SEO Services Tabs Section
 * 
 * @package seospecialistusa
 */
?>

<section class="technical-services-tabs py-5" style="background-color: #fdf2f2;">
    <div class="container-custom py-lg-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-brand-blue mb-4">What’s Included in Our Technical SEO Services</h2>
            <p class="fs-6 text-muted mx-auto" style="max-width: 800px;">
                Our technical SEO services company goes beyond surface-level checks. We look deep into your site’s structure and performance to uncover every barrier holding you back.
            </p>
            <h4 class="fw-bold mt-4 text-brand-red">Our core services include:</h4>
        </div>

        <div class="row g-4 mt-4">
            <!-- Left Side: Tabs -->
            <div class="col-lg-4">
                <div class="nav flex-column nav-pills tech-v-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-audit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-audit" type="button" role="tab">Comprehensive Technical SEO Audit</button>
                    <button class="nav-link" id="v-pills-arch-tab" data-bs-toggle="pill" data-bs-target="#v-pills-arch" type="button" role="tab">Website Architecture Optimization</button>
                    <button class="nav-link" id="v-pills-vitals-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vitals" type="button" role="tab">Core Web Vitals Improvement</button>
                    <button class="nav-link" id="v-pills-data-tab" data-bs-toggle="pill" data-bs-target="#v-pills-data" type="button" role="tab">Structured Data Implementation</button>
                    <button class="nav-link" id="v-pills-crawl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-crawl" type="button" role="tab">Indexation and Crawl Optimization</button>
                    <button class="nav-link" id="v-pills-script-tab" data-bs-toggle="pill" data-bs-target="#v-pills-script" type="button" role="tab">Image & Script Optimization</button>
                    <button class="nav-link" id="v-pills-monitor-tab" data-bs-toggle="pill" data-bs-target="#v-pills-monitor" type="button" role="tab">Technical Maintenance and Monitoring</button>
                </div>
            </div>

            <!-- Right Side: Content -->
            <div class="col-lg-8">
                <div class="tab-content tech-tabs-content bg-white p-4 p-lg-5 rounded-4 shadow-sm" id="v-pills-tabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="v-pills-audit" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Comprehensive Technical SEO Audit</h3>
                                <p class="fs-6 text-muted">A complete inspection of your crawl stats, site health, indexing, and speed to identify weak points.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-audit-illustration.webp' ); ?>" alt="Comprehensive Technical SEO Audit illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="v-pills-arch" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Website Architecture Optimization</h3>
                                <p class="fs-6 text-muted">Organizing your site structure to ensure a logical flow for both users and search engine bots.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-arch-illustration.webp' ); ?>" alt="Website Architecture Optimization illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="v-pills-vitals" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Core Web Vitals Improvement</h3>
                                <p class="fs-6 text-muted">Enhancing LCP, FID, and CLS scores to meet Google’s Page Experience standards.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-vitals-illustration.webp' ); ?>" alt="Core Web Vitals Improvement illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Add other tabs similarly if you have dummy content/images, but Image 3 only shows the first one active. I'll add placeholder content for now for consistency -->
                    <div class="tab-pane fade" id="v-pills-data" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Structured Data Implementation</h3>
                                <p class="fs-6 text-muted">Adding Schema markup to help search engines understand your content and display rich snippets.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-schema-illustration.webp' ); ?>" alt="Structured Data Implementation illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="v-pills-crawl" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Indexation and Crawl Optimization</h3>
                                <p class="fs-6 text-muted">Managing robots.txt, XML sitemaps, and crawl budget to ensure important pages are found.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-crawl-illustration.webp' ); ?>" alt="Indexation and Crawl Optimization illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-script" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Image & Script Optimization</h3>
                                <p class="fs-6 text-muted">Optimizing media files and reducing JavaScript bloat for lightning-fast loading speeds.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-script-illustration.webp' ); ?>" alt="Image & Script Optimization illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-monitor" role="tabpanel">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <h3 class="fw-bold text-brand-blue mb-4">Technical Maintenance and Monitoring</h3>
                                <p class="fs-6 text-muted">Ongoing monitoring of crawl errors, server status, and security vulnerabilities.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo esc_url( SEO_SPECIALIST_URI . '/assets/images/pages/technical/tech-monitor-illustration.webp' ); ?>" alt="Technical Maintenance and Monitoring illustration" class="img-fluid rounded shadow-sm">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
