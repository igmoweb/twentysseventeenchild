<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<header class="header-int" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'featured-huge' ); ?>)">
			<div class="scroll-op"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center">

						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
						<div class="entry-meta"><h3><?php echo the_date(); ?> | <?php the_category( ', ' ); ?></h3>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="blog">
		<div class="container">
		<div class="row">
			<?php get_sidebar(); ?>
			<div class="col-sm-8 blog-content">
				<div class="blog-post">
					<div class="blog-post-text">
						<?php the_content(); ?>
					</div>
					<?php get_template_part( 'template-parts/sharer', '' ); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	</div>
	</section>
	<section id="portfolio" class="portfolio-1 bg-lighter portfolio-home related-posts">
		<div class="container-fluid">
			<div class="row nopadding" data-scrollreveal="enter bottom over 1s">
				<?php if ( function_exists( 'related_posts' ) ): ?>
					<?php related_posts() ?>
				<?php endif; ?>

				<!-- <a href="<?php the_permalink(); ?>" class="portfolio-link">
										<div class="caption">
												<div class="caption-content">
														<h2><?php the_title(); ?></h2>
												</div>
										</div>
										<?php the_post_thumbnail( 'portfolio-thumbnail', array( 'class' => 'img-centered' ) ); ?>
								</a> -->
			</div>

		</div>
	</section>

<?php else : ?>
<?php endif; // end have_posts() check ?>

<?php get_footer();
