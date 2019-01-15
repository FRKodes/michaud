<?php
/**
 * The template for displaying términos y condiciones de uso page.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">

					<div class="col-xs-12 col-md-12">
						<?php while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page-terminos' );

						endwhile; // End of the loop. ?>
					</div>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();