<?php
/**
 * The template for displaying all single posts.
 *
 * @package themeeo
 */

get_header(); ?>
<div class="wrapper" id="single-wrapper">
    
    <div  id="content" class="container mt100">

        <div class="row">
        
            <div id="primary" class="col-md-8 content-area">
                
                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'product' ); ?>

                        <?php the_post_navigation(); ?>
                        
                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
                
            </div><!-- #primary -->
        
        <div class="product-widget-area col-md-3 col-md-offset-1">
            <?php
            global $post;
            echo edd_get_purchase_link( array( 'download_id' => $post->ID ));
            ?>
        </div>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
