<?php

/**
 * @class PPSpacerModule
 */
class PPSpacerModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Spacer', 'bb-powerpack'),
            'description'   => __('Spacer module.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-spacer/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-spacer/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPSpacerModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Height', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'spacer_height_lg' => array(
                        'type'          => 'text',
                        'label'         => __('Large Device', 'bb-powerpack'),
                        'description'   => 'px',
                        'default'       => 15,
                        'size'          => 5,
                        'preview'           => array(
                            'type'              => 'css',
                            'selector'          => '.pp-spacer-module',
                            'property'          => 'height',
                            'unit'              => 'px'
                        ),
                    ),
                    'spacer_height_md' => array(
                        'type'          => 'text',
                        'label'         => __('Medium Device', 'bb-powerpack'),
                        'description'   => 'px',
                        'default'       => 15,
                        'size'          => 5,
                        'preview'           => array(
                            'type'              => 'none',
                        ),
                    ),
                    'spacer_height_sm' => array(
                        'type'          => 'text',
                        'label'         => __('Small Device', 'bb-powerpack'),
                        'description'   => 'px',
                        'default'       => 15,
                        'size'          => 5,
                        'preview'           => array(
                            'type'              => 'none',
                        ),
                    ),
                )
            ),
            'visibility'    => array(
                'title'         => __('Visibility', 'bb-powerpack'),
                'fields'        => array(
                    'hide_on'   => array(
                        'type'      => 'select',
                        'label'     => __('Hide On', 'bb-powerpack'),
                        'default'   => 'none',
                        'options'   => array(
                            'none'      => __('None', 'bb-powerpack'),
                            'large'     => __('Large Device', 'bb-powerpack'),
                            'medium'    => __('Medium Device', 'bb-powerpack'),
                            'small'     => __('Small Device', 'bb-powerpack'),
                            'custom'    => __('Custom', 'bb-powerpack')
                        ),
                        'toggle'    => array(
                            'large'    => array(
                                'fields'    => array('hide_column')
                            ),
                            'medium'    => array(
                                'fields'    => array('hide_column')
                            ),
                            'small'    => array(
                                'fields'    => array('hide_column')
                            ),
                            'custom'    => array(
                                'fields'    => array('custom_breakpoint', 'breakpoint_condition', 'hide_column')
                            )
                        ),
                        'preview'   => array(
                            'type'      => 'none'
                        )
                    ),
                    'custom_breakpoint'     => array(
                        'type'                  => 'text',
                        'label'                 => __('Custom Breakpoint', 'bb-powerpack'),
                        'description'           => 'px',
                        'default'               => '',
                        'size'                  => 5,
                        'preview'               => array(
                            'type'                  => 'none'
                        )
                    ),
                    'breakpoint_condition'  => array(
                        'type'                  => 'select',
                        'label'                 => __('Condition', 'bb-powerpack'),
                        'default'               => 'lt_equals_to',
                        'options'               => array(
                            'lt_equals_to'          => __('below or equals to', 'bb-powerpack'),
                            'gt_equals_to'          => __('above or equals to', 'bb-powerpack'),
                        ),
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    ),
                    'hide_column'   => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Hide Entire Column', 'bb-powerpack'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'           => __('Yes', 'bb-powerpack'),
                            'no'            => __('No', 'bb-powerpack')
                        ),
                        'preview'       => array(
                            'type'          => 'none'
                        )
                    )
                )
            )
        )
    )
));
