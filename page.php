<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package themeeo
 */

get_header(); ?>
    <div class="wrapper site-content" id="full-width-page-wrapper">

        <div  id="content" class="container main-content-area">

            <div id="primary" class="col-md-12 content-area">

                <main id="main" class="site-main" role="main">
                    <div class="inner-page-area">
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php endwhile; // end of the loop. ?>
                    </div>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>