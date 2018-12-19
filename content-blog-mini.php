<div class="blog-item-mini">
	
	<h2 class="title"><a class="black" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

	<p><?php echo get_the_date(); ?></p>

	<?php the_excerpt() ?>

	<a class="black bold" href="<?php the_permalink() ?>">Ver nota completa</a>

</div>