<?php

/**
 * @class PPDualButtonModule
 */
class PPDualButtonModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Dual Button', 'bb-powerpack'),
            'description'   => __('A module for Dual Button.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-dual-button/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-dual-button/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }

    /**
     * Use this method to work with settings data before
     * it is saved. You must return the settings object.
     *
     * @method update
     * @param $settings {object}
     */
    public function update($settings)
    {
        return $settings;
    }

    /**
     * This method will be called by the builder
     * right before the module is deleted.
     *
     * @method delete
     */
    public function delete()
    {

    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPDualButtonModule', array(
    'button_1_tab'       => array( // Tab
        'title'         => __('Button 1', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'button_sections_1'     => array(
                'title'     => '',
                'fields'    => array(
                    'button_1_title'     => array(
                        'type'      => 'text',
                        'label'     => 'Text',
                        'default'   => 'Button 1',
                        'preview'       => array(
							'type'          => 'text',
							'selector'      => '.pp-dual-button-1 span.pp-button-1-text'
						)
					),
                    'button_link_1'          => array(
						'type'          => 'link',
						'label'         => __('Link', 'bb-powerpack'),
					),
					'link_target_1'   => array(
						'type'          => 'pp-switch',
						'label'         => __('Link Target', 'bb-powerpack'),
						'default'       => '_self',
						'options'       => array(
							'_self'         => __('Same Window', 'bb-powerpack'),
                            '_blank'        => __('New Window', 'bb-powerpack'),
						),
					),
                    'button_icon_select_1'       => array(
                        'type'          => 'pp-switch',
						'label'         => __('Icon Type', 'bb-powerpack'),
                        'default'       => 'none',
						'options'       => array(
                            'none'              => __('None', 'bb-powerpack'),
							'font_icon'         => __('Icon', 'bb-powerpack'),
							'custom_icon'       => __('Image', 'bb-powerpack')
						),
                        'toggle' => array(
                            'font_icon'    => array(
                                'fields'   => array('button_font_icon_1','button_1_font_icon_size', 'button_1_font_icon_hover_color', 'button_1_icon_aligment'),
                                'sections' => array('icon_style'),
                            ),
                            'custom_icon'   => array(
                                'fields'  => array('button_custom_icon_1','button_1_custom_icon_width', 'button_1_icon_aligment'),
                                'sections' => array('icon_style'),
                            ),
                        )
					),
                    'button_font_icon_1'          => array(
						'type'          => 'icon',
						'label'         => __('Icon', 'bb-powerpack')
					),
                    'button_custom_icon_1'     => array(
                        'type'              => 'photo',
                        'label'         => __('Custom Image', 'bb-powerpack'),
                    ),
                    'button_1_icon_aligment'       => array(
                        'type'          => 'pp-switch',
						'label'         => __('Icon Position', 'bb-powerpack'),
                        'default'       => 'left',
						'options'       => array(
							'left'      => __('Before Text', 'bb-powerpack'),
							'right'     => __('After Text', 'bb-powerpack')
						),
					),
                    'button_1_effect'   => array(
                        'type'  => 'select',
                        'label' => __('Hover Transition', 'bb-powerpack'),
                        'default'   => 'none',
                        'options'   => array(
                            'none'  => __('None', 'bb-powerpack'),
                            'fade'  => __('Fade', 'bb-powerpack'),
                            'sweep_right'  => __('Sweep To Right', 'bb-powerpack'),
                            'sweep_left'  => __('Sweep To Left', 'bb-powerpack'),
                            'sweep_bottom'  => __('Sweep To Bottom', 'bb-powerpack'),
                            'sweep_top'  => __('Sweep To Top', 'bb-powerpack'),
                            'bounce_right'  => __('Bounce To Right', 'bb-powerpack'),
                            'bounce_left'  => __('Bounce To Left', 'bb-powerpack'),
                            'bounce_bottom'  => __('Bounce To Bottom', 'bb-powerpack'),
                            'bounce_top'  => __('Bounce To Top', 'bb-powerpack'),
                            'radial_out'  => __('Radial Out', 'bb-powerpack'),
                            'radial_in'  => __('Radial In', 'bb-powerpack'),
                            'rectangle_out'  => __('Rectangle Out', 'bb-powerpack'),
                            'rectangle_in'  => __('Rectangle In', 'bb-powerpack'),
                            'shutter_in_horizontal'  => __('Shutter In Horizontal', 'bb-powerpack'),
                            'shutter_out_horizontal'  => __('Shutter Out Horizontal', 'bb-powerpack'),
                            'shutter_in_vertical'  => __('Shutter In Vertical', 'bb-powerpack'),
                            'shutter_out_vertical'  => __('Shutter Out Vertical', 'bb-powerpack'),
                            'shutter_out_diagonal'  => __('Shutter Out Diagonal', 'bb-powerpack'),
                            'shutter_in_diagonal'  => __('Shutter In Diagonal', 'bb-powerpack'),
                        ),
                    ),
                    'button_1_effect_duration'  => array(
                        'type'  => 'text',
                        'label' => __('Transition Speed', 'bb-powerpack'),
                        'size'  => 5,
                        'maxlength' => 4,
                        'default'   => 500,
                        'description'   => __('ms', 'bb-powerpack'),
                    ),
                )
            ),
        )
    ),
    'button_2_tab'  => array(
        'title'     => __('Button 2', 'bb-powerpack'),
        'sections'  => array(
            'button_sections_2'     => array(
                'title'     => '',
                'fields'    => array(
                    'button_2_title'     => array(
                        'type'      => 'text',
                        'label'     => 'Text',
                        'default'   => 'Button 2',
                        'preview'       => array(
							'type'          => 'text',
							'selector'      => '.pp-dual-button-2 span.pp-button-2-text'
						)
					),
                    'button_link_2'          => array(
						'type'          => 'link',
						'label'         => __('Link', 'bb-powerpack'),
					),
					'link_target_2'   => array(
						'type'          => 'pp-switch',
						'label'         => __('Link Target', 'bb-powerpack'),
						'default'       => '_self',
						'options'       => array(
                            '_self'         => __('Same Window', 'bb-powerpack'),
							'_blank'        => __('New Window', 'bb-powerpack'),
						),
					),
                    'button_icon_select_2'       => array(
                        'type'          => 'pp-switch',
						'label'         => __('Icon Type', 'bb-powerpack'),
                        'default'       => 'none',
						'options'       => array(
                            'none'              => __('None', 'bb-powerpack'),
							'font_icon'         => __('Icon', 'bb-powerpack'),
							'custom_icon'       => __('Image', 'bb-powerpack')
						),
                        'toggle' => array(
                            'font_icon'    => array(
                                'fields'   => array('button_font_icon_2','button_2_font_icon_size', 'button_2_font_icon_hover_color', 'button_2_icon_aligment'),
                                'sections' => array('icon_style'),
                            ),
                            'custom_icon'   => array(
                                'fields'  => array('button_custom_icon_2','button_2_custom_icon_width', 'button_2_icon_aligment'),
                                'sections' => array('icon_style'),
                            ),
                        )
					),
                    'button_font_icon_2'          => array(
						'type'          => 'icon',
						'label'         => __('Icon', 'bb-powerpack')
					),
                    'button_custom_icon_2'     => array(
                        'type'              => 'photo',
                        'label'         => __('Custom Image', 'bb-powerpack'),
                    ),
                    'button_2_icon_aligment'       => array(
                        'type'          => 'pp-switch',
						'label'         => __('Icon Position', 'bb-powerpack'),
                        'default'       => 'left',
						'options'       => array(
							'left'      => __('Before Text', 'bb-powerpack'),
							'right'     => __('After Text', 'bb-powerpack')
						),
					),
                    'button_2_effect'   => array(
                        'type'  => 'select',
                        'label' => __('Hover Transition', 'bb-powerpack'),
                        'default'   => 'none',
                        'options'   => array(
                            'none'  => __('None', 'bb-powerpack'),
                            'fade'  => __('Fade', 'bb-powerpack'),
                            'sweep_right'  => __('Sweep To Right', 'bb-powerpack'),
                            'sweep_left'  => __('Sweep To Left', 'bb-powerpack'),
                            'sweep_bottom'  => __('Sweep To Bottom', 'bb-powerpack'),
                            'sweep_top'  => __('Sweep To Top', 'bb-powerpack'),
                            'bounce_right'  => __('Bounce To Right', 'bb-powerpack'),
                            'bounce_left'  => __('Bounce To Left', 'bb-powerpack'),
                            'bounce_bottom'  => __('Bounce To Bottom', 'bb-powerpack'),
                            'bounce_top'  => __('Bounce To Top', 'bb-powerpack'),
                            'radial_out'  => __('Radial Out', 'bb-powerpack'),
                            'radial_in'  => __('Radial In', 'bb-powerpack'),
                            'rectangle_out'  => __('Rectangle Out', 'bb-powerpack'),
                            'rectangle_in'  => __('Rectangle In', 'bb-powerpack'),
                            'shutter_in_horizontal'  => __('Shutter In Horizontal', 'bb-powerpack'),
                            'shutter_out_horizontal'  => __('Shutter Out Horizontal', 'bb-powerpack'),
                            'shutter_in_vertical'  => __('Shutter In Vertical', 'bb-powerpack'),
                            'shutter_out_vertical'  => __('Shutter Out Vertical', 'bb-powerpack'),
                            'shutter_out_diagonal'  => __('Shutter Out Diagonal', 'bb-powerpack'),
                            'shutter_in_diagonal'  => __('Shutter In Diagonal', 'bb-powerpack'),
                        ),
                    ),
                    'button_2_effect_duration'  => array(
                        'type'  => 'text',
                        'label' => __('Transition Speed', 'bb-powerpack'),
                        'size'  => 5,
                        'maxlength' => 4,
                        'default' => '500',
                        'description'   => __('ms', 'bb-powerpack'),
                    ),
                )
            ),
        ),
    ),
    'style'       => array( // Tab
        'title'         => __('Style', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'button_1_style'       => array( // Section
                'title'         => __('Button 1', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'button_1_bg_color'    => array(
                        'type'          => 'pp-color',
                        'label'         => __('Background Color', 'bb-powerpack'),
                        'show_reset'    => true,
                        'default'       => array(
                            'primary'   => 'f4f4f4',
                            'secondary' => 'c6c6c6'
                        ),
                        'options'   => array(
                            'primary'   => __('Default', 'bb-powerpack'),
                            'secondary'   => __('Hover', 'bb-powerpack'),
                        ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-dual-button-content .pp-dual-button-1 a',
                            'property'        => 'background-color'
                        )
                    ),
                    'button_1_text_color'    => array(
                        'type'          => 'pp-color',
                        'label'         => __('Text Color', 'bb-powerpack'),
                        'show_reset'    => true,
                        'default'       => array(
                            'primary'   => '565656',
                            'secondary'   => '565656',
                        ),
                        'options'       => array(
                            'primary'   => __('Default', 'bb-powerpack'),
                            'secondary'   => __('Hover', 'bb-powerpack'),
                        ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-dual-button-content .pp-dual-button-1 a',
                            'property'        => 'color'
                        )
                    ),
                    'button_1_border_color'    => array(
                         'type'      => 'pp-color',
                         'label'     => __('Border Color', 'bb-powerpack'),
                         'show_reset'    => true,
                         'default'   => array(
                             'primary'   => 'f4f4f4',
                             'secondary'   => 'c6c6c6',
                         ),
                         'options'   => array(
                             'primary'   => __('Default', 'bb-powerpack'),
                             'secondary'   => __('Hover', 'bb-powerpack'),
                         ),
                         'preview'   => array(
                             'type'  => 'css',
                             'selector'  => '.pp-dual-button-1 .pp-button',
                             'property'  => 'border-color'
                        ),
                    ),
                    'button_1_font_icon_size'   => array(
                        'type'          => 'text',
                        'label'         => __('Icon Size', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-box-input input-small',
                        'default'       => '20',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-dual-button-content .pp-dual-button-1 .pp-font-icon',
                            'property'  => 'font-size',
                            'unit'      => 'px'
                        )
                    ),
                    'button_1_custom_icon_width'   => array(
                        'type'          => 'text',
                        'label'         => __('Image Width', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-box-input input-small',
                        'default'       => '20',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-dual-button-content .pp-dual-button-1 .pp-custom-icon',
                            'property'  => 'width',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
            'button_2_style'       => array( // Section
                'title'         => __('Button 2', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'button_2_bg_color'    => array(
                        'type'          => 'pp-color',
                        'label'         => __('Background Color', 'bb-powerpack'),
                        'show_reset'    => true,
                        'default'       => array(
                            'primary'   => 'c6c6c6',
                            'secondary' => 'f4f4f4'
                        ),
                        'options'       => array(
                            'primary'   => __('Default', 'bb-powerpack'),
                            'secondary'   => __('Hover', 'bb-powerpack'),
                        ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-dual-button-content .pp-dual-button-2 a',
                            'property'        => 'background-color'
                        )
                    ),
                    'button_2_text_color'    => array(
                        'type'          => 'pp-color',
                        'label'         => __('Text Color', 'bb-powerpack'),
                        'show_reset'    => true,
                        'default'       => array(
                            'primary'   => '565656',
                            'secondary'   => '565656',
                        ),
                        'options'       => array(
                            'primary'   => __('Default', 'bb-powerpack'),
                            'secondary'   => __('Hover', 'bb-powerpack'),
                        ),
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-dual-button-content .pp-dual-button-2 a',
                            'property'        => 'color'
                        )
                    ),
                    'button_2_border_color'    => array(
                         'type'      => 'pp-color',
                         'label'     => __('Border Color', 'bb-powerpack'),
                         'show_reset'    => true,
                         'default'   => array(
                             'primary'   => 'c6c6c6',
                             'secondary'   => 'f4f4f4',
                         ),
                         'options'   => array(
                             'primary'   => __('Default', 'bb-powerpack'),
                             'secondary'   => __('Hover', 'bb-powerpack'),
                         ),
                         'preview'   => array(
                             'type'  => 'css',
                             'selector'  => '.pp-dual-button-2 .pp-button',
                             'property'  => 'border-color'
                        ),
                    ),
                    'button_2_font_icon_size'   => array(
                        'type'          => 'text',
                        'label'         => __('Icon Size', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-box-input input-small',
                        'default'       => 20,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-dual-button-content .pp-dual-button-2 .pp-font-icon',
                            'property'  => 'font-size',
                            'unit'      => 'px'
                        )
                    ),
                    'button_2_custom_icon_width'   => array(
                        'type'          => 'text',
                        'label'         => __('Image Width', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-box-input input-small',
                        'default'       => 20,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-dual-button-content .pp-dual-button-2 .pp-custom-icon',
                            'property'  => 'width',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
           'general_colors'       => array( // Section
                'title'         => __('General', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'button_alignment'  => array(
                        'type'      => 'pp-switch',
                        'label'     => __('Alignment', 'bb-powerpack'),
                        'default'   => 'left',
                        'options'   => array(
                            'left'  => __('Left', 'bb-powerpack'),
                            'none'  => __('Center', 'bb-powerpack'),
                            'right'  => __('Right', 'bb-powerpack'),
                        )
                    ),
                    'button_padding'   => array(
                        'type'          => 'pp-multitext',
                        'label'         => __('Padding', 'bb-powerpack'),
                        'description'   => __('px', 'bb-powerpack'),
                        'default'       => array(
                            'button_top_padding'    => 10,
                            'button_bottom_padding'    => 10,
                            'button_left_padding'    => 10,
                            'button_right_padding'    => 10,
                        ),
                        'options'       => array(
                            'button_top_padding'    => array(
                                'placeholder'       => __('Top', 'bb-powerpack'),
                                'maxlength'         => 3,
                                'icon'              => 'fa-long-arrow-up',
                                'tooltip'           => __('Top', 'bb-powerpack'),
                                'preview'           => array(
                                    'selector'      => '.pp-dual-button-content a.pp-button',
                                    'property'      => 'padding-top',
                                    'unit'          => 'px'
                                ),
                            ),
                            'button_bottom_padding'    => array(
                                'placeholder'       => __('Bottom', 'bb-powerpack'),
                                'maxlength'         => 3,
                                'icon'              => 'fa-long-arrow-down',
                                'tooltip'           => __('Bottom', 'bb-powerpack'),
                                'preview'           => array(
                                    'selector'      => '.pp-dual-button-content a.pp-button',
                                    'property'      => 'padding-bottom',
                                    'unit'          => 'px'
                                ),
                            ),
                            'button_left_padding'    => array(
                                'placeholder'       => __('Left', 'bb-powerpack'),
                                'maxlength'         => 3,
                                'icon'              => 'fa-long-arrow-left',
                                'tooltip'           => __('Left', 'bb-powerpack'),
                                'preview'           => array(
                                    'selector'      => '.pp-dual-button-content a.pp-button',
                                    'property'      => 'padding-left',
                                    'unit'          => 'px'
                                ),
                            ),
                            'button_right_padding'    => array(
                                'placeholder'       => __('Right', 'bb-powerpack'),
                                'maxlength'         => 3,
                                'icon'              => 'fa-long-arrow-right',
                                'tooltip'           => __('Right', 'bb-powerpack'),
                                'preview'           => array(
                                    'selector'      => '.pp-dual-button-content a.pp-button',
                                    'property'      => 'padding-right',
                                    'unit'          => 'px'
                                ),
                            ),
                        ),
                     ),
                    'button_border_style'    => array(
                        'type'      => 'pp-switch',
                        'label'     => __('Border Style', 'bb-powerpack'),
                        'default'   => 'none',
                        'options'   => array(
                            'none'     => __('None', 'bb-powerpack'),
                            'solid'     => __('Solid', 'bb-powerpack'),
                            'dashed'     => __('Dashed', 'bb-powerpack'),
                            'dotted'     => __('Dotted', 'bb-powerpack'),
                        ),
                        'toggle'    => array(
                            'solid'     => array(
                                'fields'    => array('button_border_width', 'button_1_border_color', 'button_2_border_color', 'button_border_hover_color'),
                            ),
                            'dashed'     => array(
                                'fields'    => array('button_border_width', 'button_1_border_color', 'button_2_border_color', 'button_border_hover_color'),
                            ),
                            'dotted'     => array(
                                'fields'    => array('button_border_width', 'button_1_border_color', 'button_2_border_color', 'button_border_hover_color'),
                            ),
                        ),
                    ),
                    'button_border_width'    => array(
                        'type'      => 'text',
                        'label'     => __('Border Width', 'bb-powerpack'),
                        'default'   => '1',
                        'size'          => '5',
                        'maxlength'     => '5',
						'description'   => _x( 'px', 'Value unit for border width. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-dual-button-content .pp-button',
                            'property'  => 'border-width',
                            'unit'      => 'px'
                        ),
                    ),
                    'button_border_radius'    => array(
                        'type'      => 'text',
                        'label'     => __('Round Corners', 'bb-powerpack'),
                        'default'   => '0',
                        'size'          => '5',
                        'maxlength'     => '5',
						'description'   => _x( 'px', 'Value unit for border width. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'   => array(
                            'type'            => 'css',
                            'rules'     => array(
                                array(
                                    'selector'        => '.pp-dual-button-1 .pp-button',
                                    'property'        => 'border-top-left-radius',
                                    'unit'            => 'px'
                                ),
                                array(
                                    'selector'        => '.pp-dual-button-1 .pp-button',
                                    'property'        => 'border-bottom-left-radius',
                                    'unit'            => 'px'
                                ),
                                array(
                                    'selector'        => '.pp-dual-button-2 .pp-button',
                                    'property'        => 'border-top-right-radius',
                                    'unit'            => 'px'
                                ),
                                array(
                                    'selector'        => '.pp-dual-button-2 .pp-button',
                                    'property'        => 'border-bottom-right-radius',
                                    'unit'            => 'px'
                                ),
                            ),
                        ),
                    ),
                    'button_width'    => array(
                        'type'      => 'text',
                        'label'     => __('Width', 'bb-powerpack'),
                        'default'   => '200',
                        'size'          => '5',
                        'maxlength'     => '5',
						'description'   => _x( 'px', 'Value unit for border width. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-dual-button-content .pp-button',
                            'property'  => 'width',
                            'unit'      => 'px'
                        ),
                    ),
                    'button_spacing'    => array(
                        'type'              => 'text',
                        'label'             => __('Spacing', 'bb-powerpack'),
                        'default'           => 10,
                        'size'              => 5,
                        'maxlength'         => 5,
						'description'       => _x( 'px', 'Value unit for spacer width. Such as: "10 px"', 'bb-powerpack' ),
                        'preview'           => array(
                            'type'              => 'css',
                            'selector'          => '.pp-dual-button-content .pp-spacer',
                            'property'          => 'width',
                            'unit'              => 'px'
                        ),
                    ),
                    'responsive_breakpoint' => array(
                        'type'          => 'text',
                        'label'         => __('Responsive Breakpoint', 'bb-powerpack'),
                        'size'          => 5,
                        'maxlength'     => 4,
                        'default'       => 480,
                        'description'   => __('px', 'bb-powerpack'),
                        'help'          => __('Buttons will be stacked on top of each other.', 'bb-powerpack'),
                    ),
                )
            ),
        ),
    ),
    'button_typography'        => array(
        'title'         => __('Typography', 'bb-powerpack'),
        'sections'      => array(
            'typography'    => array(
                'title'     => '',
                'fields'    => array(
                    'button_font_family'          => array(
                        'type'          => 'font',
                        'default'		=> array(
                            'family'		=> 'Default',
                            'weight'		=> 300
                        ),
                        'label'         => __('Font', 'bb-powerpack'),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.pp-dual-button-content .pp-button'
                        )
                    ),
                    'button_font_size'   => array(
                        'type'          => 'pp-multitext',
                        'label'         => __('Font Size', 'bb-powerpack'),
                        'default'       => array(
                            'button_font_size_desktop' => 18,
                            'button_font_size_tablet' => '',
                            'button_font_size_mobile' => '',
                        ),
                        'options'       => array(
                            'button_font_size_desktop'      => array(
                                'placeholder'               => __('Desktop', 'bb-powerpack'),
                                'icon'                      => 'fa-desktop',
                                'maxlength'                 => 3,
                                'tooltip'                   => __('Desktop', 'bb-powerpack'),
                                'preview'           => array(
                                    'selector'      => '.pp-dual-button-content a.pp-button',
                                    'property'      => 'font-size',
                                    'unit'          => 'px'
                                ),
                            ),
                            'button_font_size_tablet'      => array(
                                'placeholder'               => __('Tablet', 'bb-powerpack'),
                                'icon'                      => 'fa-tablet',
                                'maxlength'                 => 3,
                                'tooltip'                   => __('Tablet', 'bb-powerpack')
                            ),
                            'button_font_size_mobile'      => array(
                                'placeholder'               => __('Mobile', 'bb-powerpack'),
                                'icon'                      => 'fa-mobile',
                                'maxlength'                 => 3,
                                'tooltip'                   => __('Mobile', 'bb-powerpack')
                            ),
                        ),
                    ),
                ),
            ),
            'section_desc'  => array(
                'title'         => '',
                'fields'        => array(
                    'pro_desc'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('More options are available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack')
                    )
                )
            ),
        ),
    ),
));
