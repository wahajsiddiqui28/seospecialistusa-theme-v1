<?php
/**
 * The template for displaying all single posts
 *
 * @package seospecialistusa
 */

get_header(); ?>

<?php
// Calculate Reading Time
$content = get_post_field( 'post_content', get_the_ID() );
$word_count = str_word_count( strip_tags( $content ) );
$reading_time = ceil( $word_count / 200 ); // Average 200 words per minute
?>

<style>
    :root {
        --post-bg: #f5f5f7;
        --post-text-main: #1d1d1f;
        --post-text-muted: #86868b;
        --post-accent: var(--brand-red);
        --post-blue: var(--brand-blue);
    }

    .single-post-wrapper {
        background-color: var(--post-bg);
        padding-top: 80px;
        padding-bottom: 120px;
        color: var(--post-text-main);
    }

    /* Reading Progress Bar */
    #reading-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 0%;
        height: 4px;
        background: linear-gradient(to right, var(--brand-red), var(--brand-blue));
        z-index: 9999;
        transition: width 0.1s ease;
    }

    .post-header {
        margin-bottom: 60px;
        text-align: center;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .post-breadcrumbs {
        margin-bottom: 30px;
        font-size: 0.85rem;
        font-weight: 800;
        color: var(--post-accent);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .post-breadcrumbs a {
        color: var(--post-text-muted);
        text-decoration: none;
        transition: all 0.3s;
    }

    .post-breadcrumbs a:hover {
        color: var(--post-accent);
    }

    .single-post-title {

    }

    .post-meta-top {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--post-text-muted);
        flex-wrap: wrap;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .meta-author-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        flex-shrink: 0;
    }

    .meta-author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .meta-item i {
        color: var(--post-accent);
        font-size: 0.9rem;
    }

    .post-featured-image {
        margin-bottom: 80px;
        border-radius: 40px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 30px 100px rgba(0,0,0,0.1);
    }

    .post-featured-image::after {
        content: '';
        position: absolute;
        inset: 0;
        box-shadow: inset 0 0 100px rgba(0,0,0,0.2);
        pointer-events: none;
    }

    .post-featured-image img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 1s ease;
    }

    /* Main Grid Layout */
    .article-layout {
        display: grid;
        grid-template-columns: 320px 1fr;
        gap: 50px;
        align-items: start;
        position: relative;
    }

    @media (max-width: 1200px) {
        .article-layout {
            grid-template-columns: 1fr;
        }
    }

    .toc-sidebar {
        height: 100%;
    }

    /* Table of Contents */
    .toc-sticky-container {
        position: sticky;
        top: 60px;
        background: white;
        padding: 30px;
        border-radius: 25px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.04);
        border: 1px solid rgba(0,0,0,0.03);
        max-height: calc(100vh - 120px);
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: rgba(0,0,0,0.1) transparent;
    }

    /* Minimalist Scrollbar for TOC */
    .toc-sticky-container::-webkit-scrollbar {
        width: 4px;
    }

    .toc-sticky-container::-webkit-scrollbar-track {
        background: transparent;
    }

    .toc-sticky-container::-webkit-scrollbar-thumb {
        background: rgba(0,0,0,0.1);
        border-radius: 10px;
    }

    .toc-sticky-container::-webkit-scrollbar-thumb:hover {
        background: var(--brand-red);
    }

    .toc-title {
        font-size: 1.1rem;
        font-weight: 900;
        margin-bottom: 20px;
        color: var(--post-blue);
        display: flex;
        align-items: center;
        gap: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 2px solid var(--post-bg);
        padding-bottom: 15px;
    }

    .toc-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .toc-list li {
        margin-bottom: 7px;
    }

    .toc-list a {
        color: var(--post-text-muted);
        text-decoration: none !important;
    font-size: 14px;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: block;
        line-height: 1.4;
    padding: 1px 0;
    }

    .toc-list a:hover, .toc-list a.active {
        color: var(--post-accent);
        transform: translateX(8px);
    }

    /* Sidebar Widgets */
    .sidebar-widget {
        margin-top: 30px;
        background: var(--post-blue);
        padding: 30px;
        border-radius: 25px;
        color: white;
    }

    .widget-title {
        font-size: 1.2rem;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .newsletter-form input {
        width: 100%;
        padding: 12px 20px;
        border-radius: 10px;
        border: none;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }

    .newsletter-form .btn-submit {
        width: 100%;
        background: var(--brand-red);
        color: white;
        border: none;
        padding: 12px;
        border-radius: 10px;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 0.8rem;
        transition: all 0.3s;
    }

    .newsletter-form .btn-submit:hover {
        background: white;
        color: var(--brand-red);
    }

    /* Content Styling */
    .post-content-container {
        background: white;
    padding: 20px 24px;
        border-radius: 40px;
        box-shadow: 0 10px 50px rgba(0,0,0,0.02);
    }


    .entry-content {
        color: #2c2c2e;
        font-size: 1.15rem; /* fs-6 equivalent with better scale */
        line-height: 1.8;
    }

    .entry-content h2 {
font-size: 2rem;
    font-weight: 700;
    color: var(--brand-blue);
    }

    .entry-content p {
margin-bottom: 0.8em;
    font-size: 16px;
    }

    .entry-content blockquote {
        border-left: 8px solid var(--post-accent);
        padding: 40px;
        background: #fdf5f5;
        font-style: italic;
        margin: 50px 0;
        border-radius: 0 30px 30px 0;
        color: var(--post-blue);
        font-size: 1.4rem;
        font-weight: 700;
    }

    /* Social Share Sticky */
    .social-share-floating {
        position: fixed;
        left: 40px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 100;
    }

    @media (max-width: 1400px) {
        .social-share-floating {
            position: static;
            flex-direction: row;
            justify-content: center;
            margin-top: 40px;
            transform: none;
        }
    }

    .share-btn {
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--post-text-muted);
        text-decoration: none !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }

    .share-btn:hover {
        background: var(--post-accent);
        color: white;
        transform: scale(1.1);
    }

    /* Author Box */
    .author-box-premium {
        background: var(--post-blue);
        padding: 60px;
        border-radius: 40px;
        margin-top: 80px;
        color: white;
        display: flex;
        gap: 40px;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .author-box-premium::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -50px;
        width: 200px;
        height: 200px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
    }

    .author-avatar-large {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        overflow: hidden;
        border: 4px solid rgba(255,255,255,0.2);
        flex-shrink: 0;
    }

    .author-avatar-large img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-content h3 {
        font-size: 1.8rem;
        font-weight: 900;
        margin-bottom: 10px;
        letter-spacing: -1px;
        color: white;
    }

    .author-content p {
        font-size: 1.1rem;
        opacity: 0.8;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .author-social-links {
        display: flex;
        gap: 15px;
    }

    .author-social-links a {
        color: white;
        font-size: 1.2rem;
        opacity: 0.6;
        transition: opacity 0.3s;
    }

    .author-social-links a:hover {
        opacity: 1;
    }

    /* Post Navigation */
    .post-navigation-premium {
        margin-top: 80px;
        display: flex;
        gap: 30px;
    }

    .nav-card {
        flex: 1;
        background: white;
        padding: 40px;
        border-radius: 30px;
        text-decoration: none !important;
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: all 0.4s ease;
        border: 1px solid rgba(0,0,0,0.02);
        min-height: 180px;
    }

    .nav-card:hover {
        background: var(--brand-red);
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(191,10,48,0.15);
    }

    .nav-card:hover * {
        color: white !important;
    }

    @media (max-width: 991px) {
        /* .single-post-title {
            font-size: 2.8rem;
        } */
        /* .post-content-container {
            padding: 40px;
        } */
    }
</style>

<!-- Reading Progress Bar -->
<div id="reading-progress"></div>

<!-- Social Share Floating -->
<div class="social-share-floating">
    <a href="https://www.facebook.com/seospecialistinusa" target="_blank" class="share-btn"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.linkedin.com/company/seospecialistusa/" target="_blank" class="share-btn"><i class="fab fa-linkedin-in"></i></a>
    <a href="https://www.instagram.com/seospecialistusa" target="_blank" class="share-btn"><i class="fab fa-instagram"></i></a>
</div>

<div class="single-post-wrapper">
    <div class="container-custom">
        
        <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    
                    <!-- Header -->
                    <header class="post-header">
                        <div class="post-breadcrumbs">
                            <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a> / 
                            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Blog</a>
                        </div>
                        <h1 class="single-post-title display-5 fw-bold"><?php the_title(); ?></h1>
                        <div class="post-meta-top">
                            <div class="meta-item"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date(); ?></div>
                            <div class="meta-item">
                                <div class="meta-author-avatar">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
                                </div>
                                <?php the_author(); ?>
                            </div>
                            <div class="meta-item"><i class="fas fa-clock"></i> <?php echo $reading_time; ?> Min Read</div>
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '<div class="meta-item"><i class="fas fa-folder"></i> ' . esc_html( $categories[0]->name ) . '</div>';
                            }
                            ?>
                        </div>
                    </header>

                    <!-- Featured Image -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-featured-image">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Article Body with Sidebar -->
                    <div class="article-layout">
                        
                        <!-- Sidebar Area -->
                        <aside class="toc-sidebar">
                            <!-- TOC Wrapper -->
                            <div class="toc-sticky-container">
                                <h4 class="toc-title"><i class="fas fa-list-ul"></i> On This Page</h4>
                                <ul class="toc-list" id="post-toc">
                                    <!-- Populated by JS -->
                                </ul>
                            

                            <!-- Newsletter Widget -->
                            <div class="sidebar-widget">
                                <h4 class="widget-title text-white">Stay Updated</h4>
                                <p class="small opacity-75 mb-3">Get the latest SEO insights delivered to your inbox weekly.</p>
                                <form class="newsletter-form">
                                    <input type="email" placeholder="Your Email Address" required>
                                    <button type="submit" class="btn-submit">Subscribe Now</button>
                                </form>
                            </div>
