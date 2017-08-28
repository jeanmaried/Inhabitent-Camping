<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

 /**
  * Create custom Taxonomy(ies)
  */

function my_taxonomies_product($cpt) {
  $labels = array(
   'name'              => _x( ''.$cpt.' ', 'taxonomy general name' ),
   'singular_name'     => _x( ''.$cpt.' ', 'taxonomy singular name' ),
   'search_items'      => __( 'Search '.$cpt.' ' ),
   'all_items'         => __( 'All '.$cpt.' ' ),
   'parent_item'       => __( 'Parent '.$cpt.' ' ),
   'parent_item_colon' => __( 'Parent '.$cpt.' Category:' ),
   'edit_item'         => __( 'Edit '.$cpt.' Category' ),
   'update_item'       => __( 'Update '.$cpt.' Category' ),
   'add_new_item'      => __( 'Add New '.$cpt.' Category' ),
   'new_item_name'     => __( 'New '.$cpt.' Category' ),
   'menu_name'         => __( ''.$cpt.' ' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );

  return $args;
};
?>