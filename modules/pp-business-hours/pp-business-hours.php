<?php

/**
 * @class PPBusinessHoursModule
 */
class PPBusinessHoursModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Business Hours', 'bb-powerpack'),
            'description'   => __('A module to display business hours.', 'bb-powerpack'),
			'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-business-hours/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-business-hours/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
			'partial_refresh'	=> true
        ));

        $this->add_css('font-awesome');
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPBusinessHoursModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => '', // Section Title
                'fields'        => array( // Section Fields
                    'business_hours_rows'     => array(
                        'type'          => 'form',
                        'label'         => __( 'Timing', 'bb-powerpack' ),
                        'form'          => 'bh_settings_form', // ID from registered form below
                        'preview_text'  => 'title', // Name of a field to use for the preview text
						'multiple'		=> true,
                    ),
                )
            )
        )
    ),
	'style'	=> array(
		'title'	=> __( 'Style', 'bb-powerpack' ),
		'sections'	=> array(
			'layout'	=> array(
				'title'	=> __( 'Timing', 'bb-powerpack' ),
				'fields'	=> array(
                    'spacing'   => array(
                        'type'      => 'text',
                        'label'     => __('Spacing', 'bb-powerpack'),
                        'default'   => 10,
                        'size'      => 5,
                        'description'   => 'px',
                        'preview'   => array(
                            'type'      => 'css',
                            'rules'     => array(
                                array(
                                    'selector'  => '.pp-business-hours-content .pp-bh-row',
                                    'property'  => 'padding-top',
                                    'unit'      => 'px'
                                ),
                                array(
                                    'selector'  => '.pp-business-hours-content .pp-bh-row',
                                    'property'  => 'padding-bottom',
                                    'unit'      => 'px'
                                ),
                            )
                        )
                    ),
					'zebra_pattern'   => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Striped Effect', 'bb-powerpack'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'           => __('Yes', 'bb-powerpack'),
                            'no'            => __('No', 'bb-powerpack'),
                        ),
						'toggle'	=> array(
							'yes'	=> array(
								'fields'	=> array('row_bg_color_1', 'row_bg_color_2')
							)
						)
                    ),
					'row_bg_color_1'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Color 1', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content .pp-bh-row:nth-of-type(odd):not(.pp-highlight-row)',
							'property'			=> 'background-color',
						)
					),
					'row_bg_color_2'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Color 2', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content .pp-bh-row:nth-of-type(even):not(.pp-highlight-row)',
							'property'			=> 'background-color',
						)
					),
					'separator'   => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Separator', 'bb-powerpack'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'      => __('Yes', 'bb-powerpack'),
                            'no'      => __('No', 'bb-powerpack'),
                        ),
						'toggle'	=> array(
							'yes'	=> array(
								'fields'	=> array('separator_style', 'separator_width', 'separator_color')
							)
						)
                    ),
					'separator_style'   => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Separator Style', 'bb-powerpack'),
                        'default'       => 'solid',
                        'options'       => array(
                            'solid'      => __('Solid', 'bb-powerpack'),
                            'dashed'      => __('Dashed', 'bb-powerpack'),
                            'dotted'      => __('Dotted', 'bb-powerpack'),
                        ),
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content .pp-bh-row',
							'property'			=> 'border-bottom-style',
						)
                    ),
					'separator_width'       => array(
						'type'          => 'text',
						'label'         => __( 'Separator Width', 'bb-powerpack' ),
						'description'	=> __( 'px', 'bb-powerpack' ),
						'default'       => 1,
						'size'			=> 5,
						'maxlength'		=> 10,
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content .pp-bh-row',
							'property'			=> 'border-bottom-width',
							'unit'				=> 'px'
						)
					),
					'separator_color'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Separator Color', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content .pp-bh-row',
							'property'			=> 'border-bottom-color',
						)
					),
				)
			),
			'box'	=> array(
				'title'	=> __( 'Box', 'bb-powerpack' ),
				'fields'	=> array(
					'box_bg_color'      => array(
						'type'      => 'color',
						'label'     => __('Background Color', 'bb-powerpack'),
						'default'	=> 'f5f5f5',
						'show_reset'   => true,
						'preview'              => array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content',
							'property'			=> 'background-color',
						)
					),
					'box_border'    => array(
						'type'      => 'pp-switch',
						'label'     => __('Border Style', 'bb-powerpack'),
						'default'   => 'none',
						'options'   => array(
							'none'  => __('None', 'bb-powerpack'),
							'solid'  => __('Solid', 'bb-powerpack'),
							'dashed'  => __('Dashed', 'bb-powerpack'),
							'dotted'  => __('Dotted', 'bb-powerpack'),
						),
						'toggle'    => array(
							'dashed'   => array(
								'fields'    => array('box_border_width', 'box_border_color')
							),
							'dotted'   => array(
								'fields'    => array('box_border_width', 'box_border_color')
							),
							'solid'   => array(
								'fields'    => array('box_border_width', 'box_border_color')
							),
						),
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content',
							'property'	=> 'border-style',
						)
					),
					'box_border_width'   => array(
						'type'      => 'text',
						'label'     => __('Border Width', 'bb-powerpack'),
						'size'      => 5,
						'maxlength' => 3,
						'default'   => 1,
						'description'   => __('px', 'bb-powerpack'),
						'preview'       => array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content',
							'property'	=> 'border-width',
							'unit'		=> 'px'
						)
					),
					'box_border_color'   => array(
						'type'      => 'color',
						'label'     => __('Border Color', 'bb-powerpack'),
						'show_reset'   => true,
						'preview'              => array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content',
							'property'	=> 'border-color',
						)
					),
					'box_shadow_display'   => array(
						'type'                 => 'pp-switch',
						'label'                => __('Enable Shadow', 'bb-powerpack'),
						'default'              => 'no',
						'options'              => array(
							'yes'          => __('Yes', 'bb-powerpack'),
							'no'             => __('No', 'bb-powerpack'),
						),
						'toggle'    =>  array(
							'yes'   => array(
								'fields'    => array('box_shadow', 'box_shadow_color', 'box_shadow_opacity')
							)
						)
					),
					'box_shadow' 		=> array(
						'type'              => 'pp-multitext',
						'label'             => __('Box Shadow', 'bb-powerpack'),
						'default'           => array(
							'vertical'			=> 2,
							'horizontal'		=> 2,
							'blur'				=> 2,
							'spread'			=> 1
						),
						'options'			=> array(
							'vertical'			=> array(
								'placeholder'		=> __('Vertical', 'bb-powerpack'),
								'tooltip'			=> __('Vertical', 'bb-powerpack'),
								'icon'				=> 'fa-arrows-v'
							),
							'horizontal'		=> array(
								'placeholder'		=> __('Horizontal', 'bb-powerpack'),
								'tooltip'			=> __('Horizontal', 'bb-powerpack'),
								'icon'				=> 'fa-arrows-h'
							),
							'blur'				=> array(
								'placeholder'		=> __('Blur', 'bb-powerpack'),
								'tooltip'			=> __('Blur', 'bb-powerpack'),
								'icon'				=> 'fa-circle-o'
							),
							'spread'			=> array(
								'placeholder'		=> __('Spread', 'bb-powerpack'),
								'tooltip'			=> __('Spread', 'bb-powerpack'),
								'icon'				=> 'fa-paint-brush'
							),
						)
					),
					'box_shadow_color' => array(
						'type'              => 'color',
						'label'             => __('Shadow Color', 'bb-powerpack'),
						'default'           => '000000',
					),
					'box_shadow_opacity' => array(
						'type'              => 'text',
						'label'             => __('Shadow Opacity', 'bb-powerpack'),
						'description'       => '%',
						'size'             => 5,
						'default'           => 50,
					),
					'box_border_radius' => array(
						'type'              => 'text',
						'label'             => __('Round Corners', 'bb-powerpack'),
						'description'       => 'px',
						'size'             	=> 5,
						'default'           => 0,
						'preview'			=> array(
							'type'				=> 'css',
							'selector'			=> '.pp-business-hours-content',
							'property'			=> 'border-radius',
							'unit'				=> 'px'
						)
					),
				)
			)
		)
	),
	'typography'	=> array(
		'title'	=> __( 'Typography', 'bb-powerpack' ),
		'sections'	=> array(
			'title_typography'	=> array(
				'title'	=> __( 'Day', 'bb-powerpack' ),
				'fields'	=> array(
					'title_font'	=> array(
						'type'		=> 'font',
						'label'		=> __('Font', 'bb-powerpack'),
						'default'	=> array(
							'family'	=> 'Default',
							'weight'	=> '400',
						),
						'preview'       => array(
							'type'		=> 'font',
							'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-title',
						),
					),
					'title_font_size' => array(
						'type'		=> 'pp-switch',
						'label'		=> __('Font Size', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'custom'         => __('Custom', 'bb-powerpack'),
						),
						'toggle'	=> array(
							'custom'	=> array(
								'fields'	=> array('title_custom_font_size')
							)
						),
					),
					'title_custom_font_size'	=> array(
						'type' 		=> 'pp-multitext',
						'label'		=> __('Custom Font Size', 'bb-powerpack'),
						'default'		=> array(
							'desktop'	=> 24,
							'tablet'	=> '',
							'mobile'	=> '',
						),
						'options' 		=> array(
							'desktop' => array(
								'icon'		=> 'fa-desktop',
								'placeholder'	=> __('Desktop', 'bb-powerpack'),
								'tooltip'	=> __('Desktop', 'bb-powerpack'),
								'preview'       => array(
									'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-title',
									'property'        => 'font-size',
									'unit'            => 'px'
								),
							),
							'tablet' => array(
								'icon'		=> 'fa-tablet',
								'placeholder'	=> __('Tablet', 'bb-powerpack'),
								'tooltip'	=> __('Tablet', 'bb-powerpack'),
							),
							'mobile' => array(
								'icon'		=> 'fa-mobile',
								'placeholder'	=> __('Mobile', 'bb-powerpack'),
								'tooltip'	=> __('Mobile', 'bb-powerpack'),
							),

						),
					),
					'title_line_height' => array(
						'type'		=> 'pp-switch',
						'label'		=> __('Line Height', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'custom'         => __('Custom', 'bb-powerpack'),
						),
						'toggle'	=> array(
							'custom'	=> array(
								'fields'	=> array('title_custom_line_height')
							)
						),
					),
					'title_custom_line_height'	=> array(
						'type' 		=> 'pp-multitext',
						'label'		=> __('Custom Line Height', 'bb-powerpack'),
						'help' 		=> __('Recommended values between 1-2', 'bb-powerpack'),
						'default'	=> array(
							'desktop'	=> 1.6,
							'tablet'	=> '',
							'mobile'	=> '',
						),
						'options' 		=> array(
							'desktop' => array(
								'icon'		=> 'fa-desktop',
								'placeholder'	=> __('Desktop', 'bb-powerpack'),
								'tooltip'	=> __('Desktop', 'bb-powerpack'),
								'preview'       => array(
									'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-title',
									'property'        => 'line-height',
								),
							),
							'tablet' => array(
								'icon'		=> 'fa-tablet',
								'placeholder'	=> __('Tablet', 'bb-powerpack'),
								'tooltip'	=> __('Tablet', 'bb-powerpack'),
							),
							'mobile' => array(
								'icon'		=> 'fa-mobile',
								'placeholder'	=> __('Mobile', 'bb-powerpack'),
								'tooltip'	=> __('Mobile', 'bb-powerpack'),
							),

						),
					),
					'title_text_transform' => array(
						'type'		=> 'select',
						'label'		=> __('Text Transform', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'lowercase'         => __('lowercase', 'bb-powerpack'),
							'uppercase'         => __('UPPERCASE', 'bb-powerpack'),
						),
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content .pp-bh-row .pp-bh-title',
							'property'	=> 'text-transform'
						)
					),
					'title_color'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Color', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content .pp-bh-row .pp-bh-title',
							'property'	=> 'color'
						)
					),
				)
			),
			'timing_typography'	=> array(
				'title'	=> __( 'Timing', 'bb-powerpack' ),
				'fields'	=> array(
					'timing_font'	=> array(
						'type'		=> 'font',
						'label'		=> __('Font', 'bb-powerpack'),
						'default'	=> array(
							'family'	=> 'Default',
							'weight'	=> '400',
						),
						'preview'       => array(
							'type'		=> 'font',
							'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-timing',
						),
					),
					'timing_font_size' => array(
						'type'		=> 'pp-switch',
						'label'		=> __('Font Size', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'custom'         => __('Custom', 'bb-powerpack'),
						),
						'toggle'	=> array(
							'custom'	=> array(
								'fields'	=> array('timing_custom_font_size')
							)
						),
					),
					'timing_custom_font_size'	=> array(
						'type' 		=> 'pp-multitext',
						'label'		=> __('Custom Font Size', 'bb-powerpack'),
						'default'		=> array(
							'desktop'	=> 24,
							'tablet'	=> '',
							'mobile'	=> '',
						),
						'options' 		=> array(
							'desktop' => array(
								'icon'		=> 'fa-desktop',
								'placeholder'	=> __('Desktop', 'bb-powerpack'),
								'tooltip'	=> __('Desktop', 'bb-powerpack'),
								'preview'       => array(
									'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-timing',
									'property'        => 'font-size',
									'unit'            => 'px'
								),
							),
							'tablet' => array(
								'icon'		=> 'fa-tablet',
								'placeholder'	=> __('Tablet', 'bb-powerpack'),
								'tooltip'	=> __('Tablet', 'bb-powerpack'),
							),
							'mobile' => array(
								'icon'		=> 'fa-mobile',
								'placeholder'	=> __('Mobile', 'bb-powerpack'),
								'tooltip'	=> __('Mobile', 'bb-powerpack'),
							),

						),
					),
					'timing_line_height' => array(
						'type'		=> 'pp-switch',
						'label'		=> __('Line Height', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'custom'         => __('Custom', 'bb-powerpack'),
						),
						'toggle'	=> array(
							'custom'	=> array(
								'fields'	=> array('timing_custom_line_height')
							)
						),
					),
					'timing_custom_line_height'	=> array(
						'type' 		=> 'pp-multitext',
						'label'		=> __('Custom Line Height', 'bb-powerpack'),
						'help' 		=> __('Recommended values between 1-2', 'bb-powerpack'),
						'default'	=> array(
							'desktop'	=> 1.6,
							'tablet'	=> '',
							'mobile'	=> '',
						),
						'options' 		=> array(
							'desktop' => array(
								'icon'		=> 'fa-desktop',
								'placeholder'	=> __('Desktop', 'bb-powerpack'),
								'tooltip'	=> __('Desktop', 'bb-powerpack'),
								'preview'       => array(
									'selector'        => '.pp-business-hours-content .pp-bh-row .pp-bh-timing',
									'property'        => 'line-height',
								),
							),
							'tablet' => array(
								'icon'		=> 'fa-tablet',
								'placeholder'	=> __('Tablet', 'bb-powerpack'),
								'tooltip'	=> __('Tablet', 'bb-powerpack'),
							),
							'mobile' => array(
								'icon'		=> 'fa-mobile',
								'placeholder'	=> __('Mobile', 'bb-powerpack'),
								'tooltip'	=> __('Mobile', 'bb-powerpack'),
							),

						),
					),
					'timing_text_transform' => array(
						'type'		=> 'select',
						'label'		=> __('Text Transform', 'bb-powerpack'),
						'default'	=> 'default',
						'options'       => array(
							'default'          => __('Default', 'bb-powerpack'),
							'lowercase'         => __('lowercase', 'bb-powerpack'),
							'uppercase'         => __('UPPERCASE', 'bb-powerpack'),
						),
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content .pp-bh-row .pp-bh-timing',
							'property'	=> 'text-transform'
						)
					),
					'timing_color'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Color', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content .pp-bh-row .pp-bh-timing',
							'property'	=> 'color'
						)
					),
					'status_color'  => array(
						'type'          => 'color',
						'default'       => '',
						'label'         => __( 'Status Text Color', 'bb-powerpack' ),
						'show_reset'		=> true,
						'preview'	=> array(
							'type'		=> 'css',
							'selector'	=> '.pp-business-hours-content .pp-bh-row.pp-closed .pp-bh-timing',
							'property'	=> 'color'
						)
					),
				)
			)
		)
	)
));

/**
 * Register a settings form to use in the "form" field type above.
 */
FLBuilder::register_settings_form('bh_settings_form', array(
    'title' => __('Timing Settings', 'bb-powerpack'),
    'tabs'  => array(
        'general'      => array( // Tab
            'title'         => __('General', 'bb-powerpack'), // Tab title
            'sections'      => array( // Tab Sections
                'general'       => array( // Section
                    'title'         => '', // Section Title
                    'fields'        => array( // Section Fields
						'highlight'   => array(
	                        'type'          => 'pp-switch',
	                        'label'         => __('Highlight this', 'bb-powerpack'),
	                        'default'       => 'no',
	                        'options'       => array(
	                            'yes'      => __('Yes', 'bb-powerpack'),
	                            'no'      => __('No', 'bb-powerpack'),
	                        ),
							'toggle'	=> array(
								'yes'	=> array(
									'tabs'	=> array('higlight_row_style')
								)
							)
	                    ),
                        'title'       => array(
                            'type'          => 'text',
                            'label'         => __( 'Day', 'bb-powerpack' ),
                            'default'       => ''
                        ),
						'status'   => array(
	                        'type'          => 'pp-switch',
	                        'label'         => __('Status', 'bb-powerpack'),
	                        'default'       => 'open',
	                        'options'       => array(
	                            'open'      => __('Open', 'bb-powerpack'),
	                            'close'      => __('Close', 'bb-powerpack'),
	                        ),
							'toggle'	=> array(
								'open'	=> array(
									'fields'	=> array('start_time', 'end_time')
								),
								'close'	=> array(
									'fields'	=> array('status_text', 'hl_status_color')
								)
							)
	                    ),
						'start_time' => array(
							'type'       => 'time',
							'label'      => __( 'Start Time', 'bb-powerpack' ),
							'default'		=>array(
								'hours'			=> '01',
								'minutes'		=> '00',
								'day_period'	=> 'am'
							)
						),
						'end_time' => array(
							'type'       => 'time',
							'label'      => __( 'End Time', 'bb-powerpack' ),
							'default'		=>array(
								'hours'			=> '01',
								'minutes'		=> '00',
								'day_period'	=> 'am'
							)
						),
						'status_text'       => array(
                            'type'          => 'text',
                            'label'         => __( 'Status Text', 'bb-powerpack' ),
                            'default'       => 'Closed'
                        ),
                    )
                )
            )
        ),
		'higlight_row_style'	=> array(
			'title'	=> __( 'Style', 'bb-powerpack' ),
			'sections'	=> array(
				'general'	=> array(
					'title'	=> '',
					'fields'	=> array(
						'hl_row_bg_color'  => array(
							'type'          => 'color',
							'default'       => '',
							'label'         => __( 'Background Color', 'bb-powerpack' ),
							'show_reset'		=> true,
						),
						'hl_title_color'  => array(
							'type'          => 'color',
							'default'       => '',
							'label'         => __( 'Day Color', 'bb-powerpack' ),
							'show_reset'		=> true,
						),
						'hl_timing_color'  => array(
							'type'          => 'color',
							'default'       => '',
							'label'         => __( 'Timing Color', 'bb-powerpack' ),
							'show_reset'		=> true,
						),
						'hl_status_color'  => array(
							'type'          => 'color',
							'default'       => '',
							'label'         => __( 'Status Color', 'bb-powerpack' ),
							'show_reset'		=> true,
						),
					)
				)
			)
		)
    )
));
