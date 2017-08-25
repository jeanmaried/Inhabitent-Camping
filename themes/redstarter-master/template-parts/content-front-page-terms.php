<?php $terms = get_terms('product_type');
            echo '<div class="flex align-items-center text-align direction-row justify-between">';
            foreach ($terms as $term) {
            	echo "<div class='shop_stuff flex justify-center align-items-center direction-column'>";
            	echo '<img src="http://localhost:8888/project-wordpress/wp-content/themes/redstarter-master/assets/images/product-type-icons/'.$term->slug.'.svg">';
            	echo '<div>'.(get_term_by('slug', $term->name, 'product_type')->description).'</div>';
                echo '<div class="read"><a href="'.get_term_link($term->slug, 'product_type').'">'.$term->name.' STUFF</a></div>';
                echo "</div>";
            }
            echo '</div>'; ?>