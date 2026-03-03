<?php
/**
 * The template for displaying archive pages
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
        padding-top: 160px; /* To clear sticky header */
        padding-bottom: 100px;
        color: var(--blog-text-main);
        min-height: 100vh;
    }

    .blog-header {
        margin-bottom: 60px;
        text-align: center;
    }1

    .blog-title {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 10px;
        letter-spacing: -1.5px;
    }

    .archive-description {
        font-size: 1.1rem;
        color: var(--blog-text-muted);
        max-width: 600px;
        margin: 0 auto;
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

    @media (max-width: 767px) {
        .blog-title {
            font-size: 2.5rem;
        }
    }
</style>

<div class="blog-wrapper">
    <div class="container-custom">
        
        <!-- Archive Header -->
        <div class="blog-header">
            <?php
            the_archive_title( '<h1 class="blog-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </div>

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
            <div class="text-center py-5">
                <p class="lead text-muted">No posts found for this archive. Stay tuned!</p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
