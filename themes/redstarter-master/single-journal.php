single-journal.php

<?php get_header();?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="flex direction-row">


		<div class='split_page'>

		<?php while ( have_posts() ) : the_post(); ?>

			<div class='home_box flex direction-column'>
			<?php echo '<div style="background: url('.get_the_post_thumbnail_url().');background-size:cover;background-position: bottom;"><h1 class="home_title">'.get_the_title().'</h1><div class="positioning flex justfiy-end"><div class="home_date flex justify-center">'.get_the_date("j F Y")." / ".get_the_author()." / ".get_comments_number()." Comments".'</div></div>';?>
			</div>
			<div class="excerpt">
			<?php echo get_the_content(); ?>
			</div>
			<div class="flex direction-row">
				<a href=""><div class="read4"><i class="fa fa-facebook" aria-hidden="true"></i> LIKE</div></a>
				<a href=""><div class="read4"><i class="fa fa-twitter" aria-hidden="true"></i> TWEET</div></a>
				<a href=""><div class="read4"><i class="fa fa-pinterest-p" aria-hidden="true"></i> PIN</div></a>
			</div>
			</div>
			

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

<form action="" class="flex direction row">
  NAME<br><input type="text" name="name"><br>
  EMAIL <input type="email" name="email"><br>
  WEBSITE <input type="text" name="email"><br>
  <input type="submit" value="Submit">
</form>

		</main><!-- #main -->
	</div><!-- #primary -->

<div>
	<?php get_sidebar(); ?>
</div>

</div>

<?php get_footer(); ?>
