<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="wrapper">

    	<nav class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
										<div class="blog-title text-center">
											<a href=#><?php bloginfo('name'); ?></a>
										</div>
                    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                        <span class="logo" id="anima_hamman">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="">
                        </span>
                    </a>
                </div>

								<div class="collapse navbar-collapse navbar-main-collapse text-center">
									<ul class="nav navbar-nav nav-center">
										<?php $args = array('title_li' => '',); wp_list_categories($args);?>
									</ul>
								</div>

                <!-- <div class="collapse navbar-collapse navbar-main-collapse text-center">
                    <ul class="nav navbar-nav nav-center">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li><a href="subhome.html">Córdoba</a></li>
                        <li><a href="subhome.html">Granada</a></li>
                        <li><a href="subhome.html">Madrid</a></li>
                        <li><a href="subhome.html">Málaga</a></li>
                        <li class="menu-club"><a href="club-hamman.html">CLUB HAMMAM</a></li>
                        <li class="menu-profesional nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-expanded="false">Zona profesional</a>
                            <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                            	<a class="dropdown-item" href="zona-profesional.html">Córdoba</a>
                                <a class="dropdown-item" href="zona-profesional.html">Granada</a>
                                <a class="dropdown-item" href="zona-profesional.html">Madrid</a>
                                <a class="dropdown-item" href="zona-profesional.html">Málaga</a>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>


	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<!-- <header id="masthead" class="site-header" role="banner">
		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div>
			</div>
		<?php endif; ?>

	</header> -->
