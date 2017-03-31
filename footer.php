<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<footer id="footer">
	<div class="container">
		<div class="row footer-up">
			<?php dynamic_sidebar( 'footer-nav' ); ?>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

<!-- <script type="text/javascript">
(function($) {
	$(window).scroll(function() {
	    if ($(".navbar").offset().top > 50) {
	        $(".navbar-fixed-top").addClass("top-nav-collapse");
	    } else {
	        $(".navbar-fixed-top").removeClass("top-nav-collapse");
	    }
	});
})( jQuery );
</script> -->

<script>
jQuery(document).ready(function($) {
	var divs = $('div.scroll-op');
	$(window).scroll(function(){
	   var percent = $(document).scrollTop() / ($(document).height() - $(window).height());
	   divs.css('opacity', 0.5 + percent * 3);
	});
});
</script>

</body>
</html>
