<?php 
// Register Custom Post Type client
function create_client_cpt() {

	$labels = array(
		'name' => _x( 'clients', 'Post Type General Name', 'wplearn' ),
		'singular_name' => _x( 'client', 'Post Type Singular Name', 'wplearn' ),
		'menu_name' => _x( 'clients', 'Admin Menu text', 'wplearn' ),
		'name_admin_bar' => _x( 'client', 'Add New on Toolbar', 'wplearn' ),
		'archives' => __( 'client Archives', 'wplearn' ),
		'attributes' => __( 'client Attributes', 'wplearn' ),
		'parent_item_colon' => __( 'Parent client:', 'wplearn' ),
		'all_items' => __( 'All clients', 'wplearn' ),
		'add_new_item' => __( 'Add New client', 'wplearn' ),
		'add_new' => __( 'Add New', 'wplearn' ),
		'new_item' => __( 'New client', 'wplearn' ),
		'edit_item' => __( 'Edit client', 'wplearn' ),
		'update_item' => __( 'Update client', 'wplearn' ),
		'view_item' => __( 'View client', 'wplearn' ),
		'view_items' => __( 'View clients', 'wplearn' ),
		'search_items' => __( 'Search client', 'wplearn' ),
		'not_found' => __( 'Not found', 'wplearn' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wplearn' ),
		'featured_image' => __( 'Featured Image', 'wplearn' ),
		'set_featured_image' => __( 'Set featured image', 'wplearn' ),
		'remove_featured_image' => __( 'Remove featured image', 'wplearn' ),
		'use_featured_image' => __( 'Use as featured image', 'wplearn' ),
		'insert_into_item' => __( 'Insert into client', 'wplearn' ),
		'uploaded_to_this_item' => __( 'Uploaded to this client', 'wplearn' ),
		'items_list' => __( 'clients list', 'wplearn' ),
		'items_list_navigation' => __( 'clients list navigation', 'wplearn' ),
		'filter_items_list' => __( 'Filter clients list', 'wplearn' ),
	);
	$args = array(
		'label' => __( 'client', 'wplearn' ),
		'description' => __( 'client', 'wplearn' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'client', $args );

}
add_action( 'init', 'create_client_cpt', 0 );
?>