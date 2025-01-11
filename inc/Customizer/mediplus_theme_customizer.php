<?php
if (!function_exists('dsmb_theme_customizer')) {
    function dsmb_theme_customizer($wp_customize)
    {
        $wp_customize->add_panel(
            'dsmb_theme_option_panel',
            [
                'title' => __('Mediplus Theme Options', 'dsmb'),
                'priority' => 30,
            ],

        );

        $wp_customize->add_section(
            'dsmb_theme_option',
            [
                'title' => __('Features', 'dsmb'),
                'priority' => 30,
                'panel'     => 'dsmb_theme_option_panel',
            ],
        );

        $wp_customize->add_setting(
            'features_title_setting',
            [
                'default' => 'We Are Always Ready to Help You & Your Family',
                'transport'     => 'refresh'
            ]
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'dsmb_feature_title_ctrl',
            [
                'label'     => __('Enter Feature Title', 'dsmb'),
                'section'   => 'dsmb_theme_option',
                'settings'   => 'features_title_setting',
                'type'      => 'textarea',
                'input_attrs'   => [
                    'placeholder'   => 'Enter features title',
                ],
            ],
        ));


        //Features description
        $wp_customize->add_setting(
            'features_desc_setting',
            [
                'default' => 'Dedicated to providing consistent support and care for you and your family\'s well-being and needs.',
                'transport'     => 'refresh'
            ]
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'dsmb_desc__ctrl',
            [
                'label'     => __('Enter Feature Desc', 'dsmb'),
                'section'   => 'dsmb_theme_option',
                'settings'   => 'features_desc_setting',
                'type'      => 'textarea',
                'input_attrs'   => [
                    'placeholder'   => 'Enter features description',
                ],
            ],
        ));


        //desc displayed checkbox
        $wp_customize->add_setting(
            'features_desc_displayed_setting',
            [
                'default' => '1',
                'transport'     => 'refresh'
            ]
        );

        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'dsmb_desc_displayed_ctrl',
            [
                'label'     => __('Do you displayed description?', 'dsmb'),
                'section'   => 'dsmb_theme_option',
                'settings'   => 'features_desc_displayed_setting',
                'type'      => 'checkbox',
            ],
        ));
    }
}
add_action('customize_register', 'dsmb_theme_customizer');
