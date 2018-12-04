<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 footer-column">
					<?php wp_nav_menu( array( 'footer_menu' => 'footer' ) ); ?>
				</div>

				<div class="col-xs-12 col-sm-4 footer-column white">
					<p>
						<span class="dorado">CUSTOM TAILORING</span> <br>
						<span class="alegreya">by: Alan Michaud</span> <br>
						Citas: <a href="tel:33 1764 2388">(33) 1764 2388</a>
					</p>
				</div>

				<div class="col-xs-12 col-sm-4 footer-column">
					<h3 class="white">MANTENTE EN CONTACTO</h3>
					<ul class="social">
						<li><a target="_blank" class="icon-facebook" title="Ver el perfil de MICHAUD en Facebook" href="https://www.facebook.com/michaud.mx/"></a></li>
						<li><a target="_blank" class="icon-instagram" title="Ver el perfil de MICHAUD en Instagram" href="https://www.instagram.com/michaud_suit_yourself/"></a></li>
					</ul>
				</div>
			</div>
			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' ); ?>
			<p class="credits alegreya text-center">Desarrollado por <a class="white" href="https://blueterrier.mx/" target="_blank" title="Ver sitio web de Blue Terrier Studio">Blue Terrier Studio</a></p>
		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
