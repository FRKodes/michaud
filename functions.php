<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


/*
 Replace jQuery version
 */
function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function michaud_store_child_scripts() {
	wp_enqueue_style( 'michaud-theme-style', get_stylesheet_directory_uri() . '/michaud-styles.css', array(), null );
	wp_enqueue_script( 'michaud-theme-script', get_stylesheet_directory_uri() . '/all.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'michaud_store_child_scripts', 30 );

register_nav_menus( array('footer_menu' => 'Footer Menu', ) );


function change_default_galleria_header() {
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation',               50 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	remove_action( 'storefront_header', 'storefront_header_cart',    60 );

	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper',       21 );
	add_action( 'storefront_header', 'storefront_primary_navigation',               22 );
	add_action( 'storefront_header', 'storefront_header_cart',    					24 );
	add_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 25 );
	
	// add_action( 'storefront_header', 'storefront_product_search', 40 );
}
add_action( 'wp_head', 'change_default_galleria_header' );

if ( ! function_exists( 'storefront_site_branding' ) ) {
	/**
	 * Site branding wrapper and display
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_site_branding() {
		?>
		<div class="site-branding"><a href="/michaud"><img src="<?php echo get_stylesheet_directory_uri() . "/assets/images/logo_michaud_gris.svg"; ?>" alt="logo michaud"></a></div>
		<?php
	}
}

if ( ! function_exists( 'storefront_primary_navigation' ) ) {
	/**
	 * Display Primary Navigation
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function storefront_primary_navigation() {
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
		<button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
			<span></span>
		</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'primary-navigation',
					)
			);

			wp_nav_menu(
				array(
					'theme_location'	=> 'handheld',
					'container_class'	=> 'handheld-navigation',
					)
			);
			?>
		</nav><!-- #site-navigation -->
		<?php
	}
}


if ( ! function_exists( 'storefront_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function storefront_header_cart() {
		if ( storefront_is_woocommerce_activated() ) {
			if ( is_cart() ) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
		?>
		<ul id="site-header-cart" class="site-header-cart menu">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php storefront_cart_link(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
		<?php
		}
	}
}

if ( ! function_exists( 'storefront_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param  array $fragments Fragments to refresh via AJAX.
	 * @return array            Fragments to refresh via AJAX
	 */
	function storefront_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		storefront_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		ob_start();
		storefront_handheld_footer_bar_cart_link();
		$fragments['a.footer-cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

if ( ! function_exists( 'storefront_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 * @since  1.0.0
	 */
	function storefront_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'storefront' ); ?>">
				<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'storefront' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}


add_filter( 'storefront_recent_products_args', 'hb_change_number_new_products', 9999 );
function hb_change_number_new_products( $args ) {
	$args['limit'] = 12;
	$args['columns'] = 3;
	$args['title'] = 'NUEVOS PRODUCTOS';
	return $args;
}
add_filter( 'storefront_on_sale_products_args', 'hb_change_number_on_sale_products', 9999 );
function hb_change_number_on_sale_products( $args ) {
	$args['limit'] = 12;
	$args['columns'] = 3;
	$args['title'] = 'PRODUCTOS EN REBAJA';
	return $args;
}
add_filter( 'storefront_popular_products_args', 'hb_change_number_popular_products', 9999 );
function hb_change_number_popular_products( $args ) {
	$args['limit'] = 12;
	$args['columns'] = 3;
	$args['title'] = 'PRODUCTOS EN REBAJA';
	return $args;
}
add_filter( 'storefront_best_selling_products_args', 'hb_change_number_best_selling_products', 9999 );
function hb_change_number_best_selling_products( $args ) {
	$args['limit'] = 12;
	$args['columns'] = 3;
	$args['title'] = 'PRODUCTOS DESTACADOS';
	return $args;
}


function create_nota_prensa_post_type() {
  register_post_type( 'nota_prensa',
    array(
      'labels' => array(
        'name' => __( 'Notas de prensa' ),
        'singular_name' => __( 'Nota de prensa' ),
        'add_new' => __( 'Agregar nueva nota de prensa' )

      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'notas-de-prensa'),
      'supports' => array('title', 'editor', 'thumbnail' ),
    )
  );
}
add_action( 'init', 'create_nota_prensa_post_type' );


function faq_custom_post_type() {

    $labels = array(
        'name'                => _x( 'FAQs', 'Post Type General Name' ),
        'singular_name'       => _x( 'FAQ', 'Post Type Singular Name' ),
        'menu_name'           => __( 'FAQs' ),
        'parent_item_colon'   => __( 'Parent FAQ' ),
        'all_items'           => __( 'Todas las FAQs' ),
        'view_item'           => __( 'Ver FAQ' ),
        'add_new_item'        => __( 'Agregar una FAQ' ),
        'add_new'             => __( 'Agregar nueva FAQ' ),
        'edit_item'           => __( 'Editar FAQ' ),
        'update_item'         => __( 'Actualizar FAQ' ),
        'search_items'        => __( 'Buscar FAQ' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
    $args = array(
        'label'               => __( 'FAQs' ),
        'description'         => __( 'FAQs sobre el proceso en Michaud' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'faq', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'faq_custom_post_type' );



function gallery_custom_post_type() {

    $labels = array(
        'name'                => _x( 'Gallería items', 'Post Type General Name' ),
        'singular_name'       => _x( 'Gallería item', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Gallería items' ),
        'parent_item_colon'   => __( 'Gallery Item Padre' ),
        'all_items'           => __( 'Todas los items de la Gallería' ),
        'view_item'           => __( 'Ver Gallery item' ),
        'add_new_item'        => __( 'Agregar un Item a la Gallería' ),
        'add_new'             => __( 'Agregar nuevo Item a la Gallería' ),
        'edit_item'           => __( 'Editar Item de la Gallería ' ),
        'update_item'         => __( 'Actualizar Item de la Gallería' ),
        'search_items'        => __( 'Buscar Item de la Gallería ' ),
        'not_found'           => __( 'Item de la galería no encontrado' ),
        'not_found_in_trash'  => __( 'Item de la galería no encontrado en la papelera' ),
    );
     
    $args = array(
        'label'               => __( 'Gallery items category' ),
        'description'         => __( 'Gallery items Michaud' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'page',
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
    );
     
    // Registering your Custom Post Type
    register_post_type( 'gallery_item', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'gallery_custom_post_type' );


