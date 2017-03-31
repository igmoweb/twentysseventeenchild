<?php
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$custom_args = array(
		'post_type' 			=> 'post',
		'posts_per_page'  => 6,
		'paged' 					=> $paged
	);
$custom_query = new WP_Query( $custom_args ); ?>
<?php if ( $custom_query->have_posts() ) : ?>
<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
<article class="col-sm-6">
	<div class="blog-post">
		<div class="blog-post-text">
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php if ( has_post_thumbnail() ) : ?>
	      	<?php the_post_thumbnail('featured'); ?>
	  			<?php else : ?>
						<?php echo main_image('featured');?>
			   <?php endif; ?>
				</a>
			</div><!-- .post-thumbnail -->
			<div class="entry-title">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta"><h3><?php the_time('j F, Y'); ?> | <?php the_category(', '); ?></h3></div>
			</div>
			<?php the_content('',TRUE,'');?>
			<?php get_template_part( 'template-parts/archive', 'sharer' );?>
		</div>
	</div>
</article>
<?php endwhile; ?>
<?php endif; ?>
