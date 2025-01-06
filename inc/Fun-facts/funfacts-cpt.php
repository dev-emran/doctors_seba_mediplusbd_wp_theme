<?php

// Register Custom Post Type Fun Fact
if (!function_exists('dsmb_create_fun_facts_cpt')) {
    function dsmb_create_fun_facts_cpt()
    {

        $labels = array(
            'name' => _x('Fun Facts', 'Post Type General Name', 'dsmb'),
            'singular_name' => _x('Fun Fact', 'Post Type Singular Name', 'dsmb'),
            'menu_name' => _x('Fun Facts', 'Admin Menu text', 'dsmb'),
            'name_admin_bar' => _x('Fun Fact', 'Add New on Toolbar', 'dsmb'),
            'archives' => __('Fun Fact Archives', 'dsmb'),
            'attributes' => __('Fun Fact Attributes', 'dsmb'),
            'parent_item_colon' => __('Parent Fun Fact:', 'dsmb'),
            'all_items' => __('All Fun Facts', 'dsmb'),
            'add_new_item' => __('Add New Fun Fact', 'dsmb'),
            'add_new' => __('Add New', 'dsmb'),
            'new_item' => __('New Fun Fact', 'dsmb'),
            'edit_item' => __('Edit Fun Fact', 'dsmb'),
            'update_item' => __('Update Fun Fact', 'dsmb'),
            'view_item' => __('View Fun Fact', 'dsmb'),
            'view_items' => __('View Fun Facts', 'dsmb'),
            'search_items' => __('Search Fun Fact', 'dsmb'),
            'not_found' => __('Fun Facts Not found', 'dsmb'),
            'not_found_in_trash' => __('Fun Facts Not found in Trash', 'dsmb'),
            'Fun Factd_image' => __('Fun Fact Image', 'dsmb'),
            'set_Fun Factd_image' => __('Set Fun Fact image', 'dsmb'),
            'remove_Fun Factd_image' => __('Remove Fun Fact image', 'dsmb'),
            'use_Fun Factd_image' => __('Use as Fun Fact image', 'dsmb'),
            'insert_into_item' => __('Insert into Fun Fact', 'dsmb'),
            'uploaded_to_this_item' => __('Uploaded to this Fun Fact', 'dsmb'),
            'items_list' => __('Fun Facts list', 'dsmb'),
            'items_list_navigation' => __('Fun Facts list navigation', 'dsmb'),
            'filter_items_list' => __('Filter Fun Facts list', 'dsmb'),
        );
        $args = array(
            'label' => __('Fun Fact', 'dsmb'),
            'description' => __('', 'dsmb'),
            'labels' => $labels,
            'supports' => ['title'],
            'menu_icon' => 'dashicons-welcome-write-blog',
            // 'taxonomies' => array(),
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
        register_post_type('fun_fact', $args);

    }
}
add_action('init', 'dsmb_create_fun_facts_cpt', 0);
