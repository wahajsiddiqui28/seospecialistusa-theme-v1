</main><!-- #main-content -->

<footer id="colophon" class="site-footer">
    <!-- CTA Section (Floating) -->
    <div class="footer-cta-wrapper">
        <div class="container-custom">
            <div class="footer-cta d-flex justify-content-between align-items-center">
                <div class="cta-content">
                    <h2 class="cta-title">Not sure where to start with SEO? Let’s figure it out together.</h2>
                </div>
                <div class="cta-actions d-flex align-items-center gap-3">
                    <?php 
                    get_template_part( 'template-parts/components/cta-buttons', null, array(
                        'wrapper_class' => 'locations-ctas d-flex align-items-center gap-3 flex-wrap',
                        'phone_class' => 'btn-white',
                        'button_class' => 'btn-white'
                    )); 
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="footer-main">
        <div class="container-custom">
            <div class="row">
                <!-- About Info -->
                <div class="col-lg-4 footer-col">
                    <div class="footer-logo mb-4">
                         <div class="site-logo">
                <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/logo/seospecialistusa-logo.jpg" alt="">
            </div>

                    </div>
                    <div class="footer-about-text">
                        <p>SEO Specialist USA is a trusted SEO company specializing in search engine optimization, content marketing, local SEO, on-page improvements, backlink building, and Google visibility. We help businesses attract more customers, build strong online presence, and grow through long-term, sustainable SEO.</p>
                        <p class="mt-3"><?php esc_html_e( 'Call or WhatsApp:', 'seospecialistusa' ); ?> <a href="<?php echo esc_url( seo_specialist_get_whatsapp_link() ); ?>"><?php echo esc_html( seo_specialist_get_phone() ); ?></a></p>
                        <p><?php esc_html_e( 'Email Us:', 'seospecialistusa' ); ?> <?php echo esc_html( seo_specialist_get_email() ); ?></p>
                    </div>
                    <div class="footer-social mt-4 d-flex gap-2">
                        <a href="https://www.facebook.com/seospecialistinusa" class="social-box" aria-label="Facebook"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                        <a href="https://www.linkedin.com/company/seospecialistusa/" class="social-box" aria-label="LinkedIn"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 1-2 2 2 2 0 0 1 2-2z"/></svg></a>
                        <a href="https://www.instagram.com/seospecialistusa" class="social-box" aria-label="Instagram"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17 2H7a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h10a5 5 0 0 0 5-5V7a5 5 0 0 0-5-5zm3 15a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10z"/><path d="M12 7a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm5.3-8.8a1.1 1.1 0 1 1-1.1-1.1 1.1 1.1 0 0 1 1.1 1.1z"/></svg></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class'     => 'footer-links-list',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>

                <!-- Our Services -->
                <div class="col-lg-3 footer-col">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="footer-links-list">
                        <li><a href="#">SEO Services in USA</a></li>
                        <li><a href="#">SEO Services in USA</a></li>
                        <li><a href="#">SEO Services in USA</a></li>
                        <li><a href="#">SEO Services in USA</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="container-custom d-flex justify-content-between align-items-center">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> SEO Specialist USA - All rights reserved
            </div>
            <div class="footer-bottom-links">
                <a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms & Condition</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Scroll CTA -->
<div class="floating-cta-wrapper" id="floatingCta">
    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'seo-audit' ) ) ); ?>" class="btn-floating-red shadow-lg" data-bs-toggle="modal" data-bs-target="#auditModal">
        Request Your Free SEO Audit
    </a>
</div>

<?php get_template_part( 'template-parts/components/modal-form' ); ?>

<?php wp_footer(); ?>
</body>
</html>
