<?php

if (!function_exists('dsmb_add_metabox_for_services')) {
    function dsmb_add_metabox_for_services()
    {

        $prefix = '_dsmb_';

        $cmb = new_cmb2_box(array(
            'id' => $prefix . 'services_custom_fields',
            'title' => __('Service Custom field', 'dsmb'),
            'object_types' => array('service'),
            'context' => 'normal',
            'priority' => 'default',
        ));

        $cmb->add_field(array(
            'name' => __('Icon Class', 'dsmb'),
            'id' => $prefix . 'services_icon',
            'type' => 'text',
            'description' => __('Just <a href="https://icofont.com/" target="_blank">go there</a>  and copy icon class name only', 'dsmb'),
            'attributes' => [
                'placeholder' => 'Enter icofont class name',
            ],
        ));

    }
}
add_action('cmb2_init', 'dsmb_add_metabox_for_services');
