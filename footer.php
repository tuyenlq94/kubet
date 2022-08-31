<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kube
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer__wrap">
				<div class="site-footer__item"><?php dynamic_sidebar( 'footer-1' ) ?></div>
				<div class="site-footer__item"><?php dynamic_sidebar( 'footer-2' ) ?></div>
				<div class="site-footer__item"><?php dynamic_sidebar( 'footer-3' ) ?></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
