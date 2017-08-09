<?php
/**
 * GENERAL ARRAY OPTIONS
 */

$general = array(

	'general'  => array(

		array(
			'title' => __( 'General Options', 'yith-woocommerce-one-click-checkout' ),
			'type' => 'title',
			'desc' => '',
			'id' => 'yith-wocc-general-options'
		),

        array(
            'title' => __( 'Redirect To Pay Order Page', 'yith-woocommerce-one-click-checkout' ),
            'desc'  => __( 'Choose to redirect customer directly to pay order page', 'yith-woocommerce-one-click-checkout' ),
            'type'  => 'checkbox',
            'default'   => 'no',
            'id'    => 'yith-wocc-redirect-pay'
        ),

		array(
			'title' => __( 'Button label', 'yith-woocommerce-one-click-checkout' ),
			'desc'  => __( 'Edit One-Click Checkout button label', 'yith-woocommerce-one-click-checkout' ),
			'type'  => 'text',
			'default'   => __( 'One-Click Purchase', 'yith-woocommerce-one-click-checkout' ),
			'id'    => 'yith-wocc-button-label'
		),

		array(
			'title' => __( 'Button background', 'yith-woocommerce-one-click-checkout' ),
			'desc'  => __( 'Choose One-Click Checkout button background color', 'yith-woocommerce-one-click-checkout' ),
			'type'  => 'color',
			'default'   => '#ebe9eb',
			'id'    => 'yith-wocc-button-background'
		),

		array(
			'title' => __( 'Button background on hover', 'yith-woocommerce-one-click-checkout' ),
			'desc'  => __( 'Choose the color of the One-Click Checkout button background on mouse hover', 'yith-woocommerce-one-click-checkout' ),
			'type'  => 'color',
			'default'   => '#dad8da',
			'id'    => 'yith-wocc-button-background-hover'
		),

		array(
			'title' => __( 'Button text color', 'yith-woocommerce-one-click-checkout' ),
			'desc'  => __( 'Choose One-Click Checkout button text color', 'yith-woocommerce-one-click-checkout' ),
			'type'  => 'color',
			'default'   => '#515151',
			'id'    => 'yith-wocc-button-text'
		),

		array(
			'title' => __( 'Button text color on hover', 'yith-woocommerce-one-click-checkout' ),
			'desc'  => __( 'Choose the color fo the One-Click Checkout button text on mouse hover', 'yith-woocommerce-one-click-checkout' ),
			'type'  => 'color',
			'default'   => '#515151',
			'id'    => 'yith-wocc-button-text-hover'
		),

		array(
			'type'      => 'sectionend',
			'id'        => 'yith-wocc-general-options'
		)
	)
);

return apply_filters( 'yith_wocc_panel_general_options', $general );