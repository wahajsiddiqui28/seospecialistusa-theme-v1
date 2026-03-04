<?php
/**
 * Why SEO Matters Section for Iowa
 */
?>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="mb-4 display-6 fw-bold text-dark">Why SEO Matters for Iowa Businesses</h2>
                <p>Iowa's economy includes agriculture, manufacturing, insurance, healthcare, and growing tech sectors. Des Moines and Cedar Rapids feature competitive markets for legal, healthcare, and home service businesses. Smaller cities like Davenport and Sioux City offer opportunities for businesses to dominate local search with less competition.</p>
                <p>Search behavior varies across Iowa. Metro area customers search for immediate solutions and compare providers. In smaller communities, search volumes may be lower, but conversion rates run higher. Businesses serving multiple Iowa cities need strategies that capture both competitive urban markets and underserved rural areas.</p>
                <div class="mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/pages/iowa-business-growth.png" alt="Why SEO Matters for Iowa" class="img-fluid rounded-4 shadow-lg">
                    <!-- Subtle overlay text for more premium feel -->
                    <div class="position-absolute bottom-0 start-0 w-100 p-4 bg-dark bg-opacity-50 text-white rounded-bottom-4 d-none d-md-block">
                        <p class="h6 mb-0">Capturing Competitive Urban & Underserved Rural Markets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
