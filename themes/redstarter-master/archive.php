archive.php

<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main product_title flex direction-column align-items-center" role="main">

		<?php get_template_part('template-parts/content', 'archive_title');?>

		<div class="product_grid flex direction-row justify-between flex-wrap">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/content', get_post_type());?>


		<?php endwhile; ?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>