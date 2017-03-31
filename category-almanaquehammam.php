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

if (function_exists('category_image_src')) {
$category_image = category_image_src( array( 'size' => 'full' ) , false );
} else {
$category_image = '';
}
get_header(); ?>

<?php if ( have_posts() ) : ?>
<header class="alm-header-int header-int">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<article>
  				<?php	the_archive_title( '<h2 class="page-title">', '</h2>' ); ?>
  				<i></i>
  				<hr class="negro">
  				<p><?php echo category_description(); ?></p>
			  </article>
			</div>
		</div>
	</div>
	<div class="alm-bg">
    <div class="scroll-op"></div>
		<div class="alm-gradient" style="background-image: url(<?php echo $category_image; ?>)" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>"/></div>
		<div class="alm-color"></div>
	</div>
</header>

<?php endif; ?>

<section id="portfolio" class="portfolio-1 bg-lighter portfolio-home">
  <div class="container-fluid" >
    <div class="row nopadding"  id="infinite-scroll" data-scrollreveal="enter bottom over 1s">
      <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $custom_args = array(
      'post_type' 			=> 'post',
      'posts_per_page'  => 12,
      'paged' 					=> $paged,
      'category_name' 					=> 'almanaquehammam'
      );
      $custom_query = new WP_Query( $custom_args ); ?>
      <?php if ( $custom_query->have_posts() ) : ?>
      <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <div class="col-sm-6 col-md-6 col-lg-3 portfolio-item">
        <a href="<?php the_permalink(); ?>" class="portfolio-link">
          <div class="caption">
            <div class="caption-content">
          		<h2><?php the_title();?></h2>
            </div>
          </div>
          <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('portfolio-thumbnail', array('class' => 'img-centered')); ?>
          <?php else : ?>
          <?php echo main_image_alma();?>
          <?php endif; ?>
        </a>
      </div>
      <? endwhile;
      else :
      get_template_part( 'template-parts/post/', 'archive' );
      endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php if (function_exists(custom_pagination)) {
    custom_pagination($custom_query->max_num_pages,"",$paged);
    } ?>
  </div>
</section>

<?php get_footer();