</div>
                            <!-- Related Links -->
                            <div class="sidebar-widget" style="background: white; border: 1px solid rgba(0,0,0,0.05); color: inherit;">
                                <h4 class="widget-title" style="color: var(--brand-blue);">Need Help?</h4>
                                <p class="small text-muted mb-4">Our SEO experts are ready to help you dominate the SERPs.</p>
                                <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-submit d-block text-center text-decoration-none">Free Consultation</a>
                            </div>
                        </aside>

                        <!-- Content Area -->
                        <div class="post-content-container">
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
                                <?php 
                                // Process content to add IDs to H2s for TOC
                                $content = get_the_content();
                                
                                // Enhanced regex to match H2 tags even with attributes
                                $content = preg_replace_callback( '/<h2(.*?)>(.*?)<\/h2>/i', function( $matches ) {
                                    $attributes = $matches[1];
                                    $title = strip_tags($matches[2]);
                                    $id = sanitize_title( $title );
                                    
                                    // If ID already exists in attributes, we keep it, otherwise add new one
                                    if (strpos($attributes, 'id=') === false) {
                                        return '<h2' . $attributes . ' id="' . $id . '">' . $matches[2] . '</h2>';
                                    }
                                    return $matches[0];
                                }, $content );
                                
                                echo apply_filters( 'the_content', $content );
                                ?>
                                
                                <div class="post-tags mt-5 pt-4 border-top">
                                    <?php the_tags( '<span class="fw-bold me-3 text-muted">TAGS:</span> ', ' ', '' ); ?>
                                </div>
                            </article>

                            <!-- Author Box Premium -->
                            <div class="author-box-premium">
                                <div class="author-avatar-large">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
                                </div>
                                <div class="author-content">
                                    <h3><?php the_author(); ?></h3>
                                    <p><?php the_author_meta( 'description' ); ?></p>
                                    <div class="author-social-links">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Navigation -->
                            <div class="post-navigation-premium">
                                <?php 
                                $prev_post = get_previous_post();
                                $next_post = get_next_post();
                                ?>
                                
                                <?php if ( $prev_post ) : ?>
                                    <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="nav-card">
                                        <span class="nav-label">&larr; Previous Post</span>
                                        <span class="nav-title"><?php echo get_the_title( $prev_post->ID ); ?></span>
                                    </a>
                                <?php endif; ?>

                                <?php if ( $next_post ) : ?>
                                    <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="nav-card">
                                        <span class="nav-label">Next Post &rarr;</span>
                                        <span class="nav-title"><?php echo get_the_title( $next_post->ID ); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>

    </div>
