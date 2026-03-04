<?php
/**
 * Delaware SEO Services Section (Accordion + Image)
 *
 * @package seospecialistusa
 */
?>

<section class="delaware-services py-5 bg-white">
    <div class="container-custom py-lg-5">

        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-brand-blue mb-4">Our Comprehensive SEO Services in Delaware</h2>
            <p class="fs-6 text-muted mx-auto" style="max-width: 860px;">
                Delaware businesses compete in a compact yet high-value market where visibility matters. Working with a specialized SEO company helps your brand appear at the top when local customers search for what you offer.
            </p>
            <h4 class="fw-bold mt-4 text-brand-red">Our Delaware SEO Services Include:</h4>
            <hr style="border-color: var(--brand-red); opacity: 1; max-width: 600px; margin: 15px auto 0;">
        </div>

        <div class="row g-5 align-items-start">

            <!-- Left: Accordion -->
            <div class="col-lg-6">
                <div class="accordion delaware-services-accordion" id="delawareServicesAccordion">

                    <!-- Service 1 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc1"
                                style="background-color: var(--brand-red); color: #000;">
                                Technical SEO Optimization
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc1" class="accordion-collapse collapse show" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We fix crawl issues, improve site architecture, boost page-load speed, enhance mobile performance, and ensure your website meets Google's technical standards.
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc2"
                                style="background-color: var(--brand-red); color: #000;">
                                On-Page SEO &amp; Semantic Optimization
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc2" class="accordion-collapse collapse" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We optimize key pages with targeted keywords, internal linking, metadata improvements, and advanced semantic structuring to increase relevance and search visibility.
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc3"
                                style="background-color: var(--brand-red); color: #000;">
                                Keyword Research for Delaware Markets
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc3" class="accordion-collapse collapse" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We identify high-value keywords across Wilmington, Dover, Newark, and regional micro-markets to capture state-specific search demand.
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc4"
                                style="background-color: var(--brand-red); color: #000;">
                                Local SEO for Delaware Cities
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc4" class="accordion-collapse collapse" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We optimize Google Business Profiles, local landing pages, NAP citations, and review signals to increase visibility in local map packs and "near me" searches.
                            </div>
                        </div>
                    </div>

                    <!-- Service 5 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc5"
                                style="background-color: var(--brand-red); color: #000;">
                                Content Marketing &amp; Authority Building
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc5" class="accordion-collapse collapse" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We develop SEO-driven content strategies including service pages, blog posts, and location guides tailored to Delaware's market, customers, and search behavior.
                            </div>
                        </div>
                    </div>

                    <!-- Service 6 -->
                    <div class="accordion-item border-0 mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button fw-bold rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delSvc6"
                                style="background-color: var(--brand-red); color: #000;">
                                Link Building &amp; Domain Authority Growth
                                <i class="fas fa-arrow-up ms-auto"></i>
                            </button>
                        </h3>
                        <div id="delSvc6" class="accordion-collapse collapse" data-bs-parent="#delawareServicesAccordion">
                            <div class="accordion-body bg-light fs-6 text-muted">
                                We build high-quality backlinks from authoritative, relevant sources to strengthen your domain trust and improve competitive rankings.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Image -->
            <div class="col-lg-6">
                <div class="delaware-services-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pages/locations-pages/delaware/image-1-1.png.webp' ); ?>" alt="SEO Services in Delaware" class="img-fluid rounded-4 shadow-lg w-100">
                </div>
            </div>

        </div>
    </div>
</section>
