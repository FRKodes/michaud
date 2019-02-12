<?php
/**
 * The template for displaying aviso de privacidad page.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-md-12">
						<?php while ( have_posts() ) : the_post();?>

							<ul class="products columns-3">
								<li class="post-48 product type-product status-publish has-post-thumbnail product_cat-formales first instock shipping-taxable purchasable product-type-simple">
									<a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<img width="275" height="275" src="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/traje_completo.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/traje_completo.png 275w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/traje_completo-150x150.png 150w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/traje_completo-100x100.png 100w" sizes="(max-width: 275px) 100vw, 275px" />
										<h2 class="woocommerce-loop-product__title">Traje completo</h2>
									</a>
									
									<a href="http://blueterrier.mx/michaud/producto/traje-completo-super-120/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $8,800</a>
									<a href="http://blueterrier.mx/michaud/producto/traje-completo-super-120-9900/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $9,900</a>
									<a href="http://blueterrier.mx/michaud/producto/traje-completo-super-150-10400/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $10,400</a>
									<a href="http://blueterrier.mx/michaud/producto/traje-completo-super-150-11700/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $11,700</a>

								</li>
								
								<li class="post-43 product type-product status-publish has-post-thumbnail product_cat-formales instock shipping-taxable purchasable product-type-simple">
									<a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<img width="275" height="275" src="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/saco-solo-01.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/saco-solo-01.png 275w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/saco-solo-01-150x150.png 150w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/saco-solo-01-100x100.png 100w" sizes="(max-width: 275px) 100vw, 275px" />
										<h2 class="woocommerce-loop-product__title">Saco</h2>
									</a>
									<a href="http://blueterrier.mx/michaud/producto/saco-super-120-6400/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $6400</a>
									<a href="http://blueterrier.mx/michaud/producto/saco-super-120-7200/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $7200</a>
									<a href="http://blueterrier.mx/michaud/producto/saco-super-150-7200/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $7200</a>
									<a href="http://blueterrier.mx/michaud/producto/saco-super-150-8100/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $8100</a>

								</li>

								<li class="post-47 product type-product status-publish has-post-thumbnail product_cat-formales last product_tag-azul instock shipping-taxable purchasable product-type-simple">
									<a href="#" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
										<img width="275" height="275" src="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/panto_azul.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="http://blueterrier.mx/michaud/wp-content/uploads/2018/11/panto_azul.png 275w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/panto_azul-150x150.png 150w, http://blueterrier.mx/michaud/wp-content/uploads/2018/11/panto_azul-100x100.png 100w" sizes="(max-width: 275px) 100vw, 275px" />
										<h2 class="woocommerce-loop-product__title">Pantalón</h2>
									</a>
									<a href="http://blueterrier.mx/michaud/producto/pantalon-super-120-2800/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $2800</a>
									<a href="http://blueterrier.mx/michaud/producto/pantalon-super-120-3150/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 120 $3100</a>
									<a href="http://blueterrier.mx/michaud/producto/pantalon-super-150-2800/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $3200</a>
									<a href="http://blueterrier.mx/michaud/producto/pantalon-super-150-3600/" class="button product_type_simple add_to_cart_button ajax_add_to_cart mb-10" />SUPER 150 $3600</a>
								</li>
							</ul>

						<?php endwhile; // End of the loop. ?>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

