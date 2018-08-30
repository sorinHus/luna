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

	<div class="row">
		<div class="footer-column">

			<div id="footer-1">

				<?php
				if(is_active_sidebar('footer-1')){
					dynamic_sidebar('footer-1');
				}
				?>
			</div>

		</div>

		<div class="footer-column">

			<div id="footer-2">

				<?php
				if(is_active_sidebar('footer-2')){
					dynamic_sidebar('footer-2');
				}
				?>
			</div>
		</div>

		<div class="footer-column">

			<div id="footer-3">

				<?php
				if(is_active_sidebar('footer-3')){
					dynamic_sidebar('footer-3');
				}
				?>

			</div>
		</div>

		<div id="footer-4">

			<?php
			if(is_active_sidebar('footer-4')){
				dynamic_sidebar('footer-4');
			}
			?>

		</div>


	</div>


	<aside id="sidebar-2">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-2') ) ?>
	</aside>

	<div class="row">

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

	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
