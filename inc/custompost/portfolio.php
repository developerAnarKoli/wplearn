<?php
// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'wplearn' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'wplearn' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'wplearn' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'wplearn' ),
		'archives' => __( 'portfolio Archives', 'wplearn' ),
		'attributes' => __( 'portfolio Attributes', 'wplearn' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'wplearn' ),
		'all_items' => __( 'All portfolios', 'wplearn' ),
		'add_new_item' => __( 'Add New portfolio', 'wplearn' ),
		'add_new' => __( 'Add New', 'wplearn' ),
		'new_item' => __( 'New portfolio', 'wplearn' ),
		'edit_item' => __( 'Edit portfolio', 'wplearn' ),
		'update_item' => __( 'Update portfolio', 'wplearn' ),
		'view_item' => __( 'View portfolio', 'wplearn' ),
		'view_items' => __( 'View portfolios', 'wplearn' ),
		'search_items' => __( 'Search portfolio', 'wplearn' ),
		'not_found' => __( 'Not found', 'wplearn' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wplearn' ),
		'featured_image' => __( 'Featured Image', 'wplearn' ),
		'set_featured_image' => __( 'Set featured image', 'wplearn' ),
		'remove_featured_image' => __( 'Remove featured image', 'wplearn' ),
		'use_featured_image' => __( 'Use as featured image', 'wplearn' ),
		'insert_into_item' => __( 'Insert into portfolio', 'wplearn' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'wplearn' ),
		'items_list' => __( 'portfolios list', 'wplearn' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'wplearn' ),
		'filter_items_list' => __( 'Filter portfolios list', 'wplearn' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'wplearn' ),
		'description' => __( 'portfolio', 'wplearn' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 10,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );

?>