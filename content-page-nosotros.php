<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package storefront-child MICHAUD
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<?php the_content() ?>
</div><!-- #post-## -->