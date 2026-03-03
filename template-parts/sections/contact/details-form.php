<?php
/**
 * Contact Details and Form Section
 * 
 * @package seospecialistusa
 */
?>

<section class="contact-details-form py-5 bg-white">
    <div class="container-custom py-lg-5">
        <div class="row g-5">
            <!-- Left Side: Contact Details -->
            <div class="col-lg-6">
                <span class="badge bg-brand-red mb-3 py-2 px-3 fw-bold">Contact Us</span>
                <h2 class="display-5 fw-bold text-brand-blue mb-5">Our Contact Details</h2>

                <div class="contact-cards">
                    <!-- Phone Card -->
                    <div class="contact-card d-flex align-items-center gap-4 p-4 rounded-4 shadow-sm mb-4 border border-light-subtle">
                        <div class="card-icon text-brand-blue fs-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <a href="tel:<?php echo esc_html(seo_specialist_get_phone()); ?>" class="text-decoration-none">
                        <div>
                            <h4 class="h5 fw-bold text-brand-red mb-1">Phone:</h4>
                            <p class="mb-0 fw-bold text-dark fs-6"><?php echo esc_html(seo_specialist_get_phone()); ?></p>
                        </div>
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="contact-card d-flex align-items-center gap-4 p-4 rounded-4 shadow-sm mb-4 border border-light-subtle">
                        <div class="card-icon text-brand-blue fs-3">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <a href="mailto:inquiry@seospecialistusa.com" class="text-decoration-none">
                        <div>
                            <h4 class="h5 fw-bold text-brand-red mb-1">Email:</h4>
                            <p class="mb-0 fw-bold text-dark fs-6">inquiry@seospecialistusa.com</p>
                        </div>
                        </a>
                    </div>

                    <!-- Office Hours Card -->
                    <div class="contact-card d-flex align-items-center gap-4 p-4 rounded-4 shadow-sm mb-4 border border-light-subtle">
                        <div class="card-icon text-brand-blue fs-3">
                            <i class="far fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="h5 fw-bold text-brand-red mb-1">Office Hours:</h4>
                            <div class="mb-0 text-dark">
                                <p class="mb-1 fw-bold fs-6">Monday to Saturday: 9:00 AM – 6:00 PM</p>
                                <p class="mb-0 opacity-75 small">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Card -->
                    <div class="contact-card d-flex align-items-center gap-4 p-4 rounded-4 shadow-sm mb-5 border border-light-subtle">
                        <div class="card-icon text-success fs-3">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <a href="https://wa.me/16469165108" class="text-decoration-none">
                            <div>
                                <h4 class="h5 fw-bold text-success mb-1">WhatsApp</h4>
                                <p class="mb-0 fw-bold text-dark fs-6"><?php echo esc_html(seo_specialist_get_phone()); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Bottom CTA -->
                <div class="audit-cta mt-5">
                    <h3 class="display-6 fw-bold text-brand-blue mb-4">Want a SEO Audit?</h3>
                    <p class="text-muted mb-4 pe-lg-5">
                        Call now or fill out the form — our SEO experts will get back to you within 24 hours.
                    </p>
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <?php 
                        get_template_part( 'template-parts/components/cta-buttons', null, array(
                            'wrapper_class' => 'contact-footer-ctas d-flex align-items-center gap-3 flex-wrap',
                            'phone_class' => 'btn-dark-blue',
                        )); 
                        ?>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-6">
                <div class="form-container-wrapper p-4 p-lg-5 rounded-5 shadow-lg position-relative overflow-hidden" style="background-color: #002868;">
                    <!-- Form Card -->
                    <div class="bg-white p-4 p-lg-5 rounded-4 position-relative z-1 border border-light shadow-sm">
                        <h2 class="display-6 fw-bold text-brand-red text-center mb-5">Get in Touch</h2>
                        
                        <?php 
                        get_template_part( 'template-parts/components/form', 'hero', array(
                            'title' => '',
                            'button_text' => 'Send',
                            'class' => 'contact-page-form'
                        )); 
                        ?>
                    </div>

                    <!-- Decorative shapes -->
                    <div class="form-decoration position-absolute bottom-0 end-0 opacity-10">
                        <i class="fas fa-paper-plane display-1 text-white m-n4 translate-middle"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contact-card {
    transition: var(--transition-base);
}
.contact-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md) !important;
    border-color: var(--brand-red) !important;
}
.form-container-wrapper::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
}
</style>
