<?php
/**
 * The default template for displaying content
 *
 * @package Blaze
 * @since Blaze 1.0
 */
?>					
					
	<div class="col-md-12 post" id="post-<?php the_ID(); ?>">
		<div class="page-content">
		<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<div class="post-thumb">
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<a href="<?php the_permalink(); ?>" class="post-thumbnail"><?php the_post_thumbnail(); ?></a>
			<?php else:?>
				<a href="<?php the_permalink(); ?>" class="post-thumbnail"><img src="<?php echo get_stylesheet_directory_uri();?>/images/thumbnail-default.jpg" alt="default thumbnails"/></a>
			<?php endif; ?>
		</div>
		<p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="read-more">More..</a></p>
		</div>
	</div>