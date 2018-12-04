<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Alegreya:400i|Lora:400,700" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 
		 * @hooked storefront_primary_navigation               - 21
		 * @hooked storefront_header_cart                      - 22
		 * @hooked storefront_primary_navigation_wrapper_close - 23
		 */
		do_action( 'storefront_header' ); ?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<?php
	if ( is_front_page() ) { ?>
	    <div class="container-fluid">
			<div class="row">
				<div class="main-banner-container">
					<video autoplay muted loop id="myVideo">
					  <source src="<?php echo get_stylesheet_directory_uri() . "/assets/images/michaud-video.MP4"; ?>" type="video/mp4">
					</video>
					<a href="#" class="design-button mayus">Diseña tu traje ahora</a>
					<div class="top-contact">
						<p>
							<span class="dorado">CUSTOM TAILORING</span> <br>
							<span class="alegreya">by: Alan Michaud</span> <br><br>
							Citas: <a href="tel:33 1764 2388">(33) 1764 2388</a>
						</p>
					</div>
				</div>
			</div>
		</div><?php
	} else { ?>
	        <div class="container-fluid">
	    		<div class="row">
	    			<div class="inner-banner-container" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
	    				<h1 class="dorado mayus text-center"><?php the_title() ?></h1>
	    				<p class="text-center">
	    					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi modi eos libero quaerat molestiae.
	    				</p>
	    			</div>
	    		</div>
	    	</div><?php
	}
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
