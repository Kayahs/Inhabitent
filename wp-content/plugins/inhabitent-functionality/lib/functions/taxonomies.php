<?php
/**
 * TAXONOMIES
 */

// register two taxonomies to go with the post type

function create_labels($label) {
	// set up labels
	$labels = array(
		'name'              => "$label Categories",
		'singular_name'     => "$label Category",
		'search_items'      => "Search $label Categories",
		'all_items'         => "All $label Categories",
		'edit_item'         => "Edit $label Category",
		'update_item'       => "Update $label Category",
		'add_new_item'      => "Add New $label Category",
		'new_item_name'     => "New $label Category",
		'menu_name'         => "$label Categories"
	);

	return $labels;
}
function register_taxonomies() {
	// register taxonomy
	register_taxonomy( 'productcat', 'product', array(
		'hierarchical' => true,
		'labels' => create_labels("Product"),
		'query_var' => true,
		'show_admin_column' => true
	) );

	// register taxonomy
	register_taxonomy( 'journalcat', 'journal', array(
		'hierarchical' => true,
		'labels' => create_labels("Journal"),
		'query_var' => true,
		'show_admin_column' => true
	) );

	// register taxonomy
	register_taxonomy( 'adventurecat', 'adventure', array(
		'hierarchical' => true,
		'labels' => create_labels("Adventure"),
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'register_taxonomies' );
?>