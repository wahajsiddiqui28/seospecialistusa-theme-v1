<?php
/**
 * Theme Architecture Logic
 * 
 * Handles dynamic section loading and template blueprints.
 *
 * @package seospecialistusa
 */

/**
 * Get the section blueprint for a specific page slug.
 * 
 * @param string $slug The simplified page slug (without -seo).
 * @return array|null List of section filenames without .php extension.
 */
function seo_specialist_get_page_blueprint( $slug ) {
    $blueprints = array(
        // Location Pages (Simplified Slugs)
        'arkansas'     => array( 'hero', 'why-arkansas', 'services', 'why-choose', 'industries', 'process', 'timeline', 'contact-cta', 'faq' ),
        'delaware'     => array( 'hero', 'famous', 'why-partner', 'services', 'trust', 'process', 'faq', 'footer-cta' ),
        'utah'         => array( 'hero', 'why-utah', 'services', 'why-choose', 'industries', 'process', 'timeline', 'contact-cta', 'faq' ),
        'montana'      => array( 'hero', 'why-choose', 'solutions', 'industries', 'process', 'benefits', 'cta-audit', 'faq' ),
        'new-mexico'   => array( 'hero', 'why-nm', 'services', 'why-choose', 'industries', 'comparison', 'process', 'pueblo', 'cta-audit', 'faq' ),
        'rhode-island' => array( 'hero', 'why-choose', 'industries', 'benefits', 'cta-audit', 'faq' ),
        'vermont'      => array( 'hero', 'why-vermont', 'services-grid', 'market-insights', 'local-insights', 'workflow', 'why-choose', 'faq', 'footer-cta' ),
        'wyoming'      => array( 'hero', 'why-choose', 'landscapes', 'services', 'process', 'faq', 'footer-cta' ),
        'iowa'         => array( 'hero', 'why-seo-matters', 'services', 'why-choose', 'industries', 'process', 'cta', 'faq' ),
        'kansas'       => array( 'hero', 'why-kansas', 'services', 'why-choose', 'industries', 'process', 'timeline', 'contact-cta', 'faq' ),
        'mississippi'  => array( 'hero', 'why-mississippi', 'services', 'why-choose', 'industries', 'process', 'timeline', 'expectations', 'contact-cta', 'faq' ),
        
        // Service Pages (Simplified Slugs)
        'on-page'      => array( 'hero', 'why-matters', 'results', 'expert-services', 'process', 'why-choose', 'packages', 'faq', 'footer-cta' ),
        'off-page'     => array( 'hero', 'why-essential', 'expert-services', 'process', 'why-choose', 'faq' ),
        'technical'    => array( 'hero', 'why-essential', 'services', 'process', 'why-choose', 'audit-cta', 'faq' ),
        'local'        => array( 'hero', 'why-matters', 'more-than-rankings', 'services-grid', 'who-benefits', 'why-choose', 'local-cta' ),
        'dental'       => array( 'hero', 'why-need', 'process-steps', 'partnership', 'why-choose', 'results', 'case-studies-cta' ),
        'ecommerce'    => array( 'hero', 'why-matters', 'benefits', 'services-grid', 'platforms', 'process-timeline', 'industries', 'why-choose', 'ecommerce-cta' ),
        'lawyer'       => array( 'hero', 'why-matters', 'services-slider', 'why-choose', 'process', 'practice-areas', 'results-expectations', 'lawyer-cta' ),
        'restaurant'   => array( 'hero', 'why-must', 'services-included', 'types-we-work-with', 'results-expectations', 'why-choose', 'how-works', 'best-company-cta' ),
        'seo-audit'    => array( 'hero', 'what-is', 'audit-report', 'why-choose', 'faq' ),
        'jewelry'      => array( 'hero', 'why-need', 'services', 'trends', 'why-choose', 'process', 'cta', 'faq' ),
        'ai-agency'    => array( 'hero', 'services', 'process', 'why-choose', 'cta-audit', 'faq' ),
        'fashion-agency' => array( 'hero', 'problem', 'services', 'technical-deep', 'keyword-research', 'content-strategy', 'link-building', 'cro', 'why-choose', 'process', 'faq' ),
        'makeup-company' => array( 'hero', 'why-need', 'services', 'fail-reasons', 'why-choose', 'process', 'investment', 'who-we-work-with', 'cta', 'faq' ),
        'seo-content-creation' => array( 'hero', 'value-prop', 'why-needs', 'process', 'industry-customization', 'cta', 'faq' ),
    );

    return isset( $blueprints[$slug] ) ? $blueprints[$slug] : null;
}

/**
 * Renders sections for a page based on its category and blueprint.
 * 
 * @param string $category 'locations' or 'services'
 * @param string $slug     The page slug (can include -seo)
 */
function seo_specialist_render_sections( $category, $slug ) {
    // Normalize slug (e.g., arkansas-seo -> arkansas)
    $slug = str_replace( '-seo', '', $slug );

    $blueprint = seo_specialist_get_page_blueprint( $slug );
    
    if ( ! $blueprint ) {
        return;
    }

    $folder = $slug;

    foreach ( $blueprint as $section ) {
        get_template_part( 'template-parts/sections/' . $category . '/' . $folder . '/' . $section );
    }
}
