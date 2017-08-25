<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();

echo '<section class="banner" style="background: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.15)), url('.get_banner().');background-size: cover; background-repeat: no-repeat; background-position: bottom;">
	<div class="about flex justify-center">
		<h1>ABOUT</h1>
	</div>
</section>';
?>

<main class="about_text flex justify-center text-align direction-column">
	<?php echo '<h1>'.get_post_meta(get_the_id(),"second_title").'</h1>';?>

	<?php get_the_content();?>

	<h1>OUR TEAM</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p>voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute.</p>

</main>

<?php get_footer(); ?>