<?php
/**
 * The single post or page template file
 *
 * @package Blaze
 * @since Blaze 1.0
 */

get_header(); ?>


			<section>
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
					
				<div class="breads row">
					<h3 class="page-title"><?php the_title();?></h3>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="page-content">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="single-thumb">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif; ?>
						<div class="post-date"><span><?php echo get_the_date( 'd M' );?></span><span> <?php echo get_the_date( 'Y' );?></span></div>
						<?php the_content(); ?>
						</div>
					</div>
				</div>		
			<?php endwhile; ?>
			
			<?php else :
					get_template_part( 'content', 'none' );
				endif;
			?>
				
			</section>


<?php get_footer(); ?>