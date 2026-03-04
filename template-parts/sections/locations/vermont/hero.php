<?php
/**
 * Vermont Hero Section
 */
?>
<section class="vermont-hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h1 class="display-4 text-white fw-bold">Professional SEO Services in Vermont</h1>
                <p class="lead mb-4">Boost your online visibility, attract more local customers, and grow your business across Vermont with tailored SEO strategies.</p>
                <p class="mb-5">At SEO Specialist USA, we help Vermont businesses rank higher in Google search results and Google Maps. From Burlington to Montpelier, our expert SEO services are designed to increase traffic, generate quality leads, and deliver measurable results for small towns, tourist hotspots, and growing businesses throughout the state.</p>
                <?php 
                get_template_part( 'template-parts/components/cta-buttons', null, array(
                    'wrapper_class' => 'vermont-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                    'phone_class' => 'btn-dark-blue',
                )); 
                ?>
            </div>
            <div class="col-lg-5">
                <?php 
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'button_text' => 'Send',
                    'class' => 'vermont-hero-form'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
