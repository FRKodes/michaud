<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php //the_content() ?>

<div class="container">
	<div class="row">
		
		<div class="col-xs-12 col-lg-6">
			<h2 class="title faq text-center">PREGUNTAS FRECUENTES WEB</h2>
			<div id="accordion"><?php
				$args = array( 'post_type' => 'faq', 'posts_per_page' => 20, 'category_name' => 'faq-web' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
			  		<div class="card">
						<div class="card-header" id="heading<?php the_ID() ?>">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php the_ID() ?>" aria-expanded="true" aria-controls="collapse<?php the_ID() ?>"><?php the_title() ?></button>
							</h5>
						</div>
						<div id="collapse<?php the_ID() ?>" class="collapse" aria-labelledby="heading<?php the_ID() ?>" data-parent="#accordion">
							<div class="card-body"><?php the_content() ?></div>
						</div>
					</div><?php 
				endwhile;
				wp_reset_query(); ?>
			</div>
		</div>
		


		<div class="col-xs-12 col-lg-6">
			<h2 class="title faq text-center">PREGUNTAS FRECUENTES BAJO CITA</h2>
			<div id="accordion2"><?php
				$args = array( 'post_type' => 'faq', 'posts_per_page' => 20, 'category_name' => 'faq' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
			  		<div class="card">
						<div class="card-header" id="heading<?php the_ID() ?>">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php the_ID() ?>" aria-expanded="true" aria-controls="collapse<?php the_ID() ?>"><?php the_title() ?></button>
							</h5>
						</div>
						<div id="collapse<?php the_ID() ?>" class="collapse" aria-labelledby="heading<?php the_ID() ?>" data-parent="#accordion">
							<div class="card-body"><?php the_content() ?></div>
						</div>
					</div><?php 
				endwhile;
				wp_reset_query(); ?>
				
			</div>			
		</div>


	</div>
</div>




</div><!-- #post-## -->