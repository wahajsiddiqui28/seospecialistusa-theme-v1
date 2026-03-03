<?php
/**
 * Block Patterns Registration
 * 
 * Defines custom block patterns for Case Studies to maintain design consistency.
 *
 * @package seospecialistusa
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Block Pattern Category and Patterns.
 */
function seospecialist_register_block_patterns() {
    
    // Register custom category
    register_block_pattern_category(
        'seo-specialist-case-studies',
        array( 'label' => __( 'SEO Specialist - Case Studies', 'seospecialistusa' ) )
    );

    // 1. Case Study Hero Pattern
    register_block_pattern(
        'seospecialist/case-study-hero',
        array(
            'title'       => __( 'Case Study Hero', 'seospecialistusa' ),
            'description' => _x( 'Curved banner with large heading for case studies.', 'Block pattern description', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"tagName":"section","className":"case-study-hero","layout":{"type":"constrained"}} -->
                            <section class="wp-block-group case-study-hero"><!-- wp:heading {"level":1,"textAlign":"center","placeholder":"Case Study Title..."} -->
                            <h1 class="wp-block-heading has-text-align-center">Boosted a Las Vegas Flower Shop’s Online Sales and Visibility</h1>
                            <!-- /wp:heading --></section>
                            <!-- /wp:group -->',
        )
    );

    // 2. Feature Section (Text Left, Image Right)
    register_block_pattern(
        'seospecialist/cs-feature-text-left',
        array(
            'title'       => __( 'CS: Text Left + Image Right', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"tagName":"section","className":"cs-feature-section","layout":{"type":"constrained"}} -->
                            <section class="wp-block-group cs-feature-section"><!-- wp:columns {"verticalAlignment":"center","className":"container-custom"} -->
                            <div class="wp-block-columns are-vertically-aligned-center container-custom"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                            <div class="wp-block-column item-center"><!-- wp:group {"className":"cs-feature-content"} -->
                            <div class="wp-block-group cs-feature-content"><!-- wp:heading -->
                            <h2 class="wp-block-heading">The Challenge</h2>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>This flower shop in Las Vegas wanted to grow its online sales but they struggle to reach customers locally. Their website had technical issues, thin content, and their Google Business Profile was not optimized.</p>
                            <!-- /wp:paragraph --><!-- wp:list {"className":"cs-tick-list"} -->
                            <ul class="wp-block-list cs-tick-list"><!-- wp:list-item -->
                            <li>Low search engine ranking for local keywords</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>Website structure issues preventing indexing</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>Inconsistent business citations across the web</li>
                            <!-- /wp:list-item --></ul>
                            <!-- /wp:list --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                            <div class="wp-block-column are-vertically-aligned-center"><!-- wp:group {"className":"cs-feature-img-wrapper"} -->
                            <div class="wp-block-group cs-feature-img-wrapper"><!-- wp:image {"sizeSlug":"large"} -->
                            <figure class="wp-block-image size-large"><img src="' . SEO_SPECIALIST_URI . '/assets/images/placeholder.jpg" alt=""/></figure>
                            <!-- /wp:image --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:column --></div>
                            <!-- /wp:columns --></section>
                            <!-- /wp:group -->',
        )
    );

    // 3. Feature Section (Image Left, Text Right)
    register_block_pattern(
        'seospecialist/cs-feature-image-left',
        array(
            'title'       => __( 'CS: Image Left + Text Right', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"tagName":"section","className":"cs-feature-section","layout":{"type":"constrained"}} -->
                            <section class="wp-block-group cs-feature-section"><!-- wp:columns {"verticalAlignment":"center","className":"container-custom"} -->
                            <div class="wp-block-columns are-vertically-aligned-center container-custom"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                            <div class="wp-block-column are-vertically-aligned-center"><!-- wp:group {"className":"cs-feature-img-wrapper"} -->
                            <div class="wp-block-group cs-feature-img-wrapper"><!-- wp:image {"sizeSlug":"large"} -->
                            <figure class="wp-block-image size-large"><img src="' . SEO_SPECIALIST_URI . '/assets/images/placeholder.jpg" alt=""/></figure>
                            <!-- /wp:image --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:column --><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
                            <div class="wp-block-column are-vertically-aligned-center"><!-- wp:group {"className":"cs-feature-content"} -->
                            <div class="wp-block-group cs-feature-content"><!-- wp:heading -->
                            <h2 class="wp-block-heading">My Solution (SEO Strategy)</h2>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>We implemented a multi-phase approach focusing on technical fixes and high-intent local content strategy.</p>
                            <!-- /wp:paragraph --><!-- wp:list {"className":"cs-tick-list"} -->
                            <ul class="wp-block-list cs-tick-list"><!-- wp:list-item -->
                            <li>Full technical SEO audit and correction</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>Google Business Profile optimization (GMB)</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>High-quality local link building campaigns</li>
                            <!-- /wp:list-item --></ul>
                            <!-- /wp:list --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:column --></div>
                            <!-- /wp:columns --></section>
                            <!-- /wp:group -->',
        )
    );

    // 4. Results Section Pattern
    register_block_pattern(
        'seospecialist/cs-results-card',
        array(
            'title'       => __( 'CS: Results Card', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"className":"py-5"} -->
                            <section class="wp-block-group py-5"><!-- wp:group {"className":"container-custom"} -->
                            <div class="wp-block-group container-custom"><!-- wp:group {"className":"cs-result-card"} -->
                            <div class="wp-block-group cs-result-card"><!-- wp:heading -->
                            <h2 class="wp-block-heading">Measurable Results (Within 6 Months)</h2>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Our strategy delivered significant growth in organic traffic and lead generation.</p>
                            <!-- /wp:paragraph --><!-- wp:group {"className":"cs-result-grid"} -->
                            <div class="wp-block-group cs-result-grid"><!-- wp:group {"className":"cs-result-item"} -->
                            <div class="wp-block-group cs-result-item"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">+450%</h4>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Traffic Growth</p>
                            <!-- /wp:paragraph --></div>
                            <!-- /wp:group --><!-- wp:group {"className":"cs-result-item"} -->
                            <div class="wp-block-group cs-result-item"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">Top 3</h4>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Keyword Rankings</p>
                            <!-- /wp:paragraph --></div>
                            <!-- /wp:group --><!-- wp:group {"className":"cs-result-item"} -->
                            <div class="wp-block-group cs-result-item"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading">+120</h4>
                            <!-- /wp:heading --><!-- wp:paragraph -->
                            <p>Monthly Leads</p>
                            <!-- /wp:paragraph --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:group --></div>
                            <!-- /wp:group --></section>
                            <!-- /wp:group -->',
        )
    );

    // 5. Standalone Client Info
    register_block_pattern(
        'seospecialist/cs-standalone-client',
        array(
            'title'       => __( 'CS: Client Brief', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"className":"cs-client-brief container-custom"} -->
                            <div class="wp-block-group cs-client-brief container-custom"><!-- wp:paragraph {"className":"cs-info-item"} -->
                            <p class="cs-info-item"><span class="cs-info-label">Client:</span>Flower Shop, Las Vegas</p>
                            <!-- /wp:paragraph --><!-- wp:paragraph {"className":"cs-info-item"} -->
                            <p class="cs-info-item"><span class="cs-info-label">Goal:</span>Increase online orders and walk-in visits through organic SEO and Local SEO strategies.</p>
                            <!-- /wp:paragraph --></div>
                            <!-- /wp:group -->',
        )
    );

    // 6. Standalone Branded Heading
    register_block_pattern(
        'seospecialist/cs-standalone-heading',
        array(
            'title'       => __( 'CS: Branded Heading', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"className":"cs-standalone-heading container-custom"} -->
                            <div class="wp-block-group cs-standalone-heading container-custom"><!-- wp:heading {"level":2,"className":"cs-branded-title"} -->
                            <h2 class="wp-block-heading cs-branded-title">The Challenge</h2>
                            <!-- /wp:heading --></div>
                            <!-- /wp:group -->',
        )
    );

    // 7. Standalone Premium List
    register_block_pattern(
        'seospecialist/cs-standalone-list',
        array(
            'title'       => __( 'CS: Premium Tick List', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"className":"container-custom"} -->
                            <div class="wp-block-group container-custom"><!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">They needed:</h3>
                            <!-- /wp:heading --><!-- wp:list {"className":"cs-tick-list"} -->
                            <ul class="wp-block-list cs-tick-list"><!-- wp:list-item -->
                            <li>More local customers calling or visiting</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>Better rankings on Google for specific services</li>
                            <!-- /wp:list-item --><!-- wp:list-item -->
                            <li>Increased visibility for flower deliveries to hotels, hospitals, and events</li>
                            <!-- /wp:list-item --></ul>
                            <!-- /wp:list --></div>
                            <!-- /wp:group -->',
        )
    );

    // 8. Standalone Premium Image
    register_block_pattern(
        'seospecialist/cs-standalone-image',
        array(
            'title'       => __( 'CS: Premium Image Box', 'seospecialistusa' ),
            'categories'  => array( 'seo-specialist-case-studies' ),
            'content'     => '<!-- wp:group {"className":"cs-premium-img container-custom"} -->
                            <div class="wp-block-group cs-premium-img container-custom"><!-- wp:image {"sizeSlug":"full"} -->
                            <figure class="wp-block-image size-full"><img src="' . SEO_SPECIALIST_URI . '/assets/images/placeholder.jpg" alt=""/></figure>
                            <!-- /wp:image --></div>
                            <!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'seospecialist_register_block_patterns' );
