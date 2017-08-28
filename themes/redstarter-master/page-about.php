<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

echo '<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('.get_banner().');background-size: cover; background-repeat: no-repeat; background-position: bottom;">
	<div class="about flex justify-center">
		<h1>'.get_the_title().'</h1>
	</div>
</section>';
?>

<main class="about_text flex justify-center text-align direction-column">

	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content();?>
	<?php endwhile;?>


</main>

<?php get_footer(); ?>