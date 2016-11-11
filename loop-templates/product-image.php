<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
	<div class="edd_download_image">
		<a href="<?php the_permalink(); ?>">
			<?php echo get_the_post_thumbnail( get_the_ID(), 'product-thumbnail', array('class' => 'card-img-top') ); ?>
			<?php do_action( 'edd_download_after_thumbnail' ); ?>
		</a>
	</div>
<?php endif; ?>