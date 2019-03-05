<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-md-6">
						
						<div class="nosotros-images-container">
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/nosotros-01.png"; ?>" alt="nosotros-01"></div>
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/instagram01.jpg"; ?>" alt="michaud instagram 01"></div>
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/instagram02.jpg"; ?>" alt="michaud instagram 02"></div>
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/instagram03.jpg"; ?>" alt="michaud instagram 03"></div>
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/instagram04.jpg"; ?>" alt="michaud instagram 04"></div>
							<div class="item"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/instagram05.jpg"; ?>" alt="michaud instagram 05"></div>
						</div>
					</div>

					<div class="col-xs-12 col-md-6 nosotros-text alegreya text-center">
						<?php while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page-nosotros' );

						endwhile; // End of the loop. ?>
					</div>

				</div>

				<div class="row">
					<div class="col-xs-12 col-md-12 m-top-40">
						<video controls><source src="<?php echo get_stylesheet_directory_uri() . "/assets/video/michaud_video_completo.MP4"; ?>" /></video>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();