<?php
function register(){
	$a = array(
		"adventures" => " ",
		"journal" => " ",
		"products" => "product_type",
	);
	foreach ($a as $key => $value){
		$args= get_post_args($key);
		$tax_args = my_taxonomies_product($value);
		register_post_type($key, $args, 0);
		register_taxonomy($value , $key, $tax_args);
	}
};

add_action( 'init', 'register', 0 );?>