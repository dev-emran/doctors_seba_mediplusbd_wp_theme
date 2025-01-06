<?php

if (!function_exists('dsmb_add_metabox_for_fun_facts')) {
    function dsmb_add_metabox_for_fun_facts()
    {

        $prefix = '_dsmb_';

        $cmb = new_cmb2_box(array(
            'id' => $prefix . 'fun_facts_custom_fields',
            'title' => __('Fun Facts Custom fields', 'dsmb'),
            'object_types' => array('fun_fact'),
            'context' => 'normal',
            'priority' => 'default',
        ));

        $cmb->add_field(array(
            'name' => __('Number', 'dsmb'),
            'id' => $prefix . 'how_many_numbers',
            'type' => 'text',
            'description' => __('Example: How many doctors, happy clients, year expeirence etc.', 'dsmb'),
            'attributes' => [
                'placeholder' => 'Number of Doctors, happy Patients ect.',
                'type'  => 'number',
                'min'   => 1,
                'required' => 'required',
            ],
        ));

        // $cmb->add_field(array(
        //     'name' => __('Short Title', 'dsmb'),
        //     'id' => $prefix . 'short_title',
        //     'type' => 'text',
        //     'description' => __('Example: Hospital Rooms, Specialist Doctors, Happy Patients, Years of Experience', 'dsmb'),
        //     'attributes' => [
        //         'placeholder' => 'Enter short title',
        //         'required' => true,
        //     ],
        // ));

        $cmb->add_field(array(
            'name' => __('Icon Class', 'dsmb'),
            'id' => $prefix . 'feature_icon',
            'type' => 'text',
            'description' => __('Just <a href="https://icofont.com/" target="_blank">go there</a>  and copy the name of the class', 'dsmb'),
            'attributes' => [
                'placeholder' => 'Enter icofont class name',
                'required' => true,
            ],
        ));

    }
}
add_action('cmb2_init', 'dsmb_add_metabox_for_fun_facts');

