<?php
/**
 * Why SEO Matters Section for Mississippi
 */
?>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="position-relative">
                    <div class="p-5 bg-light-ms rounded-5 shadow-inner text-center">
                        <i class="fas fa-chart-line fa-5x text-brand-red mb-4"></i>
                        <h4 class="h5 fw-bold text-dark">Adapting to Mississippi's Economy</h4>
                        <p class="small opacity-75 mb-0">From manufacturing hubs to tourism destinations, we tailor your strategy to the sectors that drive MS growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <h2 class="display-6 fw-bold mb-4 text-dark">Why SEO Matters for Mississippi Businesses</h2>
                <p>Search behavior in Mississippi reflects the state's diverse economy. From manufacturing and healthcare to tourism and professional services, each market demands tailored strategies. Metro areas face intense competition from established firms, while smaller markets present opportunities to dominate local search results with focused optimization.</p>
                <p>Competition levels vary across industries. Tourism businesses face seasonal challenges, while professional services battle firms with larger marketing budgets. Understanding these dynamics shapes effective campaigns that deliver measurable results.</p>
                
                <div class="mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
