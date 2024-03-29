<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<p>created by <a href="http://purazumakoi.hatenablog.com/entry/2014/09/14/233143" target="_blank">purazumakoi</a></p>
<!--				<a href="--><?php //echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?><!--">--><?php //printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?><!--</a>-->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>