<?php

// Register Custom Post Type Schedule
if (!function_exists('dsmb_create_Schedule_cpt')) {
    function dsmb_create_Schedule_cpt()
    {

        $labels = array(
            'name' => _x('Schedules', 'Post Type General Name', 'dsmb'),
            'singular_name' => _x('Schedule', 'Post Type Singular Name', 'dsmb'),
            'menu_name' => _x('Schedules', 'Admin Menu text', 'dsmb'),
            'name_admin_bar' => _x('Schedule', 'Add New on Toolbar', 'dsmb'),
            'archives' => __('Schedule Archives', 'dsmb'),
            'attributes' => __('Schedule Attributes', 'dsmb'),
            'parent_item_colon' => __('Parent Schedule:', 'dsmb'),
            'all_items' => __('All Schedules', 'dsmb'),
            'add_new_item' => __('Add New Schedule', 'dsmb'),
            'add_new' => __('Add New', 'dsmb'),
            'new_item' => __('New Schedule', 'dsmb'),
            'edit_item' => __('Edit Schedule', 'dsmb'),
            'update_item' => __('Update Schedule', 'dsmb'),
            'view_item' => __('View Schedule', 'dsmb'),
            'view_items' => __('View Schedules', 'dsmb'),
            'search_items' => __('Search Schedule', 'dsmb'),
            'not_found' => __('Schedules Not found', 'dsmb'),
            'not_found_in_trash' => __('Schedules Not found in Trash', 'dsmb'),
            'featured_image' => __('Schedule Image', 'dsmb'),
            'set_featured_image' => __('Set Schedule image', 'dsmb'),
            'remove_featured_image' => __('Remove Schedule image', 'dsmb'),
            'use_featured_image' => __('Use as Schedule image', 'dsmb'),
            'insert_into_item' => __('Insert into Schedule', 'dsmb'),
            'uploaded_to_this_item' => __('Uploaded to this Schedule', 'dsmb'),
            'items_list' => __('Schedules list', 'dsmb'),
            'items_list_navigation' => __('Schedules list navigation', 'dsmb'),
            'filter_items_list' => __('Filter Schedules list', 'dsmb'),
        );
        $args = array(
            'label' => __('Schedule', 'dsmb'),
            'description' => __('', 'dsmb'),
            'labels' => $labels,
            'menu_icon' => 'dashicons-calendar',
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
        register_post_type('schedule', $args);

    }
}
add_action('init', 'dsmb_create_Schedule_cpt', 0);
