<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function add_theme_scripts() {
  wp_enqueue_style( 'editor', get_stylesheet_directory_uri() .'/assets/css/editor-style.css', array(), 'all');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() .'/assets/css/bootstrap/bootstrap.min.css', array(), 'all');
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/assets/css/plugins/font-awesome/css/font-awesome.min.css', array(), 'all');
	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() .'/assets/fonts/fonts.css', array(), 'all');
	// wp_enqueue_style( 'retina', get_stylesheet_directory_uri() .'/assets/js/plugins/retina/retina.min.js', array(), 'all');
	wp_enqueue_style( 'hover', get_stylesheet_directory_uri() .'/assets/css/plugins/hover/hover.min.css', array(), 'all');
	wp_enqueue_style( 'hammam-style', get_stylesheet_directory_uri() .'/assets/css/hammam.css', array(), 'all');
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function theme_js() {
	wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . 'assets/js/modernizr.custom.js', array ( 'jquery' ), false, false);
	wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array ( 'jquery' ), '1.0', true);
	wp_enqueue_script( 'socialshare', get_stylesheet_directory_uri() . '/assets/js/socialshare.popup.js', array( 'jquery' ), '' , true );
	wp_enqueue_script( 'hammamnav', get_stylesheet_directory_uri() . '/assets/js/hammam.nav.js', array( 'jquery' ), '1.0', false);
	// wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-1.10.2.js', array ( 'jquery' ), 'all');
  // wp_enqueue_script( 'smooth', get_stylesheet_directory_uri() . '/assets/js/plugins/SmoothScroll/SmoothScroll.js', array( 'jquery' ), '1.0', true );
	// wp_enqueue_script( 'tinynav', get_stylesheet_directory_uri() . '/assets/js/plugins/tiny/tinynav.min.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'rainbow', get_stylesheet_directory_uri() . 'assets/js/plugins/tiny/rainbow.min.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jquery_easing', get_stylesheet_directory_uri() . 'assets/js/plugins/jquery.easing/jquery.easing.1.3.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jquery_fitvids', get_stylesheet_directory_uri() . 'assets/js/plugins/jquery.fitvids/jquery.fitvids.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jquery_fs_wallpaper', get_stylesheet_directory_uri() . 'assets/js/plugins/jquery_fs_wallpaper/jquery.fs.wallpaper.min.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jquery_magnific_popup', get_stylesheet_directory_uri() . 'assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jqBootstrap', get_stylesheet_directory_uri() . 'assets/js/plugins/jquery.tubular/jquery.tubular.1.0.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'owl', get_stylesheet_directory_uri() . 'assets/js/plugins/owl.carousel/owl.carousel.min.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'scrollReveal', get_stylesheet_directory_uri() . 'assets/js/plugins/scrollReveal/scrollReveal.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'stellar', get_stylesheet_directory_uri() . 'assets/js/plugins/stellar/stellar.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'SmoothScroll', get_stylesheet_directory_uri() . 'assets/js/plugins/SmoothScroll/SmoothScroll.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'jqBootstrap', get_stylesheet_directory_uri() . 'assets/js/plugins/jqBootstrapValidation/jqBootstrapValidation.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'contact_me', get_stylesheet_directory_uri() . 'assets/js/contact_me.js', array ( 'jquery' ), '1.0', true);
	// wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . 'assets/js/plugins/isotope/isotope.pkgd.min.js', array ( 'jquery' ), '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_js');





// Sidebar y menú

function footer_widgets() {
	register_sidebar( array(
		'name'          => 'Footer nav',
		'id'            => 'footer-nav',
		'before_widget' => '<div><ul class="list-unstyled">',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<li><h3>',
		'after_title'   => '</h3></li>',
	) );
}
add_action( 'widgets_init', 'footer_widgets' );

function register_my_menu() {
  register_nav_menu('top-nav',__( 'Top Menu' ));
}
add_action( 'init', 'register_my_menu' );

function header_widgets() {
	register_sidebar( array(
		'name'          => 'Header nav',
		'id'            => 'top-nav',
		'before_widget' => '<div><ul class="list-unstyled">',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<li><h3>',
		'after_title'   => '</h3></li>',
	) );
}
add_action( 'widgets_init', 'header_widgets' );


// Título de categoría sin "categoría:"

add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>' ;
	}
	return $title;
});


