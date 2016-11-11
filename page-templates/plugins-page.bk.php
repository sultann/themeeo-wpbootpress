<?php
/**
 * Template Name: Plugins Page
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
								<?php $schema = edd_add_schema_microdata() ? 'itemscope itemtype="http://schema.org/Product" ' : ''; ?>
								<div <?php echo $schema; ?>class="col-md-4 col-sm-6 col-xs-12 <?php echo apply_filters( 'edd_download_class', 'edd_download', get_the_ID(), $atts, $i ); ?>" id="edd_download_<?php echo get_the_ID(); ?>">
									<div class="card edd_download_inner">

										<?php do_action( 'edd_download_before' ); ?>
										<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
											<?php echo get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'card-img-top') ); ?>
											<div class="edd_download_image">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'card-img-top') ); ?>
												</a>
											</div>
										<?php endif; ?>

									</div>
								</div>

								<?php $i ++; endwhile; ?>
							<?php wp_reset_postdata(); ?>
							<?php
						else:
							$display = sprintf( _x( 'No %s found', 'download post type name', 'easy-digital-downloads' ), edd_get_label_plural() );
						endif;
						?>
						<div class="card col-md-4">
							<img class="card-img-top" src="..." alt="Card image cap">
							<div class="card-block">
								<h4 class="card-title">Card title</h4>
								<p class="card-text">Some quick example text to build on the card title and make up the
									bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- Container end -->

	</div><!-- Wrapper end -->

<?php get_footer(); ?>