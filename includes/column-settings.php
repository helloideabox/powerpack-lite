<?php

function pp_column_register_settings( $extensions ) {

    if ( array_key_exists( 'corners', $extensions['col'] ) || in_array( 'corners', $extensions['col'] ) ) {
        add_filter( 'fl_builder_register_settings_form', 'pp_column_round_corners', 10, 2 );
    }
}

function pp_column_round_corners( $form, $id ) {

    if ( 'col' != $id ) {
        return $form;
    }

    $form['tabs']['style']['sections']['border']['fields']['pp_round_corners'] = array(
        'type'              => 'pp-multitext',
        'label'             => __('Round Corners', 'bb-powerpack'),
        'description'       => 'px',
        'default'           => array(
            'top_left'          => 0,
            'top_right'         => 0,
            'bottom_left'       => 0,
            'bottom_right'      => 0
        ),
        'options'           => array(
            'top_left'          => array(
                'placeholder'       => __('Top Left', 'bb-powerpack'),
                'tooltip'           => __('Top Left', 'bb-powerpack')
            ),
            'top_right'         => array(
                'placeholder'       => __('Top Right', 'bb-powerpack'),
                'tooltip'           => __('Top Right', 'bb-powerpack')
            ),
            'bottom_left'       => array(
                'placeholder'       => __('Bottom Left', 'bb-powerpack'),
                'tooltip'           => __('Bottom Left', 'bb-powerpack')
            ),
            'bottom_right'      => array(
                'placeholder'       => __('Bottom Right', 'bb-powerpack'),
                'tooltip'           => __('Bottom Right', 'bb-powerpack')
            ),
        )
    );

    return $form;
}
