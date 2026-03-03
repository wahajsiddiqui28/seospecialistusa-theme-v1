<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'seospecialistusa' ); ?></a>

<header id="masthead" class="site-header">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container-custom d-flex justify-content-between align-items-center">
            <div class="top-bar-left d-flex align-items-center gap-3">
                <a href="tel:<?php echo esc_attr( seo_specialist_get_phone_tel() ); ?>" class="top-bar-item d-flex align-items-center gap-1">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20 15.5c-1.2 0-2.4-.2-3.6-.6-.3-.1-.7 0-1 .2l-2.2 2.2c-2.8-1.4-5.1-3.8-6.6-6.6l2.2-2.2c.3-.3.4-.7.2-1-.3-1.1-.5-2.3-.5-3.5 0-.6-.4-1-1-1H4c-.6 0-1 .4-1 1 0 9.4 7.6 17 17 17 .6 0 1-.4 1-1v-3.5c0-.6-.4-1-1-1zM19 12h2c0-4.8-4-8.8-8.8-8.8v2c3.7 0 6.8 3.1 6.8 6.8z"/><path d="M13 10V8c1.1 0 2-.9 2-2h2c0 2.2-1.8 4-4 4z"/></svg>
                    <span><?php echo esc_html( seo_specialist_get_phone() ); ?></span>
                </a>
                <a href="mailto:<?php echo esc_attr( seo_specialist_get_email() ); ?>" class="top-bar-item d-flex align-items-center gap-1">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <span><?php echo esc_html( seo_specialist_get_email() ); ?></span>
                </a>
            </div>
            <div class="top-bar-right d-flex align-items-center gap-3">
                <a href="https://www.facebook.com/seospecialistinusa" class="social-icon" aria-label="Facebook">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/seospecialistusa/" class="social-icon" aria-label="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 1-2 2 2 2 0 0 1 2-2z"/></svg>
                </a>
                <a href="https://www.instagram.com/seospecialistusa/" class="social-icon" aria-label="Instagram">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17 2H7a5 5 0 0 0-5 5v10a5 5 0 0 0 5 5h10a5 5 0 0 0 5-5V7a5 5 0 0 0-5-5zm3 15a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10z"/><path d="M12 7a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm5.3-8.8a1.1 1.1 0 1 1-1.1-1.1 1.1 1.1 0 0 1 1.1 1.1z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-custom d-flex justify-content-between align-items-center">
            <!-- Logo area -->
            <div class="site-logo">
                <img src="<?php echo SEO_SPECIALIST_URI; ?>/assets/images/logo/seospecialistusa-logo.jpg" alt="">
            </div>

            <!-- Navigation -->
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'seospecialistusa' ); ?>">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger"></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'seospecialistusa' ); ?></span>
                </button>
                <div class="nav-menu-wrapper">
                    <!-- Mobile Close Button -->
                    <button class="close-menu d-lg-none" aria-label="<?php esc_attr_e( 'Close Menu', 'seospecialistusa' ); ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'nav-menu d-flex align-items-center',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>

                    <!-- Mega Menu Services -->
                    <?php get_template_part( 'template-parts/components/mega-menu', 'services' ); ?>

                    <!-- Mobile Contact & Social Info -->
                    <div class="mobile-menu-footer d-lg-none mt-5 pt-4 border-top">
                        <div class="mobile-contact-info mb-4">
                            <h5 class="h6 fw-bold mb-3 text-brand-red">Get in Touch</h5>
                            <a href="tel:<?php echo esc_attr( seo_specialist_get_phone_tel() ); ?>" class="d-flex align-items-center gap-2 mb-2 text-decoration-none text-brand-blue">
                                <i class="fas fa-phone-alt"></i>
                                <span><?php echo esc_html( seo_specialist_get_phone() ); ?></span>
                            </a>
                            <a href="mailto:<?php echo esc_attr( seo_specialist_get_email() ); ?>" class="d-flex align-items-center gap-2 text-decoration-none text-brand-blue">
                                <i class="fas fa-envelope"></i>
                                <span><?php echo esc_html( seo_specialist_get_email() ); ?></span>
                            </a>
                        </div>
                        <div class="mobile-social-info">
                            <h5 class="h6 fw-bold mb-3 text-brand-red">Follow Us</h5>
                            <div class="d-flex gap-3">
                                <a href="https://www.facebook.com/seospecialistinusa" class="social-box small" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/company/seospecialistusa/" class="social-box small" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/seospecialistusa" class="social-box small" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Action Buttons -->
            <div class="header-actions d-flex align-items-center gap-3">
                <!-- <button class="search-icon-round me-2" id="headerSearchTrigger" aria-label="Search">
                    <i class="fas fa-search"></i>
                </button> -->
                <a href="https://wa.me/16469165108" class="whatsapp-icon-round" aria-label="WhatsApp">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> +1 (646) 916-5108
                </a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="btn-premium btn-primary-custom">
                    <?php esc_html_e( 'Contact', 'seospecialistusa' ); ?>
                </a>
            </div>
        </div>
    </div>
</header>

</main><!-- #main-content -->

<!-- Search Overlay -->
<!-- <div class="search-overlay" id="searchOverlay">
    <button class="search-close" id="searchClose" aria-label="Close Search">
        <i class="fas fa-times"></i>
    </button>
    <div class="search-overlay-content">
        <form role="search" method="get" class="search-overlay-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label class="search-label">What are you looking for?</label>
            <div class="search-input-wrapper">
                <input type="search" class="search-overlay-input" placeholder="Type keywords..." value="" name="s" id="searchField" autofocus>
                <button type="submit" class="search-overlay-submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <p class="search-hint">Press <span>ESC</span> to close or <span>ENTER</span> to search</p>
        </form>
    </div>
</div> -->
