<?php

/**
 * @class PPHeadingModule
 */
class PPHeadingModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Smart Headings', 'bb-powerpack'),
            'description'   => __('A module for Smart Headings.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-heading/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-heading/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
            'partial_refresh' => true
        ));
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPHeadingModule', array(
    'heading_info_tab'       => array( // Tab
        'title'         => __('General', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'heading_section'       => array( // Section
                'title'        => __('Heading', 'bb-powerpack'), // Section Title
                'fields'       => array( // Section Fields
                    'heading_title'   => array(
                        'type'          => 'text',
                        'label'         => __('Title', 'bb-powerpack'),
                        'class'         => '',
                        'default'       => __('Main Heading', 'bb-powerpack'),
                        'preview'       => array(
                            'type'      => 'text',
                            'selector'  => '.pp-heading-content .pp-heading .heading-title span',
                        )
                    ),
					'heading_tag'    => array(
                        'type'          => 'select',
                        'label'         => __('Tag', 'bb-powerpack'),
                        'default'       => 'h2',
                        'options'       => array(
                            'h1'      => 'H1',
                            'h2'      => 'H2',
                            'h3'      => 'H3',
                            'h4'      => 'H4',
                            'h5'      => 'H5',
                            'h6'      => 'H6',
                        )
                    ),
                    'heading_alignment'     => array(
                       'type'      => 'pp-switch',
                       'label'     => __('Alignment', 'bb-powerpack'),
                       'default'     => 'center',
                       'options'       => array(
                            'left'          => __('Left', 'bb-powerpack'),
                            'center'          => __('Center', 'bb-powerpack'),
                            'right'          => __('Right', 'bb-powerpack'),
                        )
                   ),
                )
            ),
            'heading_sub_title'         => array(
                'title'                     => __('Sub Heading', 'bb-powerpack'),
                'fields'                    => array(
                    'heading_sub_title'     => array(
                        'type'                  => 'editor',
                        'label'                 => '',
                        'default'               => __('Sub Heading', 'bb-powerpack'),
                        'rows'                  => '6',
                        'media_buttons'         => false,
                        'preview'               => array(
                            'type'                  => 'text',
                            'selector'              => '.pp-heading-content .pp-sub-heading'
                        )
                    ),
                )
            ),
        )
    ),
    'heading_separator'         => array(
        'title'                     => __('Separator', 'bb-powerpack'),
        'sections'                  => array(
            'heading_separator'     => array(
                'title'                     => '',
                'fields'                    => array(
                    'heading_separator'     => array(
                        'type'      => 'select',
                        'label'     => __('Separator', 'bb-powerpack'),
                        'default'     => 'left',
                        'options'       => array(
                            'no_spacer'          => __('No Separator', 'bb-powerpack'),
                            'inline'          => __('Inline', 'bb-powerpack'),
                            'line_only'          => __('Line', 'bb-powerpack'),
                            'icon_only'          => __('Icon/Image', 'bb-powerpack'),
                            'line_with_icon'     => __('Line With Icon/Image', 'bb-powerpack'),
                        ),
                        'toggle' => array(
                             'inline'        => array(
                                 'fields'  => array('heading_line_style', 'font_title_line_space'),
                                 'sections' => array('heading_line_style_section'),
                             ),
                             'line_only'      => array(
                                 'fields'  => array('heading_line_style', 'heading_separator_postion'),
                                 'sections' => array('heading_line_style_section', 'heading_separator_style_section'),
                             ),
                             'icon_only'      => array(
                                 'fields'  => array('heading_separator_postion', 'font_icon_color'),
                                 'sections'  => array('heading_separator_style_section', 'heading_icon_image_style_section', 'heading_icon_image_settings'),
                             ),
                             'line_with_icon'      => array(
                                 'fields'  => array('heading_line_style', 'font_icon_line_space', 'heading_separator_postion', 'font_icon_color'),
                                 'sections' => array('heading_line_style_section', 'heading_separator_style_section', 'heading_icon_image_style_section', 'heading_icon_image_settings')
                             ),
                             'no_spacer' => array(
                                 'fields' => array(),
                                 'sections' => array(),
                             )
                         )
                     ),
                     'heading_separator_postion' => array(
                         'type'      => 'select',
                         'label'     => __('Position', 'bb-powerpack'),
                         'default'     => 'middle',
                         'options'       => array(
                            'top'            => __('Above Heading', 'bb-powerpack'),
                            'middle'         => __('Between Heading & Sub-Heading', 'bb-powerpack'),
                            'bottom'         => __('Below Sub-Heading', 'bb-powerpack'),
                          )
                     ),
                     'heading_line_style'     => array(
                         'type'      => 'pp-switch',
                         'label'     => __('Line Style', 'bb-powerpack'),
                         'default'     => 'solid',
                         'options'       => array(
                              'solid'          => __('Solid', 'bb-powerpack'),
                              'dashed'         => __('Dashed', 'bb-powerpack'),
                              'dotted'         => __('Dotted', 'bb-powerpack'),
                              'double'         => __('Double', 'bb-powerpack'),
                          )
                     ),
                     'font_title_line_space'   => array(
                         'type'          => 'text',
                         'label'         => __('Space between Line & Title', 'bb-powerpack'),
                         'description'   => 'px',
                         'class'         => 'bb-heading-input input-small',
                         'default'       => '20',
                         'preview'       => array(
                             'type'      => 'css',
                             'rules'           => array(
                                array(
                                    'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span',
                                    'property'        => 'padding-left',
                                    'unit'            => 'px',
                                ),
                                array(
                                    'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span',
                                    'property'        => 'padding-right',
                                    'unit'            => 'px',
                                ),
                            ),
                         )
                     ),
                )
            ),
            'heading_icon_image_settings'       => array( // Section
                'title'        => __('Icon', 'bb-powerpack'), // Section Title
                'fields'       => array( // Section Fields
                    'heading_icon_select'       => array(
                        'type'          => 'select',
						'label'         => __('Icon Source', 'bb-powerpack'),
                        'default'       => 'font_icon_select',
						'options'       => array(
							'font_icon_select'         => __('Icon Library', 'bb-powerpack'),
							'custom_icon_select'       => __('Custom Image', 'bb-powerpack')
						),
                        'toggle' => array(
                            'font_icon_select'    => array(
                                'fields'   => array('heading_font_icon_select', 'font_icon_color'),
                            ),
                            'custom_icon_select'   => array(
                                'fields'  => array('heading_custom_icon_select'),
                            ),
                        )
					),
                    'heading_font_icon_select' => array(
						'type'          => 'icon',
						'label'         => __('Icon', 'bb-powerpack')
					),
                    'heading_custom_icon_select'     => array(
                        'type'              => 'photo',
                        'label'         => __('Custom Image', 'bb-powerpack'),
                        'default'       => '',
                    ),
                    'font_icon_line_space'   => array(
                        'type'          => 'text',
                        'label'         => __('Space between Line & Icon/Image', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '20',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:before',
                                   'property'        => 'margin-right',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:after',
                                   'property'        => 'margin-left',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                )
            ),
            'heading_line_style_section'    => array( // Section
                'title'             => __('Size & Color', 'bb-powerpack'), // Section Title
                'fields'            => array( // Section Fields
					'line_width'   => array(
                        'type'          => 'text',
                        'label'         => __('Width', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '100',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-separator-line',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:after',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:before',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:before',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:after',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'line_height'       => array(
                        'type'          => 'text',
                        'label'         => __('Height', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '1',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:before',
                                   'property'        => 'border-bottom-width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:after',
                                   'property'        => 'border-bottom-width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-separator-line',
                                   'property'        => 'border-bottom-width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:before',
                                   'property'        => 'border-bottom-width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:after',
                                   'property'        => 'border-bottom-width',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'line_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '000000',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:before',
                                   'property'        => 'border-color',
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon:after',
                                   'property'        => 'border-color',
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-separator-line',
                                   'property'        => 'border-bottom-color',
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:before',
                                   'property'        => 'border-color',
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading.pp-separator-inline .heading-title span:after',
                                   'property'        => 'border-color',
                               ),
                           ),
                        )
                    ),
                )
            ),
            'heading_icon_image_style_section'    => array( // Section
                'title'             => __('Icon/Image Style', 'bb-powerpack'), // Section Title
                'fields'            => array( // Section Fields
                    'font_icon_font_size'   => array(
                        'type'          => 'text',
                        'label'         => __('Icon Size', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '16',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon i, .pp-heading-content .pp-heading-separator .pp-heading-separator-icon i:before',
                                   'property'        => 'font-size',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator img.heading-icon-image',
                                   'property'        => 'width',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'font_icon_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '000000',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-heading-content .pp-heading-separator',
                            'property'        => 'color'
                        )
                    ),
                    'font_icon_bg_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'bb-powerpack'),
                        'default'       => '',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'background-color',
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'background-color',
                               ),
                           ),
                        )
                    ),
                    'font_icon_border_width'   => array(
                        'type'          => 'text',
                        'label'         => __('Border Width', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'border-width',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'border-width',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'font_icon_border_style'     => array(
                        'type'      => 'select',
                        'label'     => __('Border Style', 'bb-powerpack'),
                        'default'     => 'none',
                        'options'       => array(
                             'none'          => __('None', 'bb-powerpack'),
                             'solid'          => __('Solid', 'bb-powerpack'),
                             'dashed'          => __('Dashed', 'bb-powerpack'),
                             'dotted'          => __('Dotted', 'bb-powerpack'),
                             'double'          => __('Double', 'bb-powerpack'),
                         )
                    ),
                    'font_icon_border_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Border Color', 'bb-powerpack'),
                        'default'       => '',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'border-color',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'border-color',
                               ),
                           ),
                        )
                    ),
                    'font_icon_border_radius'   => array(
                        'type'          => 'text',
                        'label'         => __('Border Radius', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '100',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'border-radius',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'border-radius',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only img',
                                   'property'        => 'border-radius',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.line_with_icon img',
                                   'property'        => 'border-radius',
                                   'unit'            => 'px'
                               )
                           ),
                        )
                    ),
                    'font_icon_padding_top'   => array(
                        'type'          => 'text',
                        'label'         => __('Padding Top', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'padding-top',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'padding-top',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'font_icon_padding_bottom'   => array(
                        'type'          => 'text',
                        'label'         => __('Padding Bottom', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'padding-bottom',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'padding-bottom',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'font_icon_padding_left'   => array(
                        'type'          => 'text',
                        'label'         => __('Padding Left', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'padding-left',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'padding-left',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                    'font_icon_padding_right'   => array(
                        'type'          => 'text',
                        'label'         => __('Padding Right', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'           => array(
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator .pp-heading-separator-icon',
                                   'property'        => 'padding-right',
                                   'unit'            => 'px'
                               ),
                               array(
                                   'selector'        => '.pp-heading-content .pp-heading-separator.icon_only span',
                                   'property'        => 'padding-right',
                                   'unit'            => 'px'
                               ),
                           ),
                        )
                    ),
                )
            ),
            'heading_separator_style_section'    => array( // Section
                'title'             => __('Margin', 'bb-powerpack'), // Section Title
                'fields'            => array( // Section Fields
                    'separator_heading_top_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Top Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '10',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading-separator',
                            'property'  => 'margin-top',
                            'unit'      => 'px'
                        )
                    ),
                    'separator_heading_bottom_margin' => array(
                        'type'          => 'text',
                        'label'         => __('Bottom Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '10',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading-separator',
                            'property'  => 'margin-bottom',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
        )
    ),
    'heading_style_tab'       => array( // Tab
        'title'         => __('Style', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'main_heading_style'       => array( // Section
                'title'         => __('Heading Style', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'heading_font' => array(
                        'type'          => 'font',
                        'default'		=> array(
                            'family'		=> 'Default',
                            'weight'		=> 300
                        ),
                        'label'         => __('Font', 'bb-powerpack'),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.pp-heading-content .pp-heading .heading-title'
                        )
                    ),
                    'heading_font_size_select'     => array(
						'type'          => 'select',
						'label'         => __('Font Size', 'bb-powerpack'),
						'default'       => 'default',
						'options'       => array(
							'default'       =>  __('Default', 'bb-powerpack'),
							'custom'        =>  __('Custom', 'bb-powerpack')
						),
						'toggle'        => array(
							'custom'        => array(
								'fields'        => array('heading_font_size')
							)
						)
					),
					'heading_font_size' => array(
                        'type'          => 'text',
                        'label'         => __('Custom Font Size', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '20',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading .heading-title',
                            'property'  => 'font-size',
                            'unit'      => 'px'
                        )
					),
                    'heading_line_height_n'   => array(
                        'type'          => 'text',
                        'label'         => __('Line Height', 'bb-powerpack'),
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '1.4',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading .heading-title',
                            'property'  => 'line-height',
                        )
                    ),
                    'heading_letter_space'  => array(
                       'type'                  => 'text',
                       'label'                 => __('Letter Spacing', 'bb-powerpack'),
                       'description'           => 'px',
                       'class'                 => 'bb-heading-input input-small',
                       'default'               => '',
                       'preview'               => array(
                           'type'                  => 'css',
                           'selector'              => '.pp-heading-content .pp-heading .heading-title',
                           'property'              => 'letter-spacing',
                           'unit'                  => 'px'
                       )
                   ),
                    'heading_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '000000',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-heading-content .pp-heading .heading-title',
                            'property'        => 'color'
                        )
                    ),
                    'heading_top_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Top Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '10',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading .heading-title',
                            'property'  => 'margin-top',
                            'unit'      => 'px'
                        )
                    ),
                    'heading_bottom_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Bottom Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '10',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-heading .heading-title',
                            'property'  => 'margin-bottom',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
            'sub_heading_style'       => array( // Section
                'title'         => __('Sub Heading Style', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'sub_heading_font' => array(
                        'type'          => 'font',
                        'default'		=> array(
                            'family'		=> 'Default',
                            'weight'		=> 300
                        ),
                        'label'         => __('Font', 'bb-powerpack'),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.pp-heading-content .pp-sub-heading'
                        )
                    ),
                    'sub_heading_font_size'   => array(
                        'type'          => 'text',
                        'label'         => __('Font Size', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '16',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-sub-heading',
                            'property'  => 'font-size',
                            'unit'      => 'px'
                        )
                    ),
                    'sub_heading_line_height_n'   => array(
                        'type'          => 'text',
                        'label'         => __('Line Height', 'bb-powerpack'),
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '1.6',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-sub-heading',
                            'property'  => 'line-height',
                        )
                    ),
                    'sub_heading_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '000000',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.pp-heading-content .pp-sub-heading',
                            'property'        => 'color'
                        )
                    ),
                    'sub_heading_top_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Top Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-sub-heading',
                            'property'  => 'margin-top',
                            'unit'      => 'px'
                        )
                    ),
                    'sub_heading_bottom_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Bottom Margin', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-heading-input input-small',
                        'default'       => '0',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-heading-content .pp-sub-heading',
                            'property'  => 'margin-bottom',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
        )
    ),
    'heading_responsive'       => array( // Tab
        'title'         => __('Responsive', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'section_desc'  => array(
                'title'         => '',
                'fields'        => array(
                    'pro_desc'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Responsive options are available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack')
                    )
                )
            ),
        )
    )
));
