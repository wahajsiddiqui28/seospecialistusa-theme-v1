<?php
/**
 * CTA Section for Iowa
 */
?>
<section class="section-padding text-center" style="background: linear-gradient(135deg, #002868 0%, #0b1120 100%); color: white;">
    <div class="container">
        <h2 class="display-5 mb-4 text-white fw-bold">Get SEO Services in Iowa</h2>
        <p class="lead mb-4 text-white-50 mx-auto" style="max-width: 800px;">Ready to improve your visibility in Iowa search results? We'll analyze your current online presence, identify opportunities in your market, and show you how SEO can grow your business.</p>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <?php 
            get_template_part( 'template-parts/components/cta-buttons', null, array(
                'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 justify-content-center flex-wrap',
                'phone_class' => 'btn-dark-blue',
            )); 
            ?>
        </div>
    </div>
</section>
