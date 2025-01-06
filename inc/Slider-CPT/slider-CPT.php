<?php

	// Register Custom Post Type Slider
if(!function_exists('dsmb_create_slider_cpt')){
	function dsmb_create_slider_cpt() {

		$labels = array(
			'name' => _x( 'Sliders', 'Post Type General Name', 'dsmb' ),
			'singular_name' => _x( 'Slider', 'Post Type Singular Name', 'dsmb' ),
			'menu_name' => _x( 'Sliders', 'Admin Menu text', 'dsmb' ),
			'name_admin_bar' => _x( 'Slider', 'Add New on Toolbar', 'dsmb' ),
			'archives' => __( 'Slider Archives', 'dsmb' ),
			'attributes' => __( 'Slider Attributes', 'dsmb' ),
			'parent_item_colon' => __( 'Parent Slider:', 'dsmb' ),
			'all_items' => __( 'All Sliders', 'dsmb' ),
			'add_new_item' => __( 'Add New Slider', 'dsmb' ),
			'add_new' => __( 'Add New', 'dsmb' ),
			'new_item' => __( 'New Slider', 'dsmb' ),
			'edit_item' => __( 'Edit Slider', 'dsmb' ),
			'update_item' => __( 'Update Slider', 'dsmb' ),
			'view_item' => __( 'View Slider', 'dsmb' ),
			'view_items' => __( 'View Sliders', 'dsmb' ),
			'search_items' => __( 'Search Slider', 'dsmb' ),
			'not_found' => __( 'Sliders Not found', 'dsmb' ),
			'not_found_in_trash' => __( 'Sliders Not found in Trash', 'dsmb' ),
			'featured_image' => __( 'Slider Image(1600X830)', 'dsmb' ),
			'set_featured_image' => __( 'Set Slider image', 'dsmb' ),
			'remove_featured_image' => __( 'Remove Slider image', 'dsmb' ),
			'use_featured_image' => __( 'Use as Slider image', 'dsmb' ),
			'insert_into_item' => __( 'Insert into Slider', 'dsmb' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'dsmb' ),
			'items_list' => __( 'Sliders list', 'dsmb' ),
			'items_list_navigation' => __( 'Sliders list navigation', 'dsmb' ),
			'filter_items_list' => __( 'Filter Sliders list', 'dsmb' ),
		);
		$args = array(
			'label' => __( 'Slider', 'dsmb' ),
			'description' => __( '', 'dsmb' ),
			'labels' => $labels,
			'menu_icon' => 'dashicons-desktop',
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
			'capability_type' => 'post',
		);
		register_post_type( 'slider', $args );

	}
}
add_action( 'init', 'dsmb_create_slider_cpt', 0 );