<?php

if (!function_exists('dsmb_add_metabox_for_schedules')) {
    function dsmb_add_metabox_for_schedules()
    {

        $prefix = '_dsmb_';

        $cmb = new_cmb2_box(array(
            'id' => $prefix . 'schedule_custom_fields',
            'title' => __('schedule Custom fields', 'dsmb'),
            'object_types' => array('schedule'),
            'context' => 'normal',
            'priority' => 'default',
        ));

        $cmb->add_field(array(
            'name' => __('Sub title', 'dsmb'),
            'id' => $prefix . 'schedule_subtitle',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Enter sub title',
            ],
        ));

         $cmb->add_field(array(
            'name' => __('Icon', 'dsmb'),
            'id' => $prefix . 'schedule_icon',
            'type' => 'text',
            'description'   => __( 'Find icon <a href="https://fontawesome.com/v4/icons/" target="_blank">here</>', 'dsmb' ),
            'attributes' => [
                'placeholder' => 'Enter fontawesome v4 class',
            ],
        ));

    }
}
add_action('cmb2_init', 'dsmb_add_metabox_for_schedules');
