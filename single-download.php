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
        
        <div class="product-widget-area col-md-3 offset-md-1">
            <aside class="product-pricing">
                <div class="pricing-header">
                    <h3 class="widget-title">Pricing</h3>
                </div>
                <div class="pricing-info">
                    <?php
                    global $post;
                    echo edd_get_purchase_link( array( 'download_id' => $post->ID ));
                    ?>

                    <div class="terms clearfix">
                        <p>
                            <i class="fa fa-info-circle"></i>
                            All price options are billed yearly. You may cancel your subscription at any time. Extensions subject to yearly license for support and updates. <a href="http://docs.easydigitaldownloads.com/article/942-terms-and-conditions" target="_blank">View terms</a>.				</p>
                    </div>
                </div>
            </aside>
        </div>

        </div><!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
