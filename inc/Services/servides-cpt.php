<?php

// Register Custom Post Type Service
if (!function_exists('dsmb_create_service_cpt')) {
    function dsmb_create_service_cpt()
    {

        $labels = array(
            'name' => _x('Services', 'Post Type General Name', 'dsmb'),
            'singular_name' => _x('Service', 'Post Type Singular Name', 'dsmb'),
            'menu_name' => _x('Services', 'Admin Menu text', 'dsmb'),
            'name_admin_bar' => _x('Service', 'Add New on Toolbar', 'dsmb'),
            'archives' => __('Service Archives', 'dsmb'),
            'attributes' => __('Service Attributes', 'dsmb'),
            'parent_item_colon' => __('Parent Service:', 'dsmb'),
            'all_items' => __('All Services', 'dsmb'),
            'add_new_item' => __('Add New Service', 'dsmb'),
            'add_new' => __('Add New', 'dsmb'),
            'new_item' => __('New Service', 'dsmb'),
            'edit_item' => __('Edit Service', 'dsmb'),
            'update_item' => __('Update Service', 'dsmb'),
            'view_item' => __('View Service', 'dsmb'),
            'view_items' => __('View Services', 'dsmb'),
            'search_items' => __('Search Service', 'dsmb'),
            'not_found' => __('Services Not found', 'dsmb'),
            'not_found_in_trash' => __('Services Not found in Trash', 'dsmb'),
            'featured_image' => __('Service Image', 'dsmb'),
            'set_featured_image' => __('Set Service image', 'dsmb'),
            'remove_featured_image' => __('Remove Service image', 'dsmb'),
            'use_featured_image' => __('Use as Service image', 'dsmb'),
            'insert_into_item' => __('Insert into Service', 'dsmb'),
            'uploaded_to_this_item' => __('Uploaded to this Service', 'dsmb'),
            'items_list' => __('Services list', 'dsmb'),
            'items_list_navigation' => __('Services list navigation', 'dsmb'),
            'filter_items_list' => __('Filter Services list', 'dsmb'),
        );
        $args = array(
            'label' => __('Service', 'dsmb'),
            'description' => __('', 'dsmb'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-excerpt-view',
            'supports' => array('title', 'editor'),
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
        register_post_type('service', $args);

    }
}
add_action('init', 'dsmb_create_service_cpt', 0);
