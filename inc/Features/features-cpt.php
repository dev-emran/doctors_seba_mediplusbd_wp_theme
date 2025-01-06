<?php

// Register Custom Post Type Feature
if (!function_exists('dsmb_create_feature_cpt')) {
    function dsmb_create_feature_cpt()
    {

        $labels = array(
            'name' => _x('Features', 'Post Type General Name', 'dsmb'),
            'singular_name' => _x('Feature', 'Post Type Singular Name', 'dsmb'),
            'menu_name' => _x('Features', 'Admin Menu text', 'dsmb'),
            'name_admin_bar' => _x('Feature', 'Add New on Toolbar', 'dsmb'),
            'archives' => __('Feature Archives', 'dsmb'),
            'attributes' => __('Feature Attributes', 'dsmb'),
            'parent_item_colon' => __('Parent Feature:', 'dsmb'),
            'all_items' => __('All Features', 'dsmb'),
            'add_new_item' => __('Add New Feature', 'dsmb'),
            'add_new' => __('Add New', 'dsmb'),
            'new_item' => __('New Feature', 'dsmb'),
            'edit_item' => __('Edit Feature', 'dsmb'),
            'update_item' => __('Update Feature', 'dsmb'),
            'view_item' => __('View Feature', 'dsmb'),
            'view_items' => __('View Features', 'dsmb'),
            'search_items' => __('Search Feature', 'dsmb'),
            'not_found' => __('Features Not found', 'dsmb'),
            'not_found_in_trash' => __('Features Not found in Trash', 'dsmb'),
            'featured_image' => __('Feature Image', 'dsmb'),
            'set_featured_image' => __('Set Feature image', 'dsmb'),
            'remove_featured_image' => __('Remove Feature image', 'dsmb'),
            'use_featured_image' => __('Use as Feature image', 'dsmb'),
            'insert_into_item' => __('Insert into Feature', 'dsmb'),
            'uploaded_to_this_item' => __('Uploaded to this Feature', 'dsmb'),
            'items_list' => __('Features list', 'dsmb'),
            'items_list_navigation' => __('Features list navigation', 'dsmb'),
            'filter_items_list' => __('Filter Features list', 'dsmb'),
        );
        $args = array(
            'label' => __('Feature', 'dsmb'),
            'description' => __('', 'dsmb'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-archive',
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
        register_post_type('feature', $args);

    }
}
add_action('init', 'dsmb_create_feature_cpt', 0);
