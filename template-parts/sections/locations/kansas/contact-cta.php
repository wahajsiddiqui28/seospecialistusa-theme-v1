<?php
/**
 * Contact CTA Section for Kansas
 */
?>
<section class="section-padding bg-dark-kansas">
    <div class="container text-center text-white">
        <h2 class="display-4 fw-bold mb-4">Get SEO Services in Kansas</h2>
        <p class="fs-5 opacity-75 mb-5 mx-auto mw-800">Ready to improve your search visibility? SEO Specialist USA delivers transparent, results-focused campaigns for Kansas businesses serious about growth.</p>
        <p class="mb-5">Contact us today to discuss your goals and market challenges. We'll analyze your current position and outline a clear strategy for capturing more traffic and customers through search.</p>
        
        <div class="d-inline-flex justify-content-center gap-3 flex-wrap">
            <?php 
            get_template_part( 'template-parts/components/cta-buttons', null, array(
                'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 justify-content-center flex-wrap',
                'phone_class' => 'btn-dark-blue',
            )); 
            ?>
        </div>
    </div>
</section>
