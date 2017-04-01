<?php $custom_query = alma_get_home_query(); ?>
<?php if ( $custom_query->have_posts() ) : ?>
	<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
		<article class="col-sm-6">
			<div class="blog-post">
				<div class="blog-post-text">
					<div class="post-thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'featured' ); ?>
							<?php else : ?>
								<?php main_image(); ?>
							<?php endif; ?>
						</a>
					</div><!-- .post-thumbnail -->
					<div class="entry-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-meta"><h3><?php the_time( 'j F, Y' ); ?> | <?php the_category( ', ' ); ?></h3>
						</div>
					</div>
					<?php the_content( '', true, '' ); ?>
					<?php get_template_part( 'template-parts/archive', 'sharer' ); ?>
				</div>
			</div>
		</article>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
