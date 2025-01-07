<?php

// Register Custom Post Type Portfolio
if (!function_exists('dsmb_create_portfolio_cpt')) {
    function dsmb_create_portfolio_cpt()
    {

        $labels = array(
            'name' => _x('Portfolios', 'Post Type General Name', 'dsmb'),
            'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'dsmb'),
            'menu_name' => _x('Portfolios', 'Admin Menu text', 'dsmb'),
            'name_admin_bar' => _x('Portfolio', 'Add New on Toolbar', 'dsmb'),
            'archives' => __('Portfolio Archives', 'dsmb'),
            'attributes' => __('Portfolio Attributes', 'dsmb'),
            'parent_item_colon' => __('Parent Portfolio:', 'dsmb'),
            'all_items' => __('All Portfolios', 'dsmb'),
            'add_new_item' => __('Add New Portfolio', 'dsmb'),
            'add_new' => __('Add New', 'dsmb'),
            'new_item' => __('New Portfolio', 'dsmb'),
            'edit_item' => __('Edit Portfolio', 'dsmb'),
            'update_item' => __('Update Portfolio', 'dsmb'),
            'view_item' => __('View Portfolio', 'dsmb'),
            'view_items' => __('View Portfolios', 'dsmb'),
            'search_items' => __('Search Portfolio', 'dsmb'),
            'not_found' => __('Portfolios Not found', 'dsmb'),
            'not_found_in_trash' => __('Portfolios Not found in Trash', 'dsmb'),
            'featured_image' => __('Portfolio Image(320X253)', 'dsmb'),
            'set_featured_image' => __('Set Portfolio image', 'dsmb'),
            'remove_featured_image' => __('Remove Portfolio image', 'dsmb'),
            'use_featured_image' => __('Use as Portfolio image', 'dsmb'),
            'insert_into_item' => __('Insert into Portfolio', 'dsmb'),
            'uploaded_to_this_item' => __('Uploaded to this Portfolio', 'dsmb'),
            'items_list' => __('Portfolios list', 'dsmb'),
            'items_list_navigation' => __('Portfolios list navigation', 'dsmb'),
            'filter_items_list' => __('Filter Portfolios list', 'dsmb'),
        );
        $args = array(
            'label' => __('Portfolio', 'dsmb'),
            'description' => __('', 'dsmb'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-portfolio',
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
        register_post_type('portfolio', $args);

    }
}
add_action('init', 'dsmb_create_portfolio_cpt', 0);
