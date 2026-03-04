<?php
/**
 * CTA Section for Makeup SEO Company
 */
?>
<section class="section-padding text-center" style="background: linear-gradient(135deg, #002868 0%, #0b1120 100%); color: white;">
    <div class="container">
        <h2 class="display-5 fw-bold text-white mb-4 ">Let's Discuss Your Makeup SEO Strategy</h2>
        <p class="lead mb-4 text-white-50 mx-auto" style="max-width:800px;">SEO Specialist USA builds organic growth systems for cosmetics brands across the United States.</p>
        <p class="lead mb-4 text-white-50 mx-auto" style="max-width:800px;">Our in-house SEO specialists work with a select number of beauty brands at a time to ensure every client receives strategic attention and customized solutions.</p>
        <p class="lead mb-4 text-white-50 mx-auto" style="max-width:800px;">Request a free SEO analysis to see where your makeup brand is losing visibility and revenue. We'll analyze your current rankings, identify missed opportunities, and outline the specific strategy for outranking your competition.</p>
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
