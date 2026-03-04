<?php
/**
 * Contact CTA Section for Mississippi
 */
?>
<section class="section-padding bg-dark-ms text-white text-center">
    <div class="container">
        <div class="mw-800 mx-auto">
            <h2 class="display-4 fw-bold mb-4 ls-1 text-white">Get SEO Services in Mississippi Today</h2>
            <p class="fs-5 opacity-75 mb-5">Ready to dominate search results in your Mississippi market? SEO Specialist USA develops customized strategies that turn Google searches into paying customers. Strategic optimization creates sustainable competitive advantages for businesses across the state. Schedule a consultation to discuss your business goals and receive a detailed analysis of your current SEO opportunities.</p>
            
            <div class="d-inline-flex justify-content-center gap-3 mt-4">
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 justify-content-center flex-wrap',
                    'phone_class' => 'btn-dark-blue',
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
