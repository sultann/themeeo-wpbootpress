<?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
<h3<?php echo $item_prop; ?> class="card-title product-title">
	<a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php do_action( 'edd_download_after_title' ); ?>
</h3>