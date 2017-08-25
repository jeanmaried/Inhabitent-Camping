home.php
<?php get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main flex direction-row" role="main">

<?php $journal = new WP_Query(array(
		"post_type"=> "journal",
	));

	echo "<div class='split_page'>";
	if ( $journal->have_posts() ) {
		while ( $journal->have_posts() ) {
			$journal->the_post();
			echo "<div class='home_box flex direction-column'>";
			echo '<div style="background: url('.get_the_post_thumbnail_url().');background-size:cover;background-position: bottom;"><h1 class="home_title">'.get_the_title().'</h1><div class="positioning flex justfiy-end"><div class="home_date flex justify-center">'.get_the_date("j F Y")." / ".get_the_author()." / ".get_comments_number()." Comments".'</div></div>';
			echo '</div>';
			echo '<div class="excerpt">';
			echo get_the_excerpt();
			echo '</div>';
			echo '<a href="'.get_permalink().'"><div class="read2">READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>';
			echo "</div></a>";
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	}
	else {
		echo "no posts found";
	}; 
	echo "</div>";
?>

<div>
	<?php get_sidebar(); ?>
</div>

	</main>
</section>
<?php get_footer(); ?>