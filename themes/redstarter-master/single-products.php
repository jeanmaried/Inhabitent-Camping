single-products.php
<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<?php get_banner();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="flex flex-wrap justify-between">
			<div class='product-img'>
			<?php the_post_thumbnail(); ?>
			</div>
			<div class='product-info flex direction-column'>
			<?php echo '<h1>'.get_the_title().'</h1>'; ?>
			<?php echo get_field("price"); ?>
			<?php the_content(); ?>
			<div class="flex direction-row">
				<a href=""><div class="read4"><i class="fa fa-facebook" aria-hidden="true"></i> LIKE</div></a>
				<a href=""><div class="read4"><i class="fa fa-twitter" aria-hidden="true"></i> TWEET</div></a>
				<a href=""><div class="read4"><i class="fa fa-pinterest-p" aria-hidden="true"></i> PIN</div></a>
			</div>
			</div>
			</div>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>