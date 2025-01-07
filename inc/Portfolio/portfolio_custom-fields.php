<?php

if (!function_exists('dsmb_add_metabox_for_features')) {
    function dsmb_add_metabox_for_features()
    {

        $prefix = '_dsmb_';

        $cmb = new_cmb2_box(array(
            'id' => $prefix . 'feature_custom_fields',
            'title' => __('feature Custom fields', 'dsmb'),
            'object_types' => array('feature'),
            'context' => 'normal',
            'priority' => 'default',
        ));

        $cmb->add_field(array(
            'name' => __('Icon Class', 'dsmb'),
            'id' => $prefix . 'feature_icon',
            'type' => 'text',
            'description' => __('Just <a href="https://icofont.com/" target="_blank">go there</a>  and copy icon class name only', 'dsmb'),
            'attributes' => [
                'placeholder' => 'Enter icofont class name',
            ],
        ));

    }
}
add_action('cmb2_init', 'dsmb_add_metabox_for_features');
