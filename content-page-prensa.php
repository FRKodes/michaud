<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront-child MICHAUD
 */
?>

<div class="container">
	<div class="row">

		<?php
		$args = array( 'post_type' => 'nota_prensa', 'posts_per_page' => 24 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();?>
			<div class="col-xs-12 col-sm-6 col-md-4 media-item-review text-center">
				<div class="inner">
					<div class="photo" style="background-image: url(<?php echo get_stylesheet_directory_uri() . "/assets/images/prensa-01.png"; ?>);"></div>
					<div class="logo"><img src="<?php the_field('logo_prensa'); ?>" alt="<?php the_field('logo_prensa'); ?>"></div>
					<div class="resume alegreya">
					<p><?php the_excerpt(); ?></p>
					</div>
					<a href="<?php the_permalink() ?>" class="button product_type_simple add_to_cart_button">VER NOTA COMPLETA</a>
				</div>
			</div><?php 
		endwhile;
		wp_reset_query(); ?>

	</div>
</div>