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


//Site logo
CSF::createSection($prefix, array(
    'title' => __('Site Logo', 'dsmb'),
    'icon' => 'fa fa-wpexplorer',
    'fields' => array(
        array(
            'id' => 'dsmb_main_logo',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Select Logo', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(178 by 37 pixels)',
        ),
  
    ),
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
            'type' => 'text',
            'title' => __('Title', 'dsmb'),
            'desc' => __('feature section title(within 10 words)', 'dsmb'),
            'placeholder' => 'Enter features title',
        ),

        array(
            'id' => 'features_desc',
            'type' => 'textarea',
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

//sub menu
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

//sub menu
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
            'desc' => __('For better view (2560 by 1200 pixels)'),
            'preview' => 'true',
        ),

        array(
            'id' => 'who_we_are_video_url',
            'type' => 'text',
            'title' => __('Video Url', 'dsmb'),
            'placeholder' => 'Enter Video Url',
            'desc' => 'Past youtube video url',
            'attributes' => [
                'required' => 'required',
            ],
        ),

    ),
));

//Call to action section
CSF::createSection($prefix, [
    'id' => 'call_to_action_section',
    'title' => __('Call To Action', 'dsmb'),
    'icon' => 'fa fa-shield',
    'fields' => [

        [
            'id' => 'cta_title',
            'type' => 'text',
            'title' => __('Title', 'dsmb'),
            'desc' => __('Please title use within 15 words'),
            'placeholder' => 'Enter title',
        ],

        [
            'id' => 'cta_short_desc',
            'type' => 'textarea',
            'title' => __('Short Desc', 'dsmb'),
            'desc' => __('Please title use within 30 words'),
            'placeholder' => 'Enter short description',
        ],

        [
            'id' => 'cta_button_one_text',
            'type' => 'text',
            'title' => __('Button One Text', 'dsmb'),
            'placeholder' => 'Enter button one text',
        ],

        [
            'id' => 'cta_button_one_url',
            'type' => 'text',
            'title' => __('Button One Url', 'dsmb'),
            'placeholder' => 'Enter button one url',
        ],

        [
            'id' => 'cta_button_two_text',
            'type' => 'text',
            'title' => __('Button Two Text', 'dsmb'),
            'placeholder' => 'Enter button two text',
        ],

        [
            'id' => 'cta_button_two_url',
            'type' => 'text',
            'title' => __('Button Two Url', 'dsmb'),
            'placeholder' => 'Enter button two url',
        ],

        [
            'id' => 'cta_section_bg',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Background Image', 'dsmb'),
            'desc' => __('For better view (2560 by 1200 pixels)'),
            'preview' => 'true',
        ],
    ],
]);

//Portfolio heading section
CSF::createSection($prefix, array(
    'title' => 'Portfolio Head',
    'icon' => 'fa fa-folder-open',
    'fields' => array(
        array(
            'id' => 'portfolio_title',
            'type' => 'text',
            'title' => __('Title', 'dsmb'),
            'desc' => __('Portfolio section title(within 10 words)', 'dsmb'),
            'placeholder' => 'Enter portfolio section title',
        ),

        array(
            'id' => 'portfolio_desc',
            'type' => 'textarea',
            'title' => __('Portfolio Short Desc', 'dsmb'),
            'placeholder' => 'Enter portfolio section short desc',
        ),

        array(
            'id' => 'portfolio_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',

        ),

    ),
));

//Services heading section
CSF::createSection($prefix, array(
    'title' => 'Services Head',
    'icon' => 'fa fa-check',
    'fields' => array(
        array(
            'id' => 'services_title',
            'type' => 'text',
            'title' => __('Title', 'dsmb'),
            'desc' => __('Services section title(within 15 words)', 'dsmb'),
            'placeholder' => 'Enter Services section title',
        ),

        array(
            'id' => 'services_desc',
            'type' => 'textarea',
            'title' => __('Services Short Desc', 'dsmb'),
            'placeholder' => 'Enter Services section short desc',
        ),

        array(
            'id' => 'services_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',

        ),

    ),
));

//Price Section
CSF::createSection($prefix, array(
    'title' => 'Pricing Table',
    'icon' => 'fa fa-money',
    'id' => 'price_section',
));

