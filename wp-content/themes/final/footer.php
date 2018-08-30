<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package final
 */

?>

	</div><!-- #content -->

	

	<footer id="colophon" class="site-footer">

		<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1">
			<?php
			if(is_active_sidebar('footer sidebar')){
			dynamic_sidebar('footer sidebar');
			}
			?>
		</div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'final' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'final' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'final' ), 'Final Theme', '<a href="https://github.com/sorinHus/luna.git">Sorin Hus</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
