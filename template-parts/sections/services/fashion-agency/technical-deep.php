<?php
/**
 * Technical Deep Section for Fashion SEO Agency
 */
?>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <h3 class="display-6 mb-4">Technical SEO for Fashion Websites</h3>
                <p class="text-muted mb-4">We start every engagement with a comprehensive technical audit focused on fashion site architecture. Visual-heavy sites need careful balancing of quality and performance.</p>
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'button_text' => 'Get Technical Audit',
                    'use_modal' => true
                )); 
                ?>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="tech-item">
                            <i class="fas fa-images"></i>
                            <div>
                                <h5 class="h6 mb-2">Image Optimization</h5>
                                <p class="small text-muted mb-0">We compress high-resolution product images without quality loss, implement next-gen formats like WebP, and add descriptive alt text that improves accessibility and search visibility.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech-item">
                            <i class="fas fa-mobile"></i>
                            <div>
                                <h5 class="h6 mb-2">Mobile Performance</h4>
                                <p class="small text-muted mb-0">We optimize mobile page speed, ensure touch-friendly navigation, and test checkout flows on multiple devices.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech-item">
                            <i class="fas fa-database"></i>
                            <div>
                                <h5 class="h6 mb-2">Structured Data Implementation</h4>
                                <p class="small text-muted mb-0">We add Product schema markup so Google displays prices, availability, sizes, and reviews directly in search results. This increases click-through rates by making your listings more informative.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tech-item">
                            <i class="fas fa-map-signs"></i>
                            <div>
                                <h5 class="h6 mb-2">URL Architecture</h4>
                                <p class="small text-muted mb-0">We structure category pages logically (example: /womens-clothing/dresses/midi-dresses) to build topical authority and capture long-tail searches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
