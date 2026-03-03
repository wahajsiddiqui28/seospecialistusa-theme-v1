<?php
/**
 * The template for displaying single Inventory items (Forex style)
 *
 * @package seospecialistusa
 */

get_header();

// Get alphabet and grouping for the footer navigation (reusing archive logic)
$all_inventory = new WP_Query( array(
    'post_type'      => 'inventory',
    'posts_per_page' => -1,
    'fields'         => 'ids',
) );
$existing_letters = array();
if ( $all_inventory->have_posts() ) {
    foreach ( $all_inventory->posts as $post_id ) {
        $first_char = mb_substr( get_the_title($post_id), 0, 1 );
        $existing_letters[] = strtoupper( $first_char );
    }
}
$existing_letters = array_unique($existing_letters);
$alphabet = range( 'A', 'Z' );

// Popular terms (latest 6 inventory items)
$popular_terms = new WP_Query( array(
    'post_type'      => 'inventory',
    'posts_per_page' => 6,
    'post__not_in'   => array( get_the_ID() ),
) );
?>

<style>
    :root {
        --forex-dark: #002868;
        --forex-red: #BF0A30;
        --forex-bg: #ffffff;
    }

    /* Hero Section */
    .inventory-hero {
        background-color: var(--forex-dark);
        padding: 60px 0 80px;
        color: white;
    }

    .inventory-breadcrumbs {
        font-size: 0.9rem;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 8px;
        opacity: 0.8;
    }

    .inventory-breadcrumbs a {
        color: white;
        text-decoration: none;
        transition: opacity 0.3s;
    }

    .inventory-breadcrumbs a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .inventory-hero h1 {
        font-size: 3.5rem;
        font-weight: 400;
        color: white;
        margin: 0;
    }

    /* Content Area */
    .inventory-main-content {
        padding: 80px 0;
    }

    .item-title-section h2 {
        font-size: 2.5rem;
        color: var(--forex-dark);
        margin-bottom: 30px;
        font-weight: 600;
    }

    .item-description {
        font-size: 1.15rem;
        line-height: 1.8;
        color: #333;
    }

    .item-description h2, 
    .item-description h3 {
        margin-top: 50px;
        margin-bottom: 25px;
        color: var(--forex-dark);
    }

    /* Glossary Navigation at bottom */
    .glossary-search-section {
        border-top: 1px solid #eee;
        padding-top: 100px;
        margin-top: 50px;
    }

    .glossary-search-title {
        font-size: 2.2rem;
        color: var(--forex-dark);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .glossary-search-intro {
        margin-bottom: 40px;
        color: #666;
    }

    .glossary-grid-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .glossary-grid-nav a, 
    .glossary-grid-nav span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 40px;
        border: 1px solid var(--forex-dark);
        text-decoration: none !important;
        color: var(--forex-dark);
        font-weight: 500;
        transition: all 0.2s;
        border-radius: 4px;
    }

    .glossary-grid-nav a:hover {
        background-color: var(--forex-dark);
        color: white;
    }

    .glossary-grid-nav span.disabled {
        opacity: 0.3;
        border-color: #ccc;
        color: #ccc;
        cursor: not-allowed;
    }

    /* Popular Terms */
    .popular-terms-title {
        font-size: 1.5rem;
        color: var(--forex-dark);
        margin-bottom: 25px;
        font-weight: 600;
    }

    .popular-tags {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    @media (max-width: 991px) {
        .popular-tags {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .popular-tag-btn {
        display: block;
        padding: 12px 15px;
        border: 1px solid var(--forex-dark);
        text-align: center;
        text-decoration: none !important;
        color: var(--forex-dark);
        font-weight: 500;
        font-size: 0.85rem;
        text-transform: uppercase;
        border-radius: 4px;
        transition: all 0.2s;
    }

    .popular-tag-btn:hover {
        background-color: var(--forex-dark);
        color: white;
    }

    @media (max-width: 768px) {
        .inventory-hero h1 {
            font-size: 2.5rem;
        }
        .glossary-grid-nav a, .glossary-grid-nav span {
            width: 40px;
            height: 35px;
            font-size: 0.9rem;
        }
    }
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php while ( have_posts() ) : the_post(); ?>
        
        <!-- Dark Hero Section -->
        <div class="inventory-hero">
            <div class="container-custom">
                <div class="inventory-breadcrumbs">
                    <a href="<?php echo esc_url( home_url('/') ); ?>">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="margin-top: -3px;"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    </a>
                    <span>/</span>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'inventory' ) ); ?>">Glossary</a>
                    <span>/</span>
                    <span style="opacity: 0.6;"><?php the_title(); ?></span>
                </div>
                <h1><?php the_title(); ?> definition</h1>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="inventory-main-content">
            <div class="container-custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item-title-section">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="item-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <!-- Footer Navigation Style like Forex -->
                <div class="glossary-search-section">
                    <div class="row">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <h2 class="glossary-search-title">Search the Glossary</h2>
                            <p class="glossary-search-intro">Look up the meaning of hundreds of trading terms in our comprehensive glossary.</p>
                            
                            <div class="glossary-grid-nav">
                                <?php foreach ( $alphabet as $letter ) : ?>
                                    <?php if ( in_array( $letter, $existing_letters ) ) : ?>
                                        <a href="<?php echo esc_url( get_post_type_archive_link( 'inventory' ) ); ?>#letter-<?php echo $letter; ?>"><?php echo $letter; ?></a>
                                    <?php else : ?>
                                        <span class="disabled"><?php echo $letter; ?></span>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <h2 class="popular-terms-title">Popular terms</h2>
                            <div class="popular-tags">
                                <?php if ( $popular_terms->have_posts() ) : ?>
                                    <?php while ( $popular_terms->have_posts() ) : $popular_terms->the_post(); ?>
                                        <a href="<?php the_permalink(); ?>" class="popular-tag-btn"><?php the_title(); ?></a>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
</article>

<?php
get_footer();
