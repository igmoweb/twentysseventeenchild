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

<header class="header-int">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
          <a href="<?php the_permalink(); ?>"><h2 class="page-title">Entradas</h2></a>
			</div>
		</div>
	</div>
</header>

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
