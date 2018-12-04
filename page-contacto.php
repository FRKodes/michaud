<?php
/**
 * The template for displaying contact page.
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

					<div class="col-xs-12 col-md-12">
						<?php while ( have_posts() ) : the_post();

							get_template_part( 'content', 'page-contacto' );

						endwhile; // End of the loop. ?>
					</div>

				</div>
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<form action="">
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input type="text" name="" class="form-control" placeholder="Correo electrónico">
							</div>
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-submit mayus" value="Enviar">
							</div>
						</form>
					</div>

					<div class="col-xs-12 col-md-6 schedule">
						<div class="line"><div class="dia mayus">Lunes</div><div class="horario">10 am - 6 pm (Previa cita)</div></div>
						<div class="line"><div class="dia mayus">Martes</div><div class="horario">10 am - 6 pm (Previa cita)</div></div>
						<div class="line"><div class="dia mayus">Miércoles</div><div class="horario">10 am - 6 pm (Previa cita)</div></div>
						<div class="line"><div class="dia mayus">Jueves</div><div class="horario">10 am - 6 pm (Previa cita)</div></div>
						<div class="line"><div class="dia mayus">Viernes</div><div class="horario">10 am - 6 pm (Previa cita)</div></div>
						<div class="line"><div class="dia mayus">Sábado</div><div class="horario">CERRADO</div></div>
						<div class="line"><div class="dia mayus">Domingo</div><div class="horario">CERRADO</div></div>
					</div>
				</div>

				<div class="row">
					<div class="map"></div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();