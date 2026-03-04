<?php
/**
 * Hero Section for Fashion SEO Agency
 */
?>
<section class="fashion-hero">
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-badge">Specialized Fashion SEO Agency</div>
                <h1 class="display-4 text-white">Fashion SEO Agency That Drives Revenue Growth</h1>
                <p class="fs-6">
                    When luxury shoppers search for "sustainable designer dresses" or "minimalist leather bags," does your fashion brand appear in search results? Most fashion businesses lose daily sales to competitors who invest in strategic search visibility.
                </p>
                <p class="fs-6">
                    SEO Specialist USA is a fashion SEO agency specializing in organic growth for boutique and e-commerce fashion brands. We've spent years developing SEO strategies specifically for the fashion industry, working with independent designers, luxury resale platforms, and multi-brand boutiques across the United States.
                </p>
                
                <div class="d-flex align-items-center flex-wrap gap-4 mt-4">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'd-flex align-items-center gap-3 justify-content-center',
                        'button_text' => 'Request Your Free SEO Audit',
                        'use_modal' => true
                    )); 
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php
                        get_template_part( 'template-parts/components/form', 'hero', array(
                            'button_text' => 'Send',
                            'class'       => 'ai-seo-hero-form'
                        ));
                    ?>
            </div>
        </div>
    </div>
</section>