</div>

<script>
    // Reading Progress & Active State
    window.addEventListener('scroll', function() {
        let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        let scrolled = (winScroll / height) * 100;
        const progress = document.getElementById("reading-progress");
        if(progress) progress.style.width = scrolled + "%";
        
        // TOC Active State Detection (Improved)
        let sections = document.querySelectorAll('.entry-content h2');
        let navLinks = document.querySelectorAll('.toc-list a');
        
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            // If heading is near the top of the viewport
            if (rect.top >= 0 && rect.top <= 150) {
                const id = section.getAttribute('id');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + id) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });

    // Populate TOC
    document.addEventListener("DOMContentLoaded", function() {
        const h2s = document.querySelectorAll('.entry-content h2');
        const tocList = document.getElementById('post-toc');
        
        if (h2s.length === 0) {
            const sidebar = document.querySelector('.toc-sidebar');
            if(sidebar) sidebar.style.display = 'none';
            const layout = document.querySelector('.article-layout');
            if(layout) layout.style.gridTemplateColumns = '1fr';
        }

        h2s.forEach((h2, index) => {
            if (!h2.id) {
                const generatedId = h2.textContent.trim().toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '');
                h2.id = generatedId || 'heading-' + index;
            }

            const li = document.createElement('li');
            const a = document.createElement('a');
            a.textContent = h2.textContent;
            a.href = '#' + h2.id;
            
            // Smooth Scroll on Click (Advanced Absolute Position)
            a.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    const headerOffset = 120; // Correct offset for sticky elements
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    history.pushState(null, null, targetId);
                }
            });
            
            li.appendChild(a);
            tocList.appendChild(li);
        });
    });
</script>

<?php get_footer(); ?>
