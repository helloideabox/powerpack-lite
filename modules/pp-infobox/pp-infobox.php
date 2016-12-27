<?php

/**
 * @class PPInfoBoxModule
 */
class PPInfoBoxModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Info Box', 'bb-powerpack'),
            'description'   => __('Addon to display info box.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-infobox/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-infobox/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
            'partial_refresh'   => true
        ));

		$this->add_css('font-awesome');
    }

}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPInfoBoxModule', array(
	'general'      => array( // Tab
		'title'         => __('General', 'bb-powerpack'), // Tab title
		'sections'      => array( // Tab Sections
            'layout'        => array(
                'title'         => '',
                'fields'        => array(
                    'layouts'       => array(
                        'type'      => 'select',
                        'label'     => __('Layout', 'bb-powerpack'),
                        'default'   => '5',
                        'options'   => array(
                            '5'         => __('Icon at Top', 'bb-powerpack'),
                            '3'         => __('Icon at Left (Pro)', 'bb-powerpack'),
                            '4'         => __('Icon at Right (Pro)', 'bb-powerpack'),
                            '1'         => __('Icon at Left with Title (Pro)', 'bb-powerpack'),
                            '2'         => __('Icon at Right with Title (Pro)', 'bb-powerpack'),
                        ),
                        'toggle'        => array(
                            '1'             => array(
                                'fields'        => array('pro_desc_1')
                            ),
                            '2'             => array(
                                'fields'        => array('pro_desc_1')
                            ),
                            '3'             => array(
                                'fields'        => array('pro_desc_1')
                            ),
                            '4'             => array(
                                'fields'        => array('pro_desc_1')
                            )
                        )
                    ),
                    'pro_desc_1'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('This layout is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    )
                ),
            ),
            'type'      => array(
                'title'     => __('Icon', 'bb-powerpack'),
                'fields'    => array(
                    'icon_type'     => array(
                        'type'      => 'select',
                        'label'     => __('Icon Type', 'bb-powerpack'),
                        'default'   => 'icon',
                        'options'   => array(
                            'icon'      => __('Icon', 'bb-powerpack'),
                            'image'      => __('Image (Pro)', 'bb-powerpack'),
                        ),
                        'toggle'        => array(
                            'icon'      => array(
                                'sections'      => array('icon_colors'),
                                'fields'        => array('icon_select', 'icon_color', 'icon_font_size', 'icon_color_hover', 'icon_background', 'icon_background_hover', 'icon_width'),
                            ),
                            'image'      => array(
                                'fields'        => array('pro_desc_4'),
                            ),
                        ),
                    ),
                    'pro_desc_4'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('This option is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                    'icon_select'       => array(
                        'type'      => 'icon',
                        'label'     => __('Icon', 'bb-powerpack'),
                        'show_remove'   => true
                    ),
                ),
            ),
            'title'     => array(
                'title'     => __('Title', 'bb-powerpack'),
                'fields'    => array(
                    'title'     => array(
                        'type'      => 'text',
                        'label'     => '',
                        'preview'       => array(
							'type'          => 'text',
							'selector'      => '.pp-infobox-title-wrapper .pp-infobox-title'
						)
                    ),
                ),
            ),
            'description'     => array(
                'title'     => __('Description', 'bb-powerpack'),
                'fields'    => array(
                    'description'     => array(
                        'type'      => 'editor',
                        'label'     => '',
                        'default'     => '',
                        'media_buttons' => false,
                        'rows'      => 4,
                        'preview'       => array(
							'type'          => 'text',
							'selector'      => '.pp-infobox-description'
						)
                    ),
                ),
            ),
            'pp_infobox_link_type'     => array(
                'title'     => __('Link', 'bb-powerpack'),
                'fields'    => array(
                    'pp_infobox_link_type'     => array(
                        'type'      => 'select',
                        'label'     => __('Link Type', 'bb-powerpack'),
                        'default'     => 'none',
                        'options'   => array(
                            'none'  => __('None', 'bb-powerpack'),
                            'box'  => __('Complete Box', 'bb-powerpack'),
                            'title'  => __('Title Only', 'bb-powerpack'),
                            'read_more'  => __('Read More', 'bb-powerpack'),
                        ),
                        'toggle'    => array(
                            'box'     => array(
                                'fields'    => array('link')
                            ),
                            'title'     => array(
                                'fields'    => array('link')
                            ),
                            'read_more'     => array(
                                'fields'        => array('pp_infobox_read_more_text', 'pp_infobox_read_more_color', 'pp_infobox_read_more_color_hover', 'link'),
                                'sections'      => array('button_typography')
                            ),
                        )
                    ),
                    'pp_infobox_read_more_text'     => array(
                        'type'      => 'text',
                        'label'         => __('Text', 'bb-powerpack'),
                        'default'       => __('Read More', 'bb-powerpack'),
                        'preview'       => array(
                            'type'      => 'text',
                            'selector'  => '.pp-more-link'
                        ),
                    ),
                    'pp_infobox_read_more_color'    => array(
                        'type'      => 'color',
                        'label'     => __('Link Color', 'bb-powerpack'),
                        'default'   => '000000',
                        'show_reset'    => true,
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-more-link',
                            'property'  => 'color'
                        ),
                    ),
                    'pp_infobox_read_more_color_hover'    => array(
                        'type'      => 'color',
                        'label'     => __('Link Hover Color', 'bb-powerpack'),
                        'default'   => 'dddddd',
                        'show_reset'    => true,
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-more-link:hover',
                            'property'  => 'color'
                        ),
                    ),
                    'link'  => array(
                        'type'          => 'link',
						'label'         => __('Link', 'bb-powerpack'),
						'placeholder'   => __( 'http://www.example.com', 'bb-powerpack' ),
						'preview'       => array(
							'type'          => 'none'
						)
                    ),
                ),
            ),
		)
	),
    'box'       => array(
        'title'     => __('Box Style', 'bb-powerpack'),
        'sections'  => array(
            'box_Style'     => array(
                'title'     => __('Colors', 'bb-powerpack'),
                'fields'    => array(
                    'box_background'    => array(
                        'type'              => 'color',
                        'label'             => __('Background Color', 'bb-powerpack'),
                        'default'           => 'ffffff',
                        'show_reset'        => true,
                        'preview'           => array(
                            'type'              => 'css',
                            'selector'          => '.pp-infobox',
                            'property'          => 'background'
                        ),
                    ),
                    'box_background_hover'    => array(
                        'type'      => 'color',
                        'label'     => __('Background Color Hover', 'bb-powerpack'),
                        'default'   => '',
                        'show_reset'    => true,
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-infobox:hover',
                            'property'  => 'background'
                        ),
                    ),
                )
            ),
            'box_border'    => array(
                'title'         => __('Border', 'bb-powerpack'),
                'fields'        => array(
                    'box_border_style'    => array(
                        'type'      => 'select',
                        'label'     => __('Border Style', 'bb-powerpack'),
                        'default'   => 'none',
                        'options'   => array(
                            'none'     => __('None', 'bb-powerpack'),
                            'solid'     => __('Solid', 'bb-powerpack'),
                            'dashed'     => __('Dashed', 'bb-powerpack'),
                            'dotted'     => __('Dotted', 'bb-powerpack'),
                            'double'     => __('Double', 'bb-powerpack'),
                        ),
                        'toggle'   => array(
                            'solid'  => array(
                                'fields'    => array('box_border_width', 'box_border_color'),
                            ),
                            'dashed'  => array(
                                'fields'    => array('box_border_width', 'box_border_color'),
                            ),
                            'dotted'  => array(
                                'fields'    => array('box_border_width', 'box_border_color'),
                            ),
                            'double'  => array(
                                'fields'    => array('box_border_width', 'box_border_color'),
                            ),
                        ),
                    ),
                    'box_border_width'    => array(
                        'type'      => 'text',
                        'label'     => __('Border Width', 'bb-powerpack'),
                        'default'   => '0',
                        'size'          => '5',
                        'maxlength'     => '2',
                        'description'   => _x( 'px', 'Value unit for border width. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-infobox',
                            'property'  => 'border-width',
                            'unit'      => 'px'
                        ),
                    ),
                    'box_border_color'    => array(
                        'type'      => 'color',
                        'label'     => __('Border Color', 'bb-powerpack'),
                        'default'   => '000000',
                        'show_reset'    => true,
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-infobox',
                            'property'  => 'border-color'
                        ),
                    ),
                    'box_border_radius'     => array(
                        'type'      => 'text',
                        'label'     => __('Round Corners', 'bb-powerpack'),
                        'size'      => '5',
                        'maxlength' => '3',
                        'default'   => '0',
                        'description'   => __('px', 'bb-powerpack'),
                        'preview'   => array(
                            'type'  => 'css',
                            'selector'  => '.pp-infobox',
                            'property'  => 'border-radius',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
            'box_padding'   => array(
                'title'         => __('Padding', 'bb-powerpack'),
                'fields'        => array(
                    'padding_top'   => array(
                        'type'      => 'text',
                        'size'      => '5',
                        'maxlength'     => '3',
                        'default'       => '20',
                        'label'     => __('Top/Bottom Padding', 'bb-powerpack'),
                        'description'   => _x( 'px', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infobox',
                                    'property'      => 'padding-top',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox',
                                    'property'      => 'padding-bottom',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                    'padding_left'   => array(
                        'type'      => 'text',
                        'size'      => '5',
                        'maxlength'     => '3',
                        'default'       => '20',
                        'label'     => __('Left/Right Padding', 'bb-powerpack'),
                        'description'   => _x( 'px', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infobox',
                                    'property'      => 'padding-left',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox',
                                    'property'      => 'padding-right',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                ),
            ),
        ),
    ),
    'icon_styles'   => array(
        'title'     => __('Icon Style', 'bb-powerpack'),
        'sections'  => array(
            'icon_size'   => array(
                'title'     => __('Size', 'bb-powerpack'),
                'fields'    => array(
                    'icon_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
                        'default'       => '40',
						'label'         => __('Icon Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'         => array(
                                array(
                                    'selector'      => '.pp-infobox-icon-inner span.pp-icon',
                                    'property'      => 'font-size',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-icon-inner span.pp-icon:before',
                                    'property'      => 'font-size',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
					),
                    'icon_width'    => array(
                        'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '3',
                        'default'       => '0',
						'label'         => __('Icon Box Size', 'bb-powerpack'),
                        'description'   => _x( 'px', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'           => array(
                                array(
                                    'selector'      => '.pp-infobox-icon-inner',
                                    'property'     => 'width',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-icon-inner',
                                    'property'     => 'height',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'icon_colors'   => array(
                'title'         => __('Colors', 'bb-powerpack'),
                'fields'        => array(
                    'icon_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-icon-inner',
                            'property'      => 'color',
                        )
                    ),
                    'icon_color_hover'    => array(
                        'type'          => 'color',
                        'label'         => __('Color Hover', 'bb-powerpack'),
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-icon:hover-inner',
                            'property'      => 'color',
                        )
                    ),
                    'icon_background'    => array(
                        'type'          => 'color',
                        'label'         => __('Background', 'bb-powerpack'),
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-icon-inner',
                            'property'      => 'background',
                        )
                    ),
                    'icon_background_hover'    => array(
                        'type'          => 'color',
                        'label'         => __('Background Hover', 'bb-powerpack'),
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-icon-inner:hover',
                            'property'      => 'background',
                        )
                    ),
                )
            ),
            'icon_border'   => array(
                'title'         => __('Border', 'bb-powerpack'),
                'fields'        => array(
                    'show_border'   => array(
                        'type'      => 'pp-switch',
                        'label'     => __('Show Border', 'bb-powerpack'),
                        'default'   => 'no',
                        'options'   => array(
                            'yes'    => __('Yes', 'bb-powerpack'),
                            'no'    => __('No', 'bb-powerpack'),
                        ),
                        'toggle'    => array(
                            'yes'   => array(
                                'fields'    => array ('icon_border_width', 'icon_border_color', 'icon_border_color_hover', 'icon_border_style', 'icon_box_size')
                            )
                        ),
                    ),
                    'icon_border_style'    => array(
                        'type'      => 'pp-switch',
                        'label'     => __('Border Style', 'bb-powerpack'),
                        'default'   => 'solid',
                        'options'   => array(
                            'solid'     => __('Solid', 'bb-powerpack'),
                            'dashed'     => __('Dashed', 'bb-powerpack'),
                            'dotted'     => __('Dotted', 'bb-powerpack'),
                            'double'     => __('Double', 'bb-powerpack'),
                        ),
                    ),
                    'icon_border_width'    => array(
						'type'          => 'text',
						'label'         => __('Border Width', 'bb-powerpack'),
						'default'       => 1,
                        'size'          => 5,
                        'maxlength'     => 2,
                        'description'   => _x( 'px', 'Value unit for border width. Such as: "10px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'         => array(
                                array(
                                    'selector'      => '.pp-infobox-icon',
                                    'property'      => 'border-width',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-image img',
                                    'property'      => 'border-width',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
					),
                    'icon_border_color'    => array(
						'type'          => 'color',
						'label'         => __('Border Color', 'bb-powerpack'),
						'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infobox-icon',
                                    'property'      => 'border-color',
                                ),
                                array(
                                    'selector'      => '.pp-infobox-image img',
                                    'property'      => 'border-color',
                                ),
                            ),
                        )
					),
                    'icon_border_color_hover'    => array(
						'type'          => 'color',
						'label'         => __('Border Color Hover', 'bb-powerpack'),
						'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infobox-icon:hover',
                                    'property'      => 'border-color',
                                ),
                                array(
                                    'selector'      => '.pp-infobox-image img:hover',
                                    'property'      => 'border-color',
                                ),
                            ),
                        )
					),
                    'icon_box_size'     => array(
                        'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '3',
                        'default'     => '0',
                        'label'         => __('Inside Spacing', 'bb-powerpack'),
						'description'   => _x( 'px', 'bb-powerpack' ),
                        'help'      => __('Space between icon and the border', 'bb-powerpack'),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'           => array(
                                array(
                                    'selector'      => '.pp-infobox-image img',
                                    'property'     => 'padding',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-icon',
                                    'property'     => 'padding',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                    'icon_border_radius'    => array(
						'type'          => 'text',
						'label'         => __('Round Corners', 'bb-powerpack'),
						'default'       => '0',
                        'size'          => '5',
                        'maxlength'     => '3',
                        'description'   => _x( 'px', 'Value unit for border radius. Such as: "10px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infobox-icon',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-icon-inner',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-icon-inner span.pp-icon',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infobox-image img',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
					),
                )
            ),
        ),
    ),
    'styles'      => array( // Tab
		'title'         => __('Typography', 'bb-powerpack'), // Tab title
		'sections'      => array( // Tab Sections
            'general'     => array(
                'title'     => __('Title', 'bb-powerpack'),
                'fields'    => array(
                    'pro_desc_2'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Font Family is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                    'title_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
                        'default'       => '24',
						'label'         => __('Font Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-title-wrapper .pp-infobox-title',
                            'property'      => 'font-size',
                            'unit'          => 'px'
                        )
					),
                    'title_color'    => array(
						'type'          => 'color',
						'label'         => __('Color', 'bb-powerpack'),
						'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-title-wrapper .pp-infobox-title',
                            'property'      => 'color',
                        )
					),
                    'title_margin'      => array(
                        'type'              => 'pp-multitext',
                        'label'             => __('Margin', 'bb-powerpack'),
                        'description'       => 'px',
                        'default'           => array(
                            'top'               => 10,
                            'bottom'            => 10,
                        ),
                        'options'           => array(
                            'top'               => array(
                                'placeholder'       => __('Top', 'bb-powerpack'),
                                'tooltip'           => __('Top', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-up',
                                'preview'           => array(
                                    'selector'          => '.pp-infobox-title-wrapper .pp-infobox-title',
                                    'property'          => 'margin-top',
                                    'unit'              => 'px'
                                ),
                            ),
                            'bottom'            => array(
                                'placeholder'       => __('Bottom', 'bb-powerpack'),
                                'tooltip'           => __('Bottom', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-down',
                                'preview'           => array(
                                    'selector'          => '.pp-infobox-title-wrapper .pp-infobox-title',
                                    'property'          => 'margin-bottom',
                                    'unit'              => 'px'
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'text_typography'   => array(
                'title'     => __('Description', 'bb-powerpack'),
                'fields'    => array(
                    'pro_desc_3'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Font Family is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                    'text_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
                        'default'       => '16',
						'label'         => __('Font Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-description',
                            'property'      => 'font-size',
                            'unit'          => 'px'
                        )
					),
                    'text_color'    => array(
						'type'          => 'color',
						'label'         => __('Color', 'bb-powerpack'),
						'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infobox-description',
                            'property'      => 'color',
                        )
					),
                    'text_margin'       => array(
                        'type'              => 'pp-multitext',
                        'label'             => __('Margin', 'bb-powerpack'),
                        'description'       => 'px',
                        'default'           => array(
                            'top'               => 0,
                            'bottom'            => 0,
                        ),
                        'options'           => array(
                            'top'               => array(
                                'placeholder'       => __('Top', 'bb-powerpack'),
                                'tooltip'           => __('Top', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-up',
                                'preview'           => array(
                                    'selector'          => '.pp-infobox-description',
                                    'property'          => 'margin-top',
                                    'unit'              => 'px'
                                ),
                            ),
                            'bottom'            => array(
                                'placeholder'       => __('Bottom', 'bb-powerpack'),
                                'tooltip'           => __('Bottom', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-down',
                                'preview'           => array(
                                    'selector'          => '.pp-infobox-description',
                                    'property'          => 'margin-bottom',
                                    'unit'              => 'px'
                                ),
                            ),
                        )
                    ),
                )
            ),
            'button_typography'     => array(
                'title'     => __('Link', 'bb-powerpack'),
                'fields'    => array(
                    'pp_infobox_read_more_font'          => array(
                        'type'          => 'font',
                        'default'		=> array(
                            'family'		=> 'Default',
                            'weight'		=> 300
                        ),
                        'label'         => __('Font', 'bb-powerpack'),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.pp-more-link'
                        )
                    ),
                    'pp_infobox_read_more_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
						'label'         => __('Font Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-more-link',
                            'property'      => 'font-size',
                            'unit'          => 'px'
                        )
					),
                    'read_more_margin'       => array(
                        'type'              => 'pp-multitext',
                        'label'             => __('Margin', 'bb-powerpack'),
                        'description'       => 'px',
                        'default'           => array(
                            'top'               => 0,
                            'bottom'            => 0,
                        ),
                        'options'           => array(
                            'top'               => array(
                                'placeholder'       => __('Top', 'bb-powerpack'),
                                'tooltip'           => __('Top', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-up',
                                'preview'           => array(
                                    'selector'          => '.pp-more-link',
                                    'property'          => 'margin-top',
                                    'unit'              => 'px'
                                ),
                            ),
                            'bottom'            => array(
                                'placeholder'       => __('Bottom', 'bb-powerpack'),
                                'tooltip'           => __('Bottom', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-down',
                                'preview'           => array(
                                    'selector'          => '.pp-more-link',
                                    'property'          => 'margin-bottom',
                                    'unit'              => 'px'
                                ),
                            ),
                        )
                    ),
                )
            ),
		)
	)
));
