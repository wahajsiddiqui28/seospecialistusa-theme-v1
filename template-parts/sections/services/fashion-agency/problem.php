<?php
/**
 * Problem Section for Fashion SEO Agency
 */
?>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="display-6 mb-4">Why Fashion Brands Struggle With SEO</h2>
                <p class="lead text-muted mb-4">The fashion industry faces unique search visibility challenges that generic SEO strategies can't address.</p>
                <p class="text-muted mb-4">Fast fashion giants dominate broad keywords while niche boutiques struggle to reach their ideal customers. Majority of online fashion journeys begin with a search query. Brands ranking on page two or three of Google lose thousands of potential customers monthly to competitors appearing in top positions.</p>
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'button_text' => 'Get Technical Audit',
                    'use_modal' => true
                )); 
                ?>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/pages/fashion/why-fashion-brands-struggle-with.jpg" alt="Fashion SEO Audit" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>
