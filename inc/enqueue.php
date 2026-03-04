<?php
/**
 * Enqueue scripts and styles
 *
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function seospecialist_scripts() {
	// Google Fonts
	wp_enqueue_style( 'seospecialist-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap', array(), null );

	// Bootstrap 5.3 CSS - Only CSS as requested
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2' );

	// Swiper CSS
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.5' );

	// Bootstrap 5.3 Bundle JS (Required for Accordion, Modals, etc.)
	wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );

	// Swiper JS
	wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5', true );

	// FontAwesome 6
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2' );

	// Theme main stylesheet
	wp_enqueue_style( 'seospecialist-main', SEO_SPECIALIST_URI . '/assets/css/main.css', array( 'bootstrap' ), SEO_SPECIALIST_VERSION );

	// Theme responsive stylesheet
	wp_enqueue_style( 'seospecialist-responsive', SEO_SPECIALIST_URI . '/assets/css/responsive.css', array( 'seospecialist-main' ), SEO_SPECIALIST_VERSION );

	// Theme Specialized Services stylesheet
	wp_enqueue_style( 'seospecialist-services-specialized', SEO_SPECIALIST_URI . '/assets/css/services-specialized.css', array( 'seospecialist-main' ), SEO_SPECIALIST_VERSION );

	// Theme main script
	wp_enqueue_script( 'seospecialist-main', SEO_SPECIALIST_URI . '/assets/js/main.js', array(), SEO_SPECIALIST_VERSION, true );

	// Theme navigation script
	wp_enqueue_script( 'seospecialist-navigation', SEO_SPECIALIST_URI . '/assets/js/navigation.js', array(), SEO_SPECIALIST_VERSION, true );

	// Theme forms script
	wp_enqueue_script( 'seospecialist-forms', SEO_SPECIALIST_URI . '/assets/js/forms.js', array(), SEO_SPECIALIST_VERSION, true );
	wp_localize_script( 'seospecialist-forms', 'seoFormVars', array(
		'ajax_url' => admin_url( 'admin-ajax.php' )
	) );

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'seospecialist_scripts' );
