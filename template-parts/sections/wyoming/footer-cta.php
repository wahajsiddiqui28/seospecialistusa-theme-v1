<?php
/**
 * Wyoming Footer CTA Section
 */
?>
<section id="contact" class="section-padding bg-brand-red text-white wy-footer-cta">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <h2 class="text-white mb-4" style="font-size: 3rem; font-weight: 800; line-height: 1.1;">Get Started With SEO Specialist USA — Your Wyoming SEO Partner</h2>
                <p class="lead mb-4">Stronger search visibility starts with a clear strategy. Whether you're serving customers in Cheyenne, Casper, Jackson, or anywhere across Wyoming, our team is ready to help you build long-term organic growth.</p>
                
                <div class="step-start-list mb-5">
                    <h3 class="h5 text-white fw-bold mb-3">Here's what happens when you get started:</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex gap-3 align-items-start">
                            <i class="fas fa-chevron-right mt-1"></i>
                            <div>
                                <strong class="d-block">Free Website Audit</strong>
                                <span class="small opacity-90">We identify ranking opportunities, technical issues, and keyword gaps.</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex gap-3 align-items-start">
                            <i class="fas fa-chevron-right mt-1"></i>
                            <div>
                                <strong class="d-block">Customized SEO Plan</strong>
                                <span class="small opacity-90">Tailored for your industry, your goals, and Wyoming search behavior.</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex gap-3 align-items-start">
                            <i class="fas fa-chevron-right mt-1"></i>
                            <div>
                                <strong class="d-block">Full-Scale Optimization Begins</strong>
                                <span class="small opacity-90">On-page, technical, and content improvements start immediately.</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex gap-3 align-items-start">
                            <i class="fas fa-chevron-right mt-1"></i>
                            <div>
                                <strong class="d-block">Transparent Monthly Reporting</strong>
                                <span class="small opacity-90">See exactly how your visibility and performance improve.</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <p class="h5 mb-4 fw-bold">Ready to increase your organic traffic and outperform competitors?</p>
                <div class="d-flex gap-3 flex-wrap">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'wyoming-footer-ctas d-flex align-items-center gap-3 flex-wrap',
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
