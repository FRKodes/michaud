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
							<a href="#novios">NOVIOS</a>
						</div>
					</div>
				</div>
				<div class="two">
					<div class="main-cat formales">
						<div class="info">
							<p class="alegreya">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="#formales">EVENTOS FORMALES</a>
						</div>
					</div>
					<div class="main-cat casual">
						<div class="info">
							<p class="alegreya">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<a href="#CASUAL">CASUAL SPORT</a>
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
				<div class="media-container">
					<div class="media-item">
						<div class="media-logo">
							<img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/glamour-logo.png"; ?>" alt="glamour logo">
						</div>
						<div class="resume">
							<p>
								"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt saepe consequuntur cumque rem distinctio iure, dolorem consectetur."
							</p>
						</div>
						<a href="#" class="button product_type_simple add_to_cart_button">VER NOTA COMPLETA</a>
					</div>
					
					<div class="media-item">
						<div class="media-logo">
							<img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/maxwell-magazine.png"; ?>" alt="maxwell magazine logo">
						</div>
						<div class="resume">
							<p>
								"Consectetur adipisicing elit. Perspiciatis cum aspernatur ab, quibusdam neque assumenda ducimus aut! Aspernatur, quod nam molestias modi."
							</p>
						</div>
						<a href="#" class="button product_type_simple add_to_cart_button">VER NOTA COMPLETA</a>
					</div>
					
					<div class="media-item">
						<div class="media-logo">
							<img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/glamour-logo.png"; ?>" alt="glamour logo">
						</div>
						<div class="resume">
							<p>
								"Saepe nihil neque hic sequi asperiores. Tempore autem doloribus culpa quibusdam enim quia repellendus inventore quo natus"
							</p>
						</div>
						<a href="#" class="button product_type_simple add_to_cart_button">VER NOTA COMPLETA</a>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();