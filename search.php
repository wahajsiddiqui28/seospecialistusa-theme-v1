<?php
/**
 * The template for displaying search results pages
 *
 * @package seospecialistusa
 */

get_header(); ?>

<style>
    :root {
        --blog-bg: #f5f5f7;
        --blog-text-main: #1d1d1f;
        --blog-text-muted: #86868b;
        --blog-card-shadow: 0 10px 30px rgba(0,0,0,0.03);
    }

    .blog-wrapper {
        background-color: var(--blog-bg);
        padding-top: 110px;
        padding-bottom: 150px;
        color: var(--blog-text-main);
        min-height: calc(100vh - 400px);
    }

    .blog-header {
        margin-bottom: 60px;
        text-align: center;
    }

    .blog-title {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 20px;
        letter-spacing: -2px;
        line-height: 1;
        color: var(--brand-blue);
    }

    .search-query {
        color: var(--brand-red);
    }

    /* Grid Post Card */
    .blog-grid-card {
        background: transparent;
        border-radius: 0;
        margin-bottom: 60px;
        text-decoration: none !important;
        display: block;
        color: inherit;
        transition: all 0.3s ease;
    }

    .grid-image-container {
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 25px;
        aspect-ratio: 4/3;
        box-shadow: var(--blog-card-shadow);
        background: white;
    }

    .grid-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog-grid-card:hover .grid-image-container img {
        transform: scale(1.08);
    }

    .blog-post-date {
        color: var(--blog-text-muted);
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 15px;
        display: block;
    }

    .grid-title {
        font-size: 1.5rem;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 15px;
        color: var(--blog-text-main);
    }

    .grid-excerpt {
        color: var(--blog-text-muted);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 0;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 50px;
    }

    .pagination .page-numbers {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border-radius: 12px;
        text-decoration: none !important;
        color: var(--blog-text-main);
        font-weight: 700;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.03);
    }

    .pagination .page-numbers.current,
    .pagination .page-numbers:hover {
        background: var(--brand-red);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(191,10,48,0.2);
    }

    .search-no-results {
        /* max-width: 750px;
        margin: 40px auto;
        padding: 80px 40px; */
        background: white;
        border-radius: 40px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.02);
        padding: 25px 0
    }

    .no-results-icon {
        font-size: 4rem;
        color: rgba(191,10,48,0.1);
        margin-bottom: 30px;
    }

    @media (max-width: 767px) {
        .blog-title {
            font-size: 2rem;
        }
    }
</style>

<div class="blog-wrapper">
    <div class="container-custom">
        
        <!-- Search Header -->
        <header class="blog-header">
            <h1 class="blog-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'seospecialistusa' ), '<span class="search-query">' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            
            <div class="row">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?php the_permalink(); ?>" class="blog-grid-card">
                            <div class="grid-image-container">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-blog.webp" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </div>
                            <span class="blog-post-date"><?php echo get_the_date(); ?></span>
                            <h3 class="grid-title"><?php the_title(); ?></h3>
                            <div class="grid-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                echo paginate_links( array(
                    'prev_text' => '<i class="fas fa-arrow-left"></i>',
                    'next_text' => '<i class="fas fa-arrow-right"></i>',
                    'type'      => 'plain',
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="search-no-results text-center">
                <div class="no-results-icon">
                    <i class="fas fa-search-minus"></i>
                </div>
                <h2 class="display-6 fw-bold mb-3" style="color: var(--brand-blue);">Zero Matches Found</h2>
                <p class="text-muted mb-5 fs-5">We couldn't find any results for "<?php echo get_search_query(); ?>". <br>Check your spelling or try more general keywords.</p>
                
                <div class="blog-search-container mx-auto" style="max-width: 500px;">
                    <form role="search" method="get" class="blog-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="position-relative">
                            <span class="position-absolute start-0 top-50 translate-middle-y ps-4 text-brand-red">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="search" class="form-control rounded-pill py-3 ps-5 border-0 shadow-sm" placeholder="Try another search..." value="" name="s" style="background: #f8f9fa; font-size: 1.1rem;">
                        </div>
                    </form>
                </div>
                
                <div class="mt-5">
                    <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn-premium btn-primary-custom">
                        Back to All Blogs
                    </a>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
