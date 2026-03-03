<?php
/**
 * The main template file
 *
 * @package seospecialistusa
 */

get_header(); ?>

<div class="container-custom section-padding">
    <?php if ( have_posts() ) : ?>
        <header class="page-header mb-4">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>

        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-4 mb-4">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail mb-3">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid rounded' ) ); ?></a>
                            </div>
                        <?php endif; ?>

                        <h2 class="h4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-excerpt mb-3">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="text-brand-red fw-bold">Read More &raquo;</a>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p><?php esc_html_e( 'No posts found.', 'seospecialistusa' ); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
