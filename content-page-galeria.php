<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php the_content() ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-lg-8 ml-auto mr-auto">
			
			<h2 class="title gallery-title-text text-center faq mayus">ABRIGOS</h2>

			<div class="carousels-container">
				
				<div class="carousel-abrigos"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'abrigos' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="carousel-accesorios transparent-stuff"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'accesorios' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="carousel-camisas transparent-stuff"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'camisas' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="carousel-etiqueta transparent-stuff"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'etiqueta' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="carousel-formal transparent-stuff"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'formal' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>

				<div class="carousel-sport transparent-stuff"><?php
					$args = array( 'post_type' => 'gallery_item', 'posts_per_page' => 20, 'category_name' => 'sport' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();?>
				  		<div class="item"><?php the_post_thumbnail(); ?></div>
				  		<?php 
					endwhile;
					wp_reset_query(); ?>
				</div>
			</div>
			

		</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="carousel-categories">
				<div class="item abrigos">
					<a href="#abrigos" class="dorado">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_abrigos.jpg" alt="Abrigos MICHAUD">
						</div>
						<h3>Abrigos</h3>
					</a>
				</div>

				<div class="item accesorios">
					<a href="#accesorios">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_accesorios.jpg" alt="Accesorios MICHAUD">
						</div>
						<h3>Accesorios</h3>
					</a>
				</div>

				<div class="item camisas">
					<a href="#camisas">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_camisas.jpg" alt="Camisas MICHAUD">
						</div>
						<h3>Camisas</h3>
					</a>
				</div>

				<div class="item etiqueta">
					<a href="#etiqueta">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_etiqueta.jpg" alt="Etiqueta MICHAUD">
						</div>
						<h3>Etiqueta</h3>
					</a>
				</div>

				<div class="item formal">
					<a href="#formal">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_formal.jpg" alt="Formal MICHAUD">
						</div>
						<h3>Formal</h3>
					</a>
				</div>

				<div class="item sport">
					<a href="#sport">
						<div class="cat-photo">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat_sport.jpg" alt="Sport MICHAUD">
						</div>
						<h3>Sport</h3>
					</a>
				</div>

				
			</div>
		</div>
	</div>
</div>




</div><!-- #post-## -->