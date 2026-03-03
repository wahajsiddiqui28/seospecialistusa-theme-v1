<?php
/**
 * Theme Setup
 *
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'seospecialist_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function seospecialist_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'seospecialistusa', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Register Navigation Menus
		register_nav_menus(
			array(
				'header-menu' => esc_html__( 'Primary Header Menu', 'seospecialistusa' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'seospecialistusa' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add theme support for wide and full alignment images (Gutenberg)
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',
			'assets/css/main.css',
			'assets/css/blocks.css'
		) );
	}
endif;
add_action( 'after_setup_theme', 'seospecialist_setup' );

/**
 * Set the content width in pixels.
 */
function seospecialist_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seospecialist_content_width', 1170 );
}
add_action( 'after_setup_theme', 'seospecialist_content_width', 0 );
