<div class="prod_box">
	<?php echo '<a href="'.get_permalink().'"><div class="prod_img" style="background: url('.get_the_post_thumbnail_url().');background-size:cover;background-position: bottom;"></div>'; ?>
	<div class="prod_info flex justify-between">
	<?php echo '<div class="prod_title">'.get_the_title()." ".'</div>
		<div class="prod_price">'.get_field('price').'</div>';?>
	</div>
</div></a>

			
