<?php
/**
 * Hero Section for Makeup SEO Company
 */
?>
<section class="makeup-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold text-white">Makeup SEO Company That Drives Revenue for Beauty Brands</h1>
                <p class="lead text-light mb-4" style="font-weight: 300;">Your makeup brand has exceptional products, but potential customers searching for specific solutions find your competitors instead.</p>
                <p class="mb-5 text-white-50 mx-auto" style="max-width: 800px;">SEO Specialist USA is a makeup SEO company specializing in organic search strategies for cosmetics brands, beauty e-commerce stores, and direct-to-consumer makeup companies. Our SEO systems help makeup shoppers discover your products and convert into customers.</p>
                <div class="d-flex gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'on-page-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
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
