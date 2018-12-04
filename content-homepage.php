<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront-child MICHAUD
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="display: none">
	<div class="col-full">
		<?php
		/**
		 * Functions hooked in to storefront_page add_action
		 *
		 * @hooked storefront_homepage_header      - 10
		 * @hooked storefront_page_content         - 20
		 */
		// do_action( 'storefront_homepage' );
		?>
	</div>
</div><!-- #post-## -->