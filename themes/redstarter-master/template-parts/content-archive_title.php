<?php $cat = get_term($term);?>

<?php if (get_post_type()== "adventures") : ?>
	<h1>LATEST ADVENTURES</h1>

<?php elseif (is_tax("product_type", $cat)) :
	echo '<h1 class="flex justify-center">'.strtoupper($term).'</h1>';
	echo term_description( $term_id, $taxonomy ); ?>

<?php else : ?>
	<h1 class="flex justify-center">SHOP STUFF</h1>
<?php
	$terms = get_terms('product_type');
            echo '<div class="flex shop_stuff_product_page justify-around">';
            foreach ($terms as $term) {
                echo '<a href="'.get_term_link($term->slug, 'product_type').'">'.$term->name.'</a>';
            }
            echo '</div>';
?>
<?php endif; ?>