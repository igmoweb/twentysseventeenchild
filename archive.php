<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
<header class="header-int">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
					?>
			</div>
		</div>
	</div>
</header>
<?php endif; ?>

<section class="blog">
	<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<div class="col-sm-8 blog-content">
          <?php get_template_part( 'template-parts/archive', 'loop' );?>
        </div>
      </div>
    </div>
</section>

<?php get_footer();
