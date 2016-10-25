<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package themeeo
 */

get_header(); ?>
    <div class="wrapper" id="wrapper-index">
        
	   <div id="content" class="container">

            <div class="row">
           
    	       <div id="primary" class="<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area">
                   
                     <main id="main" class="site-main" role="main">
                    
                    <?php if ( have_posts() ) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php
                                    get_template_part( 'loop-templates/content', get_post_format() );
                                ?>

                        <?php endwhile; ?>
                        
                        <?php the_posts_navigation(); ?>
                        
                    <?php else : ?>

                        <?php get_template_part( 'loop-templates/content', 'none' ); ?>
                        
                    <?php endif; ?>
                        
                    </main><!-- #main -->
                   
    	       </div><!-- #primary -->
        
            <?php get_sidebar(); ?>

            </div><!-- .row -->
           
       </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>
