<?php

/**
 * @class PPIconListModule
 */
class PPIconListModule extends FLBuilderModule {

    /**
     * Constructor function for the module.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Icon List', 'bb-powerpack'),
            'description'   => __('Addon to display icon/number list.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-iconlist/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-iconlist/',
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
FLBuilder::register_module('PPIconListModule', array(
    'general'   => array(
        'title'     => __('General', 'bb-powerpack'),
        'sections'  => array(
            'general'   => array(
                'title'     => '',
                'fields'    => array(
                    'list_type' => array(
                        'type'      => 'pp-switch',
                        'label'     => __('List Type', 'bb-powerpack'),
                        'default'   => 'icon',
                        'options'   => array(
                            'icon'      => __('Icon', 'bb-powerpack'),
                            'number'    => __('Number', 'bb-powerpack')
                        ),
                        'toggle'    => array(
                            'icon'      => array(
                                'fields'    => array('list_icon'),
                            )
                        )
                    ),
                    'list_icon' => array(
                        'type'      => 'icon',
                        'label'     => __('Choose Icon', 'bb-powerpack')
                    ),
                )
            ),
            'list_items'    => array(
                'title'         => __('List Items', 'bb-powerpack'),
                'fields'        => array(
                    'list_items'    => array(
                        'type'          => 'text',
                        'label'         => __('Item', 'bb-powerpack'),
                        'default'       => '',
                        'multiple'      => true
                    )
                )
            )
        )
    ),
    'style' => array(
        'title' => __('Style', 'bb-powerpack'),
        'sections'  => array(
            'general'   => array(
                'title'     => __('General', 'bb-powerpack'),
                'fields'    => array(
                    'item_margin'   => array(
                        'type'          => 'text',
                        'label'         => __('Space b/w each item', 'bb-powerpack'),
                        'default'       => 20,
                        'description'   => 'px',
                        'size'          => 5,
                        'maxlength'     => 3,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'margin-bottom',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item',
                            'unit'          => 'px'
                        )
                    ),
                    'icon_space'    => array(
                        'type'          => 'text',
                        'label'         => __('Space b/w Icon and Text', 'bb-powerpack'),
                        'default'       => 10,
                        'description'   => 'px',
                        'size'          => 5,
                        'maxlength'     => 3,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'margin-right',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'          => 'px'
                        )
                    ),
                )
            ),
            'icon_style'    => array(
                'title'         => __('Icon', 'bb-powerpack'),
                'fields'        => array(
                    'icon_bg'       => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'bb-powerpack'),
                        'default'       => '',
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'background-color',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'          => 'px'
                        )
                    ),
                    'icon_bg_hover' => array(
                        'type'          => 'color',
                        'label'         => __('Background Hover Color', 'bb-powerpack'),
                        'default'       => '',
                        'show_reset'    => true
                    ),
                    'icon_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '444444',
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'color',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'          => 'px'
                        )
                    ),
                    'icon_color_hover'  => array(
                        'type'              => 'color',
                        'label'             => __('Hover Color', 'bb-powerpack'),
                        'default'           => '111111',
                    ),
                    'icon_border_type'  => array(
                        'type'              => 'pp-switch',
                        'label'             => __('Border Type', 'bb-powerpack'),
                        'default'           => 'solid',
                        'options'           => array(
                            'solid'             => __('Solid', 'bb-powerpack'),
                            'dashed'            => __('Dashed', 'bb-powerpack'),
                            'dotted'            => __('Dotted', 'bb-powerpack'),
                            'double'            => __('Double', 'bb-powerpack'),
                        )
                    ),
                    'icon_border_width' => array(
                        'type'              => 'text',
                        'label'             => __('Border Width', 'bb-powerpack'),
                        'default'           => 0,
                        'description'       => 'px',
                        'size'              => 5,
                        'maxlength'         => 3
                    ),
                    'icon_border_color' => array(
                        'type'              => 'color',
                        'label'             => __('Border Color', 'bb-powerpack'),
                        'default'           => '',
                        'preview'           => array(
                            'type'              => 'css',
                            'property'          => 'border-color',
                            'selector'          => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'              => 'px'
                        )
                    ),
                    'icon_border_color_hover'   => array(
                        'type'                      => 'color',
                        'label'                     => __('Border Hover Color', 'bb-powerpack'),
                        'default'                   => ''
                    ),
                    'icon_size'     => array(
                        'type'          => 'text',
                        'label'         => __('Size', 'bb-powerpack'),
                        'default'       => 20,
                        'description'   => 'px',
                        'size'          => 5,
                        'maxlength'     => 3,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'font-size',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'          => 'px'
                        )
                    ),
                    'icon_padding'  => array(
                        'type'          => 'text',
                        'label'         => __('Padding', 'bb-powerpack'),
                        'default'       => 0,
                        'description'   => 'px',
                        'size'          => 5,
                        'maxlength'     => 3,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'padding',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'          => 'px'
                        )
                    ),
                    'icon_border_radius'    => array(
                        'type'                  => 'text',
                        'label'                 => __('Round Corners', 'bb-powerpack'),
                        'default'               => 100,
                        'description'           => 'px',
                        'size'                  => 5,
                        'maxlength'             => 3,
                        'preview'               => array(
                            'type'                  => 'css',
                            'property'              => 'border-radius',
                            'selector'              => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-icon',
                            'unit'                  => 'px'
                        )
                    ),
                )
            ),
            'text_style'    => array(
                'title'         => __('Text', 'bb-powerpack'),
                'fields'        => array(
                    'text_font'     => array(
                        'type'          => 'font',
                        'label'         => __('Font', 'bb-powerpack'),
                        'default'       => array(
                            'family'        => 'Default',
                            'weight'        => 400
                        )
                    ),
                    'text_size'     => array(
                        'type'          => 'text',
                        'label'         => __('Font Size', 'bb-powerpack'),
                        'default'       => 16,
                        'description'   => 'px',
                        'size'          => 5,
                        'maxlength'     => 3,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'font-size',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-text',
                            'unit'          => 'px'
                        )
                    ),
                    'text_color'    => array(
                        'type'          => 'color',
                        'label'         => __('Color', 'bb-powerpack'),
                        'default'       => '',
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'          => 'css',
                            'property'      => 'color',
                            'selector'      => '.pp-icon-list .pp-icon-list-items .pp-icon-list-item .pp-list-item-text'
                        )
                    )
                )
            )
        )
    )
));