// Tamaños de imagen

add_theme_support( 'post-thumbnails' );
add_action('init', 'remove_then_add_image_sizes');
function remove_then_add_image_sizes() {
  remove_image_size('thumbnail');
  remove_image_size('medium');
  remove_image_size('large');
  remove_image_size( 'twentyseventeen-featured-image' );
  remove_image_size( 'twentyseventeen-thumbnail-avatar' );

  add_image_size( 'portfolio-thumbnail', 500, 500, true );
  // add_image_size( 'related-thumbnail', 500, 500, true );
  add_image_size( 'post-thumbnail', 750, 2000 );
  add_image_size( 'featured', 750, 500, true );
  add_image_size( 'featured-huge', 1980, 1080, true );
}

function paulund_remove_default_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'paulund_remove_default_image_sizes');

/* Imágenes a su tamaño en editor de entradas */

add_action( 'after_setup_theme', 'my_theme_init', 20 );
function my_theme_init() {
  add_image_size( 'post-thumbnail', 750, 2000 );
  $GLOBALS['content_width'] = 750;
}

add_filter( 'twentyseventeen_content_width', 'my_theme_content_width' );
function my_theme_content_width( $width ) {
  if ( is_single() || is_page() ) {
    return 750;
  }
  return $width;
}

add_filter( 'image_size_names_choose', 'my_theme_size_names' );
function my_theme_size_names( $sizes ) {
  $sizes['post-thumbnail'] = 'Contenido de la entrada';
  return $sizes;
}

function theme_default_image_size() {
    return 'post-thumbnail';
}
add_filter( 'pre_option_image_default_size', 'theme_default_image_size' );
add_action('init', 'remove_default_image_sizes');
function remove_default_image_sizes() {}


// Paginación

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

if (empty($pagerange)) {
  $pagerange = 2;
}

/**
* This first part of our function is a fallback
* for custom pagination inside a regular loop that
* uses the global $paged and global $wp_query variables.
*
* It's good because we can now override default pagination
* in our theme, and use this function in default quries
* and custom queries.
*/
global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
       $numpages = 1;
  }
}

/**
* We construct the pagination arguments to enter into our paginate_links
* function.
*/
$pagination_args = array(
  'base'            => get_pagenum_link(1) . '%_%',
  'format'          => 'page/%#%',
  'total'           => $numpages,
  'current'         => $paged,
  'show_all'        => False,
  'end_size'        => 1,
  'mid_size'        => $pagerange,
  'prev_next'       => True,
  'prev_text'       => __('&laquo;'),
  'next_text'       => __('&raquo;'),
  'type'            => 'plain',
  'add_args'        => false,
  'add_fragment'    => ''
);
$paginate_links = paginate_links($pagination_args);
  if ($paginate_links) {
    echo "<nav class='custom-pagination col-md-12'>";
    echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
    echo $paginate_links;
    echo "</nav>";
  }
}


//Llamar a primera imagen del post del almanaque

function main_image_alma() {
  $files = get_children('post_parent='.get_the_ID().'&post_type=attachment
  &post_mime_type=image&order=desc');
  if($files) :
	  $keys = array_reverse(array_keys($files));
	  $j=0;
	  $num = $keys[$j];
	  $image=wp_get_attachment_image($num, 'portfolio-thumbnail', true);
	  $imagepieces = explode('"', $image);
	  $imagepath = $imagepieces[1];
	  $main=wp_get_attachment_url($num);
	  $template=get_template_directory();
	  $the_title=get_the_title();
	  print "$image";
  endif;
}


//Llamar a primera imagen del post genérico

function main_image() {
  $files = get_children('post_parent='.get_the_ID().'&post_type=attachment
  &post_mime_type=image&order=desc');
  if($files) :
	  $keys = array_reverse(array_keys($files));
	  $j=0;
	  $num = $keys[$j];
	  $image=wp_get_attachment_image($num, 'featured', true);
	  $imagepieces = explode('"', $image);
	  $imagepath = $imagepieces[1];
	  $main=wp_get_attachment_url($num);
	  $template=get_template_directory();
	  $the_title=get_the_title();
	  print "$image";
  endif;
}


// Scroll infinito de Jetpack

add_theme_support( 'infinite-scroll', array(
  'type'           => 'click',
  'container'      => 'infinite-scroll',
  'posts_per_page' => 8,
) );