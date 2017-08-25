<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    		<div id="secondary" class="widget-area flex direction-row flex-wrap" role="complementary">
    		<?php dynamic_sidebar( 'sidebar-1' ); ?>
    		</div>
		<?php endif; ?>
<?php echo '<div class="flex justify-center">COPYRIGHT © '.date('Y').' INHABITENT</div>';?>

	</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>