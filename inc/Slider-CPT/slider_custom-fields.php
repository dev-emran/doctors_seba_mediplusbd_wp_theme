<?php

if(!function_exists('dsmb_add_metabox_for_sliders')){
	function dsmb_add_metabox_for_sliders() {

		$prefix = '_dsmb_';

		$cmb = new_cmb2_box( array(
			'id'           => $prefix . 'slider_custom_fields',
			'title'        => __( 'Slider Custom fields', 'dsmb' ),
			'object_types' => array( 'slider' ),
			'context'      => 'normal',
			'priority'     => 'default',
		) );

		$cmb->add_field( array(
			'name' => __( 'Appointment Button Label', 'dsmb' ),
			'id' => $prefix . 'appointment_button_label',
			'type' => 'text',
			'row_classes'=> 'dsmb_appointment_button',

		) );

		$cmb->add_field( array(
			'name' => __( 'Appointment Button Url', 'dsmb' ),
			'id' => $prefix . 'appointment_button_url',
			'type' => 'text_url',
			'row_classes'=> 'dsmb_appointment_button'
		) );

		$cmb->add_field( array(
			'name' => __( 'Other Button Label', 'dsmb' ),
			'id' => $prefix . 'others_button_label',
			'type' => 'text',
			'row_classes'=> 'dsmb_other_button'
		) );

		$cmb->add_field( array(
			'name' => __( 'Other Button Url', 'dsmb' ),
			'id' => $prefix . 'others_button_url',
			'type' => 'text_url',
			'row_classes'=> 'dsmb_other_button'
		) );

	}
}
add_action( 'cmb2_init', 'dsmb_add_metabox_for_sliders' );
