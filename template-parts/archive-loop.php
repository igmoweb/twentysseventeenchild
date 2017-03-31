
	<?php if ( have_posts() ) : ?>
	<!-- the loop -->
	<?php while ( have_posts() ) : the_post(); ?>
	<article>
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
<!-- end of the loop -->
<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<?php else:  ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
