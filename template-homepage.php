<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="main-cats-container">
				<div class="one">
					<div class="main-cat novios">
						<div class="info">
							<p class="alegreya">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="http://blueterrier.mx/michaud/michaud-la-imagen-del-exito-un-traje-hecho-a-conciencia/">NOVIOS</a>
						</div>
					</div>
				</div>
				<div class="two">
					<div class="main-cat formales">
						<div class="info">
							<p class="alegreya">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="http://blueterrier.mx/michaud/producto/producto-03/">EVENTOS FORMALES</a>
						</div>
					</div>
					<div class="main-cat casual">
						<div class="info">
							<p class="alegreya">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="http://blueterrier.mx/michaud/como-abrochar-correctamente-los-sacos-de-uno-dos-y-tres-botones/">CASUAL SPORT</a>
						</div>
					</div>
				</div>
			</div>

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>
			
			<section class="storefront-product-section prensa">
				<h2 class="section-title">PRENSA</h2>
				<div class="media-container"><?php
					$args = array( 'post_type' => 'nota_prensa', 'posts_per_page' => 3 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
						<div class="media-item">
							<div class="media-logo"><img src="<?php the_field('logo_prensa'); ?>" alt="glamour logo"></div>
							<div class="resume"><p><?php the_excerpt(); ?></p></div>
							<a href="<?php the_permalink(); ?>" class="button product_type_simple add_to_cart_button">VER NOTA COMPLETA</a>
						</div> <?php 
					endwhile;
					wp_reset_query(); ?>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();