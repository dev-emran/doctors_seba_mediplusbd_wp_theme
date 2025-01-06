<?php
if (!defined('ABSPATH')) {die;}
$prefix = 'dsmb_theme_options';

CSF::createOptions($prefix, array(
    'menu_title' => __('DSMB Options', 'dsmb'),
    'menu_slug' => 'dsmb-options',
    'menu_icon' => 'dashicons-screenoptions',
    'menu_position' => 70,
    'theme' => 'light',
));

//contact section
CSF::createSection($prefix, array(
    'title' => __('Contact', 'dsmb'),
    'icon' => 'fas fa-envelope',
    'fields' => array(

        // A text field

        array(
            'id' => 'phone_no',
            'type' => 'text',
            'title' => __('Phone No', 'dsmb'),
            'placeholder' => esc_attr('Enter Phone no'),
        ),

        array(
            'id' => 'email',
            'type' => 'text',
            'title' => __('Email', 'dsmb'),
            'placeholder' => esc_attr('Enter your email'),
        ),

        array(
            'id' => 'addresses',
            'type' => 'textarea',
            'title' => __('Address', 'dsmb'),
            'placeholder' => 'Enter address',
        ),
    ),
));

//copyright section
CSF::createSection($prefix, array(
    'title' => 'Copyrights',
    'icon' => 'fas fa-copyright',
    'fields' => array(
        array(
            'id' => 'copy_right',
            'type' => 'textarea',
            'title' => __('Copyrights Text', 'dsmb'),
            'subtitle' => __('without year(year is automatically generated)', 'dsmb'),
            'placeholder' => 'Enter Copyrights text',
        ),

        array(
            'id' => 'dev_name',
            'type' => 'text',
            'title' => __('Developer Name', 'dsmb'),
            'placeholder' => 'Enter developer name',
        ),
        array(
            'id' => 'dev_url',
            'type' => 'text',
            'title' => __('Developer Link', 'dsmb'),
            'placeholder' => 'Enter developer social link',
        ),

    ),
));

//Featured heading section
CSF::createSection($prefix, array(
    'title' => 'Features Head',
    'icon' => 'fa fa-square',
    'fields' => array(
        array(
            'id' => 'features_title',
            'type' => 'textarea',
            'title' => __('Title', 'dsmb'),
            'desc' => __('feature section title(within 10 words)', 'dsmb'),
            'placeholder' => 'Enter features title',
        ),

        array(
            'id' => 'features_desc',
            'type' => 'text',
            'title' => __('Features Short Desc', 'dsmb'),
            'placeholder' => 'Enter features short desc',
        ),

        array(
            'id' => 'features_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',

        ),

    ),
));

//Fun facts section
CSF::createSection($prefix, array(
    'title' => 'Fun Facts Settings',
    'icon' => 'fa fa-gear',
    'fields' => array(
        array(
            'id' => 'fun_facts_section',
            'type' => 'upload',
            'title' => __('Background Image', 'dsmb'),
            'desc' => __('Please use image (1600X353) pixels'),
            'preview' => true,
            'url' => false,
            'library' => 'image',
        ),

    ),
));

//Who we are section
CSF::createSection($prefix, array(
    'title' => 'Who we are',
    'id' => 'who_we_are',
    'icon' => 'fa fa-question-circle',

));

CSF::createSection($prefix, array(
    'title' => 'Header Section',
    'icon' => 'fa fa-header',
    'parent' => 'who_we_are',
    'fields' => array(
        array(
            'id' => 'who_we_are_title',
            'type' => 'text',
            'title' => __('Who We Are Title', 'dsmb'),
            'desc' => __('Please title use within 10 words'),

        ),

        array(
            'id' => 'who_we_are_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',

        ),

        array(
            'id' => 'who_we_are_desc',
            'type' => 'textarea',
            'title' => __('Who We Are Short Desc', 'dsmb'),
            'desc' => __('Please title use within 15 words'),
            'placeholder' => 'Enter short description',

        ),

    ),
));

CSF::createSection($prefix, array(
    'title' => 'Main Section',
    'icon' => 'fa fa-home',
    'parent' => 'who_we_are',
    'fields' => array(
        array(
            'id' => 'who_we_are_title_two',
            'type' => 'text',
            'title' => __('Who We Are Title two', 'dsmb'),
            'desc' => __('Please title use within 10 words'),

        ),

        array(
            'id' => 'who_we_are_long_desc',
            'type' => 'textarea',
            'title' => __('Who We Are Desc', 'dsmb'),
            'desc' => __('Please title use within 15 words'),
            'placeholder' => 'Enter short description',

        ),

        array(

            'id' => 'who_we_are_left_list',
            'title' => __('Left Side List', 'dsmb'),
            'type' => 'group',
            'max' => 3,
            'fields' => array(
                ['id' => 'who_we_are_left_list_item',
                    'title' => __('Left list item', 'dsmb'),
                    'type' => 'text',
                    'placeholder' => 'Enter list item'],
            ),
        ),

        array(

            'id' => 'who_we_are_right_list',
            'title' => __('Right Side List', 'dsmb'),
            'type' => 'group',
            'max' => 3,
            'fields' => array(
                ['id' => 'who_we_are_right_list_item',
                    'title' => __('Right list item', 'dsmb'),
                    'type' => 'text',
                    'placeholder' => 'Enter list item',
                ],
            ),
        ),

        array(
            'id' => 'who_we_are_video_bg_image',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Video Background Image', 'dsmb'),
            'desc'  => __('For better view (2560 by 1200 pixels)'),
            'preview' => 'true',
        ),

        array(
            'id' => 'who_we_are_video_url',
            'type' => 'text',
            'title' => __('Video Url', 'dsmb'),
            'placeholder' => 'Enter Video Url',
            'desc'  => 'Past youtube video url',
            'attributes'    => [
                'required'  => 'required',
            ],
        ),

    ),
));
