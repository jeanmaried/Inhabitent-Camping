page-find-us.php

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<?php get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main flex direction-row" role="main">

		<div class='split_page'>

			<?php echo '<h1><strong>'.get_the_title().'</strong></h1>';?>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6831203808833!2d-123.14036234911319!3d49.263451779953236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1503620859503" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile;?>


			<form action="" class="flex direction-column">
  				<div>NAME <span class="required">*</span></div><input type="text" name="name"><br>
  				<div>EMAIL <span class="required">*</span></div><input type="email" name="email"><br>
  				<div>WEBSITE <span class="required">*</span></div><input type="text" name="email"><br>
  				<div>MESSAGE <span class="required">*</span></div><input type="text" name="message"><br>
  				<input type="submit" value="Submit">
			</form>

		</div><!-- split-page -->

		<div>
			<?php get_sidebar(); ?>
		</div>

	</main>
</div>

<?php get_footer(); ?>