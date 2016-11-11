<?php
/**
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package themeeo
 */

get_header(); ?>
	<div class="wrapper site-content" id="full-width-page-wrapper">

		<div id="content" class="container main-content-area">

			<div id="primary" class="col-md-12 content-area">

				<main id="main" class="site-main" role="main">

					<div class="row">

						<?php
						$query     = array(
							'category'         => '',
							'exclude_category' => '',
							'tags'             => '',
							'exclude_tags'     => '',
							'author'           => false,
							'relation'         => 'OR',
							'number'           => 9,
							'price'            => 'no',
							'excerpt'          => 'yes',
							'full_content'     => 'no',
							'buy_button'       => 'yes',
							'columns'          => 3,
							'thumbnails'       => 'true',
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'ids'              => '',
							'pagination'       => 'true',
						);
						$query     = array(
							'post_type'  => 'download',
							'thumbnails' => 'true',
							'orderby'    => 'post_date',
							'order'      => 'DESC',
							'ids'        => '',
							'pagination' => 'true',
						);
						$downloads = new WP_Query( $query );
						if ( $downloads->have_posts() ) : ?>
							<?php while ( $downloads->have_posts() ) : $downloads->the_post(); ?>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="card product-card">
										<?php get_template_part( 'loop-templates/product', 'image' ); ?>
										<div class="card-block">
											<?php get_template_part( 'loop-templates/product', 'title' ); ?>
											<?php get_template_part( 'loop-templates/product', 'excerpt' ); ?>
											<?php get_template_part( 'loop-templates/product', 'more-btn' ); ?>
											<?php do_action( 'edd_download_after' ); ?>
										</div>
									</div>
								</div>
								<?php $i ++; endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php
						else:
							$display = sprintf( _x( 'No %s found', 'download post type name', 'easy-digital-downloads' ), edd_get_label_plural() );
						endif;
						?>
					</div><!-- .row -->
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- Container end -->

	</div><!-- Wrapper end -->

<?php get_footer(); ?>