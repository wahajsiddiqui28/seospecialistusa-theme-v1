<?php
/**
 * The sidebar containing the main widget area
 *
 * @package seospecialistusa
 */
?>

<aside id="secondary" class="widget-area">
    <style>
        .sidebar-widget {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .widget-title {
            font-size: 1.25rem;
            color: var(--brand-blue);
            font-weight: 700;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--brand-red);
            display: inline-block;
        }

        /* Search Widget */
        .search-form {
            position: relative;
        }

        .search-form input[type="search"] {
            width: 100%;
            padding: 12px 50px 12px 20px;
            border: 1px solid #eee;
            border-radius: 50px;
            background: #f9f9f9;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-form input[type="search"]:focus {
            border-color: var(--brand-red);
        }

        .search-submit {
            position: absolute;
            right: 5px;
            top: 5px;
            background: var(--brand-red);
            color: white;
            border: none;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-submit:hover {
            background: var(--brand-blue);
        }

        /* Category Widget */
        .widget_categories ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .widget_categories li {
            position: relative;
            padding: 10px 0;
            border-bottom: 1px solid #f5f5f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .widget_categories li:last-child {
            border-bottom: none;
        }

        .widget_categories a {
            color: #555;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s, padding-left 0.3s;
        }

        .widget_categories a:hover {
            color: var(--brand-red);
            padding-left: 5px;
        }

        .cat-count {
            background: #f0f0f0;
            color: var(--brand-blue);
            font-size: 0.75rem;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 4px;
        }

        /* Recent Posts Widget */
        .recent-post-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
        }

        .recent-post-thumb {
            width: 80px;
            height: 80px;
            flex-shrink: 0;
            border-radius: 10px;
            overflow: hidden;
        }

        .recent-post-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .recent-post-info h4 {
            font-size: 0.95rem;
            line-height: 1.4;
            margin-bottom: 5px;
        }

        .recent-post-info h4 a {
            color: var(--brand-blue);
            text-decoration: none;
            transition: color 0.3s;
        }

        .recent-post-info h4 a:hover {
            color: var(--brand-red);
        }

        .recent-post-date {
            font-size: 0.8rem;
            color: #888;
        }

        /* CTA Widget */
        .sidebar-cta {
            background: var(--brand-blue);
            color: white;
            text-align: center;
            padding: 40px 30px;
            border-radius: 15px;
            background-image: linear-gradient(135deg, var(--brand-blue) 0%, #001a4d 100%);
            position: relative;
            overflow: hidden;
        }

        .sidebar-cta h3 {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .sidebar-cta p {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-bottom: 25px;
        }

        .sidebar-cta .btn-premium {
            font-size: 0.85rem;
            width: 100%;
        }
    </style>

    <!-- Search widget -->
    <div class="sidebar-widget widget_search">
        <h3 class="widget-title">Search</h3>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Type keywords..." value="" name="s" />
            </label>
            <button type="submit" class="search-submit">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
        </form>
    </div>

    <!-- Categories Widget -->
    <div class="sidebar-widget widget_categories">
        <h3 class="widget-title">Categories</h3>
        <ul>
            <?php
            $categories = get_categories();
            foreach ( $categories as $category ) : ?>
                <li>
                    <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
                        <?php echo esc_html( $category->name ); ?>
                    </a>
                    <span class="cat-count"><?php echo esc_html( $category->count ); ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Recent Posts Widget -->
    <div class="sidebar-widget widget_recent_entries">
        <h3 class="widget-title">Recent Posts</h3>
        <?php
        $recent_posts = new WP_Query( array(
            'posts_per_page'      => 4,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
        ) );

        if ( $recent_posts->have_posts() ) :
            while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
                <div class="recent-post-item">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="recent-post-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="recent-post-info">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <span class="recent-post-date"><?php echo get_the_date(); ?></span>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <!-- CTA Widget -->
    <div class="sidebar-cta">
        <h3>Need SEO Help?</h3>
        <p>Boost your website's visibility with our expert SEO strategies and proven results.</p>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-premium btn-primary-custom">Get a Free Audit</a>
    </div>

</aside>
