<?php $journal = new WP_Query(array(
		"post_type"=> "journal",
		"posts_per_page"=> 3
	));

	if ( $journal->have_posts() ) {
		echo '<div class="journal_main flex direction-row flex wrap">';
		while ( $journal->have_posts() ) {
			$journal->the_post();
			
			echo "<div class='journal_box flex direction-column'>";
			echo '<div class="img_box" style="background: url('.get_the_post_thumbnail_url().');background-size:cover;background-position: bottom;">';
			echo '</div>';
			echo '<div class="journal_info">';
			echo '<p class="date_comment">';
			echo get_the_date();
			echo " / ";
			echo comments_number('0 Comments');
			echo "</p>";
			echo '<h4>'.get_the_title().'</h4>';
			echo '<div class="read2 flex justify-center"><a href="'.get_permalink().'">READ ENTRY</div>';
			echo "</a></div>";
			echo '</div>';
			
		}
		echo '</div>';
		/* Restore original Post Data */
		wp_reset_postdata();
	}
	else {
		echo "no posts found";
	}; ?>   