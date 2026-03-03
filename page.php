<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seospecialistusa
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();

        // Check if the page is using Gutenberg blocks or not
        if ( has_blocks( get_the_ID() ) ) {
            // If Gutenberg is used, simply output the content
            the_content();
        } else {
            // Default spacing for non-Gutenberg pages
            ?>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <header class="entry-header mb-4">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header>

                        <div class="entry-content">
                            <?php
                            the_content();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
