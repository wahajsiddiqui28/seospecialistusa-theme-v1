<?php
/**
 * Hero Section Template Part
 * 
 * @package seospecialistusa
 */
?>

<section class="hero-banner">
    <div class="container-custom">
        <div class="hero-row d-flex align-items-center flex-wrap">
            
            <!-- Left Content -->
            <div class="hero-content">
                <h1 class="hero-title">SEO Services in USA: Rank Higher, Drive Traffic, Grow Sales</h1>
                <p class="hero-description fs-6">
                    Your business should be visible online, and SEO Specialist USA helps make that happen. 
                    With our professional SEO services in the USA, we guide companies to rank higher on Google, 
                    bring in more visitors, and turn those visitors into real customers. 
                    Our SEO Specialist USA team focuses on clear results with more leads, more sales, 
                    and stronger visibility across the digital space.
                </p>
                <?php 
                get_template_part( 'template-parts/components/cta', 'buttons', array(
                    'wrapper_class' => 'hero-ctas d-flex align-items-center gap-3 flex-wrap'
                )); 
                ?>
            </div>

            <!-- Right Form Card -->
            <div class="hero-form-column">
                <?php 
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'title' => 'Get in Touch',
                    'button_text' => 'Send'
                )); 
                ?>
            </div>

        </div>
    </div>
</section>
