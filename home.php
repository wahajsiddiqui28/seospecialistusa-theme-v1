<?php
/**
 * The template for displaying the blog index (posts)
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
        margin-bottom: 70px;
        gap: 30px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
    }

    .blog-title {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 0;
        letter-spacing: -3px;
        line-height: 0.9;
        color: var(--brand-blue);
    }

    .blog-search-container {
        max-width: 400px;
        width: 100%;
    }

    .blog-search-form {
        position: relative;
    }

    .blog-search-input {
        width: 100%;
        padding: 15px 25px 15px 55px;
        border-radius: 100px;
        border: 1px solid rgba(0, 0, 0, 0.08);
        background: white;
        font-size: 0.95rem;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    }

    .blog-search-input:focus {
        outline: none;
        border-color: var(--brand-red);
        box-shadow: 0 10px 30px rgba(191,10,48,0.08);
        transform: translateY(-2px);
    }

    .blog-search-icon {
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--brand-red);
        font-size: 1rem;
    }

    /* Featured Post Card */
    .featured-card {
        background: white;
        border-radius: 40px;
        overflow: hidden;
        margin-bottom: 80px;
        transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        text-decoration: none !important;
        display: flex;
        flex-direction: row;
        color: inherit;
        box-shadow: 0 30px 60px rgba(0,0,0,0.05);
        border: 1px solid rgba(0,0,0,0.02);
        min-height: 520px;
        position: relative;
    }

    .featured-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 40px 90px rgba(0,0,0,0.1);
    }

    .featured-image-side {
        flex: 1;
        position: relative;
        overflow: hidden;
        background: #f0f0f0;
    }

    .featured-image-side img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
        object-fit: cover !important;
        display: block !important;
        margin: 0 !important;
        transition: transform 1.2s ease;
    }

    .featured-card:hover .featured-image-side img {
        transform: scale(1.05);
    }

    .featured-content-side {
        flex: 1;
        padding: 60px 80px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: white;
        z-index: 2;
    }

    .blog-post-date {
        color: var(--brand-red);
        font-size: 0.8rem;
        font-weight: 800;
        margin-bottom: 15px;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .featured-title {
        font-size: 2.5rem;
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 25px;
        color: var(--brand-blue);
        letter-spacing: -2px;
    }

    .featured-excerpt {
        color: var(--blog-text-muted);
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 30px;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-author-meta {
        display: inline-flex;
        align-items: center;
        gap: 15px;
        background: #f8f8f8;
        padding: 8px 25px 8px 8px;
        border-radius: 100px;
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .featured-card:hover .card-author-meta {
        background: white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        transform: translateX(10px);
    }

    .author-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .author-avatar-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-info-text {
        display: flex;
        flex-direction: column;
    }

    .author-label {
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--brand-red);
        font-weight: 800;
        line-height: 1;
        margin-bottom: 4px;
    }

    .author-name-text {
        font-size: 1rem;
        font-weight: 800;
        color: var(--brand-blue);
        line-height: 1;
    }

    /* Grid Post Card */
    .blog-grid-card {
        background: white;
        border-radius: 30px;
        margin-bottom: 50px;
        text-decoration: none !important;
        display: block;
        color: inherit;
        transition: all 0.4s ease;
        padding: 15px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.02);
        border: 1px solid rgba(0,0,0,0.03);
        height: calc(100% - 30px);
    }

    .blog-grid-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0,0,0,0.08);
        border-color: rgba(191,10,48,0.1);
    }

    .grid-image-container {
        border-radius: 20px;
        overflow: hidden;
        margin-bottom: 25px;
        aspect-ratio: 16/10;
        background: #f8f8f8;
    }

    .grid-image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .blog-grid-card:hover .grid-image-container img {
        transform: scale(1.1);
    }

    .grid-content {
        padding: 5px 15px 15px;
    }

    .grid-title {
        font-size: 1.6rem;
        font-weight: 800;
        line-height: 1.3;
        margin-bottom: 15px;
        color: var(--blog-text-main);
        letter-spacing: -0.5px;
        transition: color 0.3s ease;
    }

    .blog-grid-card:hover .grid-title {
        color: var(--brand-red);
    }

    .grid-excerpt {
        color: var(--blog-text-muted);
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 25px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .grid-author-meta {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
        padding: 5px;
    }

    .grid-author-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        overflow: hidden;
        background: #f0f0f0;
        border: 2px solid #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .grid-author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .grid-author-info {
        display: flex;
        flex-direction: column;
    }

    .grid-author-label {
        font-size: 0.6rem;
        text-transform: uppercase;
        color: var(--brand-red);
        font-weight: 800;
        margin-bottom: 2px;
    }

    .grid-author-name {
        font-size: 0.9rem;
        font-weight: 800;
        color: var(--brand-blue);
        line-height: 1;
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

    @media (max-width: 991px) {
        .blog-title {
            font-size: 3.5rem;
        }
        .featured-card {
            flex-direction: column;
        }
        .featured-image-side,
        .featured-content-side {
            width: 100%;
        }
        .featured-image-side {
            min-height: 300px;
        }
        .featured-content-side {
            padding: 40px;
        }
        .featured-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 767px) {
        .blog-wrapper {
            padding-top: 50px;
        }
        .blog-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .blog-search-container {
            margin: 0 auto 50px;
        }
        .featured-image-container {
            min-height: 300px;
        }
        .featured-content-col {
            padding: 30px;
        }
        .featured-title {
            font-size: 1.8rem;
        }
    }
</style>

<div class="blog-wrapper">
    <div class="container-custom">
        
        <!-- Blog Header -->
        <header class="blog-header">
            <h1 class="blog-title">Blog</h1>
            <div class="blog-search-container">
                <form role="search" method="get" class="blog-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="blog-search-icon"><i class="fas fa-search"></i></span>
                    <input type="search" class="blog-search-input" placeholder="Search insights..." value="<?php echo get_search_query(); ?>" name="s">
                </form>
            </div>
        </header>

        <?php if ( have_posts() ) : ?>
            
            <?php 
            $count = 0;
            $row_opened = false;
            
            while ( have_posts() ) : the_post(); 
                $count++;
                
                // Featured Post (First one on Page 1)
                if ( $count === 1 && !is_paged() ) : ?>
                    
                    <a href="<?php the_permalink(); ?>" class="featured-card">
                        <div class="featured-image-side">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'full' ); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-blog.webp" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="featured-content-side">
                            <span class="blog-post-date"><?php echo get_the_date(); ?></span>
                            <h2 class="featured-title"><?php the_title(); ?></h2>
                            <div class="featured-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 35 ); ?>
                            </div>
                            <div class="card-author-meta">
                                <div class="author-avatar-img">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                                </div>
                                <div class="author-info-text">
                                    <span class="author-label">Written by</span>
                                    <span class="author-name-text"><?php the_author(); ?></span>
                                </div>
                            </div>
                        </div>
                    </a>

                <?php else : 
                    // Open row for grid items
                    if ( !$row_opened ) : 
                        echo '<div class="row">';
                        $row_opened = true;
                    endif;
                    ?>
                    
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="<?php the_permalink(); ?>" class="blog-grid-card">
                            <div class="grid-image-container">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-blog.webp" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="grid-content">
                                <span class="blog-post-date"><?php echo get_the_date(); ?></span>
                                <h3 class="grid-title"><?php the_title(); ?></h3>
                                <div class="grid-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                                </div>
                                <div class="grid-author-meta">
                                    <div class="grid-author-avatar">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
                                    </div>
                                    <div class="grid-author-info">
                                        <span class="grid-author-label">By</span>
                                        <span class="grid-author-name"><?php the_author(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endif; ?>
            <?php endwhile; ?>
            
            <?php if ( $row_opened ) echo '</div>'; // Close row only if it was opened ?>

        <?php else : ?>
            <div class="text-center py-5">
                <p class="lead text-muted">No insights found at this moment. Stay tuned!</p>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
