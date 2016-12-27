<?php

/**
 * @class PPInfoListModule
 */
class PPInfoListModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Info List', 'bb-powerpack'),
            'description'   => __('Addon to display info list.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-infolist/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-infolist/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
            'partial_refresh'   => true
        ));

        /**
         * Use these methods to enqueue css and js already
         * registered or to register and enqueue your own.
         */
        // Already registered
		$this->add_css('font-awesome');
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
FLBuilder::register_module('PPInfoListModule', array(
	'general'      => array( // Tab
		'title'         => __('General', 'bb-powerpack'), // Tab title
		'sections'      => array(
            'layouts'   => array(
                'title' => '',
                'fields'    => array(
                    'layouts'   => array(
                        'type'  => 'pp-switch',
                        'default'   => '1',
                        'label'     => __('Icon Position', 'bb-powerpack'),
                        'options'   => array(
                            '1'     => __('Left', 'bb-powerpack'),
                            '2'     => __('Right', 'bb-powerpack'),
                            '3'     => __('Top', 'bb-powerpack'),
                        ),
                    ),
                ),
            ),
            'connector'         => array(
                'title'             => __('Connector Line', 'bb-powerpack'),
                'fields'            => array(
                    'pro_desc_1'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('This option is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                ),
            ),
		)
	),
    'list_items'    => array(
        'title'     => __('List Items', 'bb-powerpack'),
        'sections'  => array(
            'general'   => array(
                'title'     => '',
                'fields'    => array(
                    'list_items'    => array(
                        'type'          => 'form',
						'label'         => __('List Item', 'bb-powerpack'),
						'form'          => 'pp_list_item', // ID from registered form below
						'preview_text'  => 'title', // Name of a field to use for the preview text
						'multiple'      => true
                    ),
                ),
            ),
        ),
    ),
    'style'     => array(
        'title' => __('Style', 'bb-powerpack'),
        'sections'  => array(
            'style' => array(
                'title' => __('Sizes', 'bb-powerpack'),
                'fields'    => array(
                    'icon_font_size'    => array(
                        'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
                        'default'       => '16',
                        'label'         => __('Icon Size', 'bb-powerpack'),
                        'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infolist-icon-inner span',
                                    'property'      => 'font-size',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon-inner span:before',
                                    'property'      => 'font-size',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                    'icon_box_width'    => array(
                        'type'      => 'text',
                        'label'     => __('Icon Box Size', 'bb-powerpack'),
                        'size'      => '5',
                        'maxlength'     => '3',
                        'default'       => '40',
                        'description'   => _x( 'px', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infolist-icon-inner',
                                    'property'      => 'height',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon-inner',
                                    'property'      => 'width',
                                    'unit'          => 'px'
                                ),
                            ),
                        ),
                    ),
                )
            ),
            'icon_border'   => array(
                'title'         => __('Border', 'bb-powerpack'),
                'fields'        => array(
                    'pro_desc_5'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Border options are available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
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
                                    'selector'      => '.pp-infolist-icon',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon-inner',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon-inner span.pp-icon',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon-inner img',
                                    'property'      => 'border-radius',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'icon_spacing'   => array(
                'title'          => __('Spacing', 'bb-powerpack'),
                'fields'        => array(
                    'list_spacing'  => array(
                        'type'      => 'text',
                        'label'     => __('List Spacing', 'bb-powerpack'),
                        'size'      => 5,
                        'maxlength' => 3,
                        'default'   => 25,
                        'help'      => __('Spacing between two list items.', 'bb-powerpack'),
                        'description'   => __('px', 'bb-powerpack'),
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-infolist-wrap .pp-list-item',
                            'property'  => 'margin-bottom',
                            'unit'      => 'px'
                        ),
                    ),
                    'icon_gap'  => array(
                        'type'      => 'text',
                        'label'     => __('Icon Spacing', 'bb-powerpack'),
                        'size'      => 5,
                        'maxlength' => 3,
                        'default'   => 20,
                        'help'   => __('Distance between icon and content.', 'bb-powerpack'),
                        'description'   => __('px', 'bb-powerpack'),
                        'preview'       => array(
                            'type'      => 'css',
                            'rules'     => array(
                                array(
                                    'selector'  => '.pp-infolist-wrap .layout-1 .pp-icon-wrapper',
                                    'property'  => 'margin-right',
                                    'unit'      => 'px'
                                ),
                                array(
                                    'selector'  => '.pp-infolist-wrap .layout-2 .pp-icon-wrapper',
                                    'property'  => 'margin-left',
                                    'unit'      => 'px'
                                ),
                                array(
                                    'selector'  => '.pp-infolist-wrap .layout-3 .pp-icon-wrapper',
                                    'property'  => 'margin-bottom',
                                    'unit'      => 'px'
                                ),
                            ),
                        ),
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
                                    'selector'      => '.pp-infolist-icon-inner img',
                                    'property'     => 'padding',
                                    'unit'          => 'px'
                                ),
                                array(
                                    'selector'      => '.pp-infolist-icon',
                                    'property'     => 'padding',
                                    'unit'          => 'px'
                                ),
                            ),
                        )
                    ),
                )
            ),
        ),
    ),
    'typography'      => array( // Tab
		'title'         => __('Typography', 'bb-powerpack'), // Tab title
		'sections'      => array( // Tab Sections
            'general'     => array(
                'title'     => __('Title', 'bb-powerpack'),
                'fields'    => array(
                    'pro_desc_3'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Font Family is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                    'title_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
						'label'         => __('Font Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infolist-title h3',
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
                            'rules'     => array(
                                array(
                                    'selector'      => '.pp-infolist-title h3',
                                    'property'      => 'color',
                                ),
                                array(
                                    'selector'      => '.pp-infolist-title a h3',
                                    'property'      => 'color',
                                ),
                            ),
                        )
					),
                    'title_margin'      => array(
                        'type'              => 'pp-multitext',
                        'label'             => __('Margin', 'bb-powerpack'),
                        'description'       => 'px',
                        'default'           => array(
                            'top'               => 0,
                            'bottom'            => 0
                        ),
                        'options'           => array(
                            'top'               => array(
                                'placeholder'       => __('Top', 'bb-powerpack'),
                                'tooltip'           => __('Top', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-up',
                                'preview'           => array(
                                    'selector'          => '.pp-infolist-title h3',
                                    'property'          => 'margin-top',
                                    'unit'              => 'px'
                                ),
                            ),
                            'bottom'            => array(
                                'placeholder'       => __('Bottom', 'bb-powerpack'),
                                'tooltip'           => __('Bottom', 'bb-powerpack'),
                                'icon'              => 'fa-long-arrow-down',
                                'preview'           => array(
                                    'selector'          => '.pp-infolist-title h3',
                                    'property'          => 'margin-bottom',
                                    'unit'              => 'px'
                                ),
                            )
                        )
                    ),
                ),
            ),
            'text_typography'   => array(
                'title'     => __('Description', 'bb-powerpack'),
                'fields'    => array(
                    'pro_desc_4'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Font Family is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                        'color'         => 'ffffff',
                        'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                    ),
                    'text_font_size'    => array(
						'type'          => 'text',
                        'size'          => '5',
                        'maxlength'     => '2',
						'label'         => __('Font Size', 'bb-powerpack'),
						'description'   => _x( 'px', 'Value unit for font size. Such as: "14 px"', 'bb-powerpack' ),
                        'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.pp-infolist-description',
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
                            'selector'      => '.pp-infolist-description',
                            'property'      => 'color',
                        )
					),
                ),
            ),
		)
	)
));

