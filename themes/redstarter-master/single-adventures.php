single-adventures.php
<?php
get_header();

echo '
<section class="banner" style="background: url('.get_banner().');background-size: cover;">
	<div class="no_logo flex justify-center">
	</div>
</section>';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			echo "<div class='flex direction-column'>";
			echo '<h1><strong>'.strtoupper(get_the_title()).'</strong></h1>';
			echo "<h3>";
			echo "BY ".strtoupper(get_the_author());
			echo "</h3>";
			$price = get_field("price");
			echo $price;
			the_content(); ?>
			<div class="flex direction-row">
				<a href=""><div class="read4"><i class="fa fa-facebook" aria-hidden="true"></i> LIKE</div></a>
				<a href=""><div class="read4"><i class="fa fa-twitter" aria-hidden="true"></i> TWEET</div></a>
				<a href=""><div class="read4"><i class="fa fa-pinterest-p" aria-hidden="true"></i> PIN</div></a>
			</div>
			</div>


		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>