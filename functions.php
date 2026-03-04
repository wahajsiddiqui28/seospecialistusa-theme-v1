<?php
/**
 * SEO Specialist USA functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define constants for easy access throughout the theme.
 */
if ( ! defined( 'SEO_SPECIALIST_VERSION' ) ) {
	define( 'SEO_SPECIALIST_VERSION', '1.0.1' );
}
define( 'SEO_SPECIALIST_DIR', get_template_directory() );
define( 'SEO_SPECIALIST_URI', get_template_directory_uri() );

/**
 * Load core theme files from /inc/
 */

// Custom helper functions
require_once SEO_SPECIALIST_DIR . '/inc/helpers.php';

// Theme setup (supports, menus, etc.)
require_once SEO_SPECIALIST_DIR . '/inc/theme-setup.php';

// Security enhancements
require_once SEO_SPECIALIST_DIR . '/inc/security.php';

// Enqueue scripts and styles
require_once SEO_SPECIALIST_DIR . '/inc/enqueue.php';

// Navigation menus
require_once SEO_SPECIALIST_DIR . '/inc/menus.php';

// Custom Post Types
require_once SEO_SPECIALIST_DIR . '/inc/custom-post-types.php';

// Custom Taxonomies
require_once SEO_SPECIALIST_DIR . '/inc/custom-taxonomies.php';

// Sidebar and Widgets
require_once SEO_SPECIALIST_DIR . '/inc/widgets.php';

// Form Handling & SMTP
require_once SEO_SPECIALIST_DIR . '/inc/form-handler.php';

// Native Block Patterns
require_once SEO_SPECIALIST_DIR . '/inc/block-patterns.php';

// Architecture & Dynamic Templates
require_once SEO_SPECIALIST_DIR . '/inc/architecture.php';

/**
 * Show all posts on the blog page (Home) and remove pagination limit.
 */
function seospecialist_show_all_posts_on_blog( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
        $query->set( 'posts_per_page', -1 );
    }
}
add_action( 'pre_get_posts', 'seospecialist_show_all_posts_on_blog' );