FLBuilder::register_settings_form('pp_list_item', array(
	'title' => __('Add Item', 'bb-powerpack'),
	'tabs'  => array(
        'general'      => array( // Tab
			'title'         => __('General', 'bb-powerpack'), // Tab title
			'sections'      => array( // Tab Sections
                'type'      => array(
                    'title'     => __('Icon', 'bb-powerpack'),
                    'fields'    => array(
                        'icon_type'      => array(
                            'type'      => 'select',
                            'label'     => __('Icon Type', 'bb-powerpack'),
                            'default'   => 'icon',
                            'options'   => array(
                                'icon'      => __('Icon', 'bb-powerpack'),
                                'image'      => __('Image (Pro)', 'bb-powerpack'),
                            ),
                            'toggle'        => array(
                                'icon'      => array(
                                    'fields'        => array('icon_select', 'icon_color', 'icon_color_hover', 'icon_background', 'icon_background_hover'),
                                    'tabs'          => array('icon_styles'),
                                ),
                                'image'      => array(
                                    'fields'        => array('pro_desc_2'),
                                ),
                            ),
                        ),
                        'pro_desc_2'      => array(
                            'type'          => 'pp-separator',
                            'default'       => __('This option is available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack'),
                            'color'         => 'ffffff',
                            'style'         => 'background: #fffce4; padding: 10px; border: 1px solid #fff388;'
                        ),
                        'icon_select'       => array(
                            'type'      => 'icon',
                            'label'     => __('Icon', 'bb-powerpack'),
                            'show_remove'    => true,
                        ),
                    ),
                ),
                'title'     => array(
                    'title'     => __('Title', 'bb-powerpack'),
                    'fields'    => array(
                        'title'     => array(
                            'type'      => 'text',
                            'label'     => '',
                            'default'     => '',
                            'preview'       => array(
    							'type'          => 'text',
    							'selector'      => '.pp-infolist-title h3'
    						)
                        ),
                    ),
                ),
                'description'    => array(
                    'title'         => __('Description', 'bb-powerpack'),
                    'fields'        => array(
                        'description'   => array(
                            'type'      => 'editor',
                            'label'     => '',
                            'default'   => '',
                            'media_buttons' => false,
                            'rows'      => 4,
                            'preview'   => array(
    							'type'       => 'text',
    							'selector'   => '.pp-infolist-description'
    						)
                        ),
                    ),
                ),
                'link_type'     => array(
                    'title'     => __('Link', 'bb-powerpack'),
                    'fields'    => array(
                        'link_type'     => array(
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
                                    'fields'    => array('read_more_text', 'read_more_color', 'read_more_color_hover', 'link', 'read_more_font', 'read_more_font_size')
                                ),
                            )
                        ),
                        'link'  => array(
                            'type'          => 'link',
    						'label'         => __('Link', 'bb-powerpack'),
    						'placeholder'   => __( 'http://www.example.com', 'bb-powerpack' ),
    						'preview'       => array(
    							'type'          => 'none'
    						)
                        ),
                        'link_target'   => array(
                            'type'          => 'select',
                            'label'         => __('Link Target', 'bb-powerpack'),
                            'default'       => '_self',
                            'options'       => array(
                                '_self'         => __('Same Window', 'bb-powerpack'),
                                '_blank'        => __('New Window', 'bb-powerpack'),
                            ),
                            'preview'       => array(
                                'type'          => 'none'
                            )
                        ),
                        'read_more_text'     => array(
                            'type'      => 'text',
                            'label'         => __('Text', 'bb-powerpack'),
                            'default'       => __('Read More', 'bb-powerpack'),
                            'preview'       => array(
                                'type'      => 'text',
                                'selector'  => '.pp-more-link'
                            ),
                        ),
                        'read_more_color'    => array(
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
                        'read_more_color_hover'    => array(
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
                    ),
                ),
            ),
        ),
        'icon_styles'   => array(
            'title'     => __('Icon Style', 'bb-powerpack'),
            'sections'  => array(
                'icon_styles'   => array(
                    'title'     => '',
                    'fields'    => array(
                        'icon_color'    => array(
    						'type'          => 'color',
    						'label'         => __('Color', 'bb-powerpack'),
    						'show_reset'    => true,
                            'preview'       => array(
                                'type'          => 'css',
                                'selector'      => '.pp-infolist-icon-inner',
                                'property'      => 'color',
                            )
    					),
                        'icon_color_hover'    => array(
    						'type'          => 'color',
    						'label'         => __('Color Hover', 'bb-powerpack'),
    						'show_reset'    => true
    					),
                        'icon_background'    => array(
    						'type'          => 'color',
    						'label'         => __('Background', 'bb-powerpack'),
    						'show_reset'    => true,
                            'preview'       => array(
                                'type'          => 'css',
                                'selector'      => '.pp-infolist-icon-inner .pp-icon',
                                'property'      => 'background',
                            )
    					),
                        'icon_background_hover'    => array(
    						'type'          => 'color',
    						'label'         => __('Background Hover', 'bb-powerpack'),
    						'show_reset'    => true
    					),
                    ),
                ),
            ),
        ),
    ),
));
