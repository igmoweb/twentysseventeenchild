<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php	$args = array(
	'posts_per_page' => 1,
	'category_name' => 'almanaquehammam'
);
	$clips_query = new WP_Query( $args );
	if ( $clips_query->have_posts() ) {
	while( $clips_query->have_posts() ) : $clips_query->the_post();
?>

<header class="header-int" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id(), 'featured-huge' ); ?>)">
	<div class="container">
		<div class="row">
			<a href="<?php the_permalink(); ?>"></a>
			<div class="col-xs-12 text-center">
				<div class="entry-meta"><h3>Almanaque Hammam</h3></div>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
			</div>
			<?php
			    // Get the ID of a given category
			    $category_id = get_cat_ID( 'Almanaque Hammam' );

			    // Get the URL of this category
			    $category_link = get_category_link( $category_id );
			?>
			<a href="<?php echo esc_url( $category_link ); ?>" title="Almanaque Hammam"><button>Ir al almanaque</button></a>
		</div>
	</div>
</header>

<?php	endwhile;} wp_reset_postdata();?>

<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 blog-content">
			<?php get_template_part( 'template-parts/home', 'loop' );?>
			</div>
		</div>
	</div>
</section>

<button><a href="#">leer más >></a></button>

<?php get_footer();
