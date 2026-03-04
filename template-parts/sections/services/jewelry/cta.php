<?php
/**
 * CTA Section for Jewelry
 */
?>
<section class="section-padding text-center" style="background: linear-gradient(135deg, #002868 0%, #0b1120 100%); color: white;">
    <div class="container">
        <h2 class="display-5 mb-4 text-white">Improve Your Store's Search Performance</h2>
        <p class="lead mb-4 text-white-50 mx-auto" style="max-width:800px;">Schedule a consultation to discuss how our jewelry SEO services can increase traffic and sales for your business.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <?php 
            get_template_part( 'template-parts/components/cta-buttons', null, array(
                'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 justify-content-center flex-wrap',
                'phone_class' => 'btn-dark-blue',
            )); 
            ?>
        </div>
    </div>
</section>