//Price head section
CSF::createSection($prefix, array(
    'title' => 'Head Section',
    'icon' => 'fa fa-h-square',
    'id' => 'price_head_section',
    'parent' => 'price_section',
    'fields' => [
        [
            'id' => 'price_title',
            'type' => 'text',
            'title' => __('Price Section Head Title', 'dsmb'),
            'desc' => __('Price section title(within 15 words)', 'dsmb'),
            'placeholder' => 'Enter Price section title',
        ],
        [
            'id' => 'price_desc',
            'type' => 'textarea',
            'title' => __('Price Section Short Desc', 'dsmb'),
            'placeholder' => 'Enter Price section short desc',
        ],
        [
            'id' => 'price_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',
        ],
    ],
));

//Main price section
CSF::createSection($prefix, array(
    'title' => __('Main Pricing Section', 'dsmb'),
    'icon' => 'fa fa-usd',
    'id' => 'price_head_section',
    'parent' => 'price_section',
    'fields' => [
        [
            'id' => 'pricing_table',
            'type' => 'group',
            'max' => 3,
            'title' => __('Pricing Table', 'dsmb'),
            'fields' => [

                [
                    'id' => 'package_title',
                    'title' => __('Package Name', 'dsmb'),
                    'type' => 'text',
                    'placeholder' => 'Enter package name',
                ],

                [
                    'id' => 'pricing_table_icon',
                    'title' => __('Package Icon', 'dsmb'),
                    'type' => 'text',
                    'desc' => __('Just <a href="https://icofont.com/" target="_blank">go there</a> and copy the icon class name only', 'dsmb'),
                    'placeholder' => 'Icofont class name',
                ],

                [
                    'id' => 'package_price',
                    'title' => __('Package Price', 'dsmb'),
                    'type' => 'number',
                    'placeholder' => 'Enter package price',
                ],
                // Nested group for pricing item listing
                [
                    'id' => 'features_items',
                    'type' => 'group',
                    'max' => 5,
                    'title' => __('Package Features', 'dsmb'),
                    'fields' => [
                        [
                            'id' => 'features_name',
                            'title' => __('Features Name', 'dsmb'),
                            'type' => 'text',
                            'placeholder' => 'Enter features name',
                        ],
                        [
                            'id' => 'is_available',
                            'title' => __('Available?', 'dsmb'),
                            'type' => 'switcher',
                        ],
                    ],
                ],
                // [
                //     'id' => 'pricing_table_btn_text',
                //     'title' => __('Button Label', 'dsmb'),
                //     'type' => 'text',
                //     'placeholder' => 'Enter Button label',
                // ],
                [
                    'id' => 'pricing_table_btn_url',
                    'title' => __('Button URL', 'dsmb'),
                    'type' => 'text',
                    'validate' => 'csf_validate_url',
                    'placeholder' => 'Enter Button URL',
                ],
            ],
        ],
    ],
));

//Blog section
CSF::createSection($prefix, array(
    'title' => 'Blog Section',
    'icon' => 'fa fa-check-circle',
    'fields' => array(
        array(
            'id' => 'blog_sec_title',
            'type' => 'text',
            'title' => __('Title', 'dsmb'),
            'desc' => __('Blog section title(within 15 words)', 'dsmb'),
            'placeholder' => 'Enter Blog section title',
        ),

        array(
            'id' => 'blog_desc',
            'type' => 'textarea',
            'title' => __('Blog Short Desc', 'dsmb'),
            'placeholder' => 'Enter blog section short desc',
        ),

        array(
            'id' => 'blog_sec_icon',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Image PNG', 'dsmb'),
            'preview' => 'true',
            'desc' => 'For better view(48 by 24 pixels)',

        ),

    ),
));

//Clients section
CSF::createSection($prefix, array(
    'title' => 'Clients Section',
    'icon' => 'fa fa-user',
    'fields' => array(
        [
            'id' => 'client_sec_bg',
            'type' => 'media',
            'library' => 'image',
            'title' => __('Background Image', 'dsmb'),
            'desc' => __('For better view (1600 by 283 pixels)'),
            'preview' => 'true',
        ],

        [
            'id' => 'client_info',
            'title' => __('Client information', 'dsmb'),
            'type' => 'group',
            'fields' => [
                [
                    'id' => 'client_company_name',
                    'title' => __('Client Company Name', 'dsmb'),
                    'type' => 'text',
                    'placeholder' => 'Company name',
                ],

                [
                    'id' => 'client_co_logo',
                    'type' => 'media',
                    'library' => 'image',
                    'title' => __('Company Logo', 'dsmb'),
                    'desc' => __('For better view (200 by 70 pixels)'),
                    'preview' => 'true',
                ],
            ],

        ],

    ),
));
