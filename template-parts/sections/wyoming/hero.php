<?php
/**
 * Wyoming Hero Section
 */
?>
<section class="wyoming-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h1 class="display-3 fw-bold text-white">SEO Services in Wyoming</h1>
                <p class="fs-6 mb-4">Businesses across Wyoming, Cheyenne, Casper, Jackson, Laramie, and beyond, depend on strong search visibility to reach customers. SEO Specialist USA delivers tailored optimization designed to improve rankings, increase organic traffic, and generate consistent leads across the state.</p>
                <p class="fs-6 mb-3" style="color: #fff; font-weight: 700;">Want stronger visibility on Google?</p>
                <p class="fs-6 mb-5">Our team builds data-driven SEO campaigns, enhances technical performance, and creates strategic content aligned with Wyoming search intent — all focused on helping you outperform competitors in your niche.</p>
                
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'wyoming-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class' => 'wyoming-hero-form'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
