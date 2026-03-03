<?php
/**
 * Vermont Footer CTA Section
 */
?>
<section id="contact" class="section-padding bg-brand-red text-white vt-footer-cta">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="text-white hero-title mb-4" style="font-size: 3rem;">Get Started With SEO Specialist USA Vermont's Trusted SEO Partner</h2>
                <p class="lead mb-5">Ready to increase your visibility and attract more qualified traffic? Our team is here to build a growth-focused SEO strategy tailored to your Vermont market, industry, and business goals.</p>
                
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'vermont-hero-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-dark-blue',
                    )); 
                    ?>
                </div>
            </div>
            <div class="col-lg-5">
                <?php 
                get_template_part( 'template-parts/components/form', 'hero', array(
                    'title' => 'Get in Touch',
                    'button_text' => 'Send',
                    'class' => 'bg-white p-4 rounded-4 shadow'
                )); 
                ?>
            </div>
        </div>
    </div>
</section>
