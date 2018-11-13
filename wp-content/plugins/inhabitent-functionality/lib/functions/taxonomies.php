<?php
/**
 * TAXONOMIES
 */

// register two taxonomies to go with the post type
function wpmudev_register_product_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Product Categories',
		'singular_name'     => 'Product Category',
		'search_items'      => 'Search Product Categories',
		'all_items'         => 'All Product Categories',
		'edit_item'         => 'Edit Product Category',
		'update_item'       => 'Update Product Category',
		'add_new_item'      => 'Add New Product Category',
		'new_item_name'     => 'New Product Category',
		'menu_name'         => 'Product Categories'
	);
	// register taxonomy
	register_taxonomy( 'productcat', 'product', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'wpmudev_register_product_taxonomy' );
?>