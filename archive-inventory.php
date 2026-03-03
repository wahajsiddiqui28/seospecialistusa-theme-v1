<?php
/**
 * The template for displaying Inventory archive page (Glossary)
 *
 * @package seospecialistusa
 */

get_header();

echo '<!-- DEBUG: archive-inventory.php loaded -->';

// Get all inventory posts ordered by title ASC
$args = array(
    'post_type'      => 'inventory',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
);
$query = new WP_Query( $args );
$inventory_items = array();

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        $title = get_the_title();
        $first_char = mb_substr( $title, 0, 1 );
        $first_letter = strtoupper( $first_char );

        // Group by letter, if not a letter put in #
        if ( ! preg_match( '/[A-Z]/', $first_letter ) ) {
            $first_letter = '#';
        }

        $inventory_items[$first_letter][] = array(
            'title'   => $title,
            'link'    => get_permalink(),
            'excerpt' => get_the_excerpt(),
        );
    }
    wp_reset_postdata();
}

$alphabet = range( 'A', 'Z' );
// Add # to alphabet if there are items starting with numbers/symbols
if ( isset( $inventory_items['#'] ) ) {
    array_unshift( $alphabet, '#' );
}
?>

<style>
    :root {
        --glossary-red: #BF0A30;
        --glossary-blue: #002868;
        --glossary-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .glossary-hero {
        background-color: #f8f9fa;
        padding: 80px 0 60px;
        text-align: center;
        border-bottom: 1px solid #eee;
    }

    .glossary-nav-wrapper {
        position: sticky;
        top: 80px; /* Adjust to stay below Astra's sticky header */
        background: white;
        z-index: 100;
        padding: 20px 0;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 50px;
    }

    .glossary-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
    }

    .glossary-nav a, 
    .glossary-nav span {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        text-decoration: none !important;
        color: var(--glossary-blue);
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .glossary-nav a:hover {
        background-color: var(--glossary-red);
        color: white;
        border-color: var(--glossary-red);
        transform: translateY(-3px);
    }

    .glossary-nav span.disabled {
        color: #ccc;
        background-color: #fcfcfc;
        border-color: #eee;
        cursor: not-allowed;
    }

    .letter-section {
        margin-bottom: 80px;
        scroll-margin-top: 160px; /* Enough space for sticky header + sticky alphabet */
    }

    .letter-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        border-bottom: 2px solid #eee;
        padding-bottom: 15px;
        margin-bottom: 40px;
    }

    .letter-title {
        font-size: 3rem;
        font-weight: 800;
        color: var(--glossary-blue);
        line-height: 1;
        margin: 0;
    }

    .back-to-top {
        font-size: 0.9rem;
        color: #888;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
    }

    .back-to-top:hover {
        color: var(--glossary-red);
    }

    .inventory-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
    }

    .inventory-card {
        background: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: var(--glossary-shadow);
        border: 1px solid rgba(0,0,0,0.03);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        text-decoration: none !important;
    }

    .inventory-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        border-color: var(--glossary-red);
    }

    .inventory-card h3 {
        font-size: 1.4rem;
        color: var(--glossary-blue);
        margin-bottom: 15px;
        font-weight: 700;
        transition: color 0.3s;
    }

    .inventory-card:hover h3 {
        color: var(--glossary-red);
    }

    .inventory-card .excerpt {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .read-more-link {
        margin-top: auto;
        font-weight: 700;
        color: var(--glossary-red);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    @media (max-width: 768px) {
        .inventory-grid {
            grid-template-columns: 1fr;
        }
        .letter-title {
            font-size: 2.5rem;
        }
        .glossary-nav a, .glossary-nav span {
            width: 35px;
            height: 35px;
            font-size: 0.9rem;
        }
    }
</style>

<div class="glossary-hero">
    <div class="container-custom">
        <h1 class="display-3 fw-bold text-brand-blue mb-3">Inventory Glossary</h1>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">Explore our comprehensive collection of inventory items. Use the navigation below to browse by letter.</p>
    </div>
</div>

<div class="glossary-nav-wrapper">
    <div class="container-custom">
        <nav class="glossary-nav" aria-label="Alphabetical navigation">
            <?php foreach ( $alphabet as $letter ) : ?>
                <?php if ( isset( $inventory_items[$letter] ) ) : ?>
                    <a href="#letter-<?php echo $letter; ?>" title="Jump to <?php echo $letter; ?>"><?php echo $letter; ?></a>
                <?php else : ?>
                    <span class="disabled" title="No items for <?php echo $letter; ?>"><?php echo $letter; ?></span>
                <?php endif; ?>
            <?php endforeach; ?>
        </nav>
    </div>
</div>

<div class="container-custom section-padding">
    <div class="glossary-content">
        <?php if ( ! empty( $inventory_items ) ) : ?>
            <?php foreach ( $inventory_items as $letter => $items ) : ?>
                <section id="letter-<?php echo $letter; ?>" class="letter-section">
                    <div class="letter-header">
                        <h2 class="letter-title"><?php echo $letter; ?></h2>
                        <a href="#" class="back-to-top">Back to top &uarr;</a>
                    </div>
                    <div class="inventory-grid">
                        <?php foreach ( $items as $item ) : ?>
                            <a href="<?php echo esc_url( $item['link'] ); ?>" class="inventory-card">
                                <h3><?php echo esc_html( $item['title'] ); ?></h3>
                                <?php if ( ! empty( $item['excerpt'] ) ) : ?>
                                    <div class="excerpt">
                                        <?php echo wp_trim_words( $item['excerpt'], 20 ); ?>
                                    </div>
                                <?php endif; ?>
                                <span class="read-more-link">View Details &rarr;</span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="text-center py-5">
                <h2 class="h3">No inventory items found.</h2>
                <p>Please add some inventory posts in the dashboard.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
get_footer();
