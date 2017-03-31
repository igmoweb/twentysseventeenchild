<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-sm-4 submenu">
	<ul class="list-unstyled submenu-options" id="submenu-options">
	<?php $args = array('title_li' => '',);
		wp_list_categories($args);?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</ul>
</div>
