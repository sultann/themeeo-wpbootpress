<?php
/**
 * The template for displaying 404 pages (not found).
 * @package themeeo
 */

get_header(); ?>
<div class="wrapper" id="404-wrapper">
    
    <div  id="content" class="container mt100 main-content-area">

        <div class="row">
        
            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">
                    <div class="inner-page-area">
                    <section class="error-404 not-found">
                        
                        <header class="page-header">

                            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themeeo' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">

                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'themeeo' ); ?></p>

                            <?php get_search_form(); ?>
                            <?php
                            $default_args = array(
                                'before_widget' => '<div class="widget %s">',
                                'after_widget'  => "</div>",
                                'before_title'  => '<h3 class="widgettitle">',
                                'after_title'   => '</h3>',
                            );
                            ?>
                            <?php the_widget( 'WP_Widget_Recent_Posts', '',  $default_args); ?>

                            <?php if ( themeeo_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

                                <div class="widget widget_categories">

                                    <h3 class="widget-title"><?php _e( 'Most Used Categories', 'themeeo' ); ?></h3>

                                    <ul>
                                    <?php
                                        wp_list_categories( array(
                                            'orderby'    => 'count',
                                            'order'      => 'DESC',
                                            'show_count' => 1,
                                            'title_li'   => '',
                                            'number'     => 10,
                                        ) );
                                    ?>
                                    </ul>

                                </div><!-- .widget -->
                            
                            <?php endif; ?>



                        </div><!-- .page-content -->
                        
                    </section><!-- .error-404 -->
                        </div>
                </main><!-- #main -->
                
            </div><!-- #primary -->

        </div> <!-- .row -->
        
    </div><!-- Container end -->
    
</div><!-- Wrapper end -->

<?php get_footer(); ?>
