<?php
/**
 * The page template file
 *
 * @package Blaze
 * @since Blaze 1.0
 */

get_header(); ?>


			<section>
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
						<?php the_content(); ?>
						</div>
					</div>
				</div>		
				
				<?php endwhile;?>
			</section>


<?php get_footer(); ?>