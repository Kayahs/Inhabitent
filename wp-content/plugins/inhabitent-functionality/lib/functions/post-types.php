<?php
/**
 * POST TYPES
 *
 */
 //register custom post type to work with
function create_labels_post_types($label) {
  // set up labels
  $labels = array(
    'name' => $label . 's',
      'singular_name' => $label,
      'add_new' => 'Add New ' . $label,
      'add_new_item' => 'Add New ' . $label,
      'edit_item' => 'Edit ' . $label,
      'new_item' => 'New ' . $label,
      'all_items' => 'All ' . $label . 's',
      'view_item' => 'View ' . $label,
      'search_items' => 'Search ' . $label . 's',
      'not_found' =>  'No ' . $label . 's Found',
      'not_found_in_trash' => 'No ' . $label . 's found in Trash', 
      'parent_item_colon' => '',
      'menu_name' => $label . 's',
    );
    return $labels;
}
function create_post_types() {
  
    //register post type
  register_post_type( 'product', array(
    'labels' => create_labels_post_types("Product"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'products' ),
    )
  );

  register_post_type( 'adventure', array(
    'labels' => create_labels_post_types("Adventure"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'author', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'adventures' ),
    )
  );

  register_post_type( 'journal', array(
    'labels' => create_labels_post_types("Journal"),
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'author', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),  
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'journals' ),
    )
  );
}
add_action( 'init', 'create_post_types' );

// Add your custom post types here...
