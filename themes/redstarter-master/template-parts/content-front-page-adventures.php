<?php $adventures = new WP_Query(array(
		"post_type"=> "adventures",
		"posts_per_page"=> 4
	));

	if ( $adventures->have_posts() ) {
		echo '<div class="main_box flex direction-row flex-wrap">';
		$i=0;
		while ( $adventures->have_posts() ) {
			$adventures->the_post();
			if ($i == 0){
				$i+=1;
			echo "<div class='big_box flex direction-column'style='background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(".get_the_post_thumbnail_url().");background-size:cover;background-position: bottom center'>";
			echo '<h1>'.get_the_title().'</h1>';
			}
			else if ($i==1){
				$i+=1;
			echo "<div class='second_box flex flex-wrap direction-row'>";
			echo "<div class='medium_box flex direction-column'style='background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(".get_the_post_thumbnail_url().");background-size:cover;background-position: bottom center'>";
			echo '<h2>'.get_the_title().'</h2>';
			}
			else {
			echo "<div class='small_box flex direction-column'style='background: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(".get_the_post_thumbnail_url().");background-size:cover;background-position: bottom center'>";
			echo '<h3>'.get_the_title().'</h3>';
			}

			echo '<a href="'.get_permalink().'"><div class="read3">READ MORE</div></a>';
			echo "</div></a>";
			}
			echo '</div>';

		echo '</div>';
		/* Restore original Post Data */
		wp_reset_postdata();
	}
	else {
		echo "no posts found";
	};?>