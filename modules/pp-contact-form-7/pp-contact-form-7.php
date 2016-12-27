<?php

/**
 * @class PPContactForm7Module
 */
class PPContactForm7Module extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Contact Form 7', 'bb-powerpack'),
            'description'   => __('A module for Contact Form 7.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-contact-form-7/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-contact-form-7/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

require_once BB_POWERPACK_DIR . 'modules/pp-contact-form-7/includes/functions.php';

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPContactForm7Module', array(
    'form'       => array( // Tab
        'title'         => __('Form', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'select_form'       => array( // Section
                'title'         => __('', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'select_form_field' => array(
                        'type'          => 'select',
                        'label'         => __('Select Form', 'bb-powerpack'),
                        'default'       => '',
                        'options'       => cf7_module_form_titles()
                    ),
                    'custom_title'      => array(
                        'type'          => 'text',
                        'label'         => __('Custom Title', 'bb-powerpack'),
                        'default'       => '',
                        'description'   => '',
						'preview'       => array(
                            'type'      => 'text',
                            'selector'  => '.pp-cf7-form-title'
                        )
                    ),
                    'custom_description'    => array(
                        'type'              => 'textarea',
                        'label'             => __('Custom Description', 'bb-powerpack'),
                        'default'           => '',
                        'placeholder'       => __('', 'bb-powerpack'),
                        'rows'              => '6',
                        'preview'           => array(
                            'type'          => 'text',
                            'selector'      => '.pp-cf7-form-description'
                        )
                    ),
                )
            ),
        )
    ),
    'style'       => array( // Tab
        'title'         => __('Style', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'form_setting'      => array( // Section
                'title'         => __('Form Background', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'form_bg_type'      => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Background Type', 'bb-powerpack'),
                        'default'       => 'color',
                        'options'       => array(
                            'color'     => __('Color', 'bb-powerpack'),
                            'image'     => __('Image', 'bb-powerpack'),
                        ),
                        'toggle'        => array(
                            'color'     => array(
                                'fields'    => array('form_bg_color', 'form_bg_opacity'),
                            ),
                            'image'     => array(
                                'fields'    => array('form_bg_image', 'form_bg_size', 'form_bg_repeat'),
                            ),
                        ),
                    ),
                    'form_bg_color'     => array(
                        'type'          => 'color',
                        'label'         => __('Background Color', 'bb-powerpack'),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'background-color'
                        )
                    ),
                    'form_bg_opacity'   => array(
                        'type'              => 'text',
                        'label'             => __('Background Opacity', 'bb-powerpack'),
                        'default'           => 100,
                        'class'             => 'bb-gf-input input-small',
                        'description'       => '%'
                    ),
                    'form_bg_image'     => array(
                        'type'              => 'photo',
                        'label'         => __('Background Image', 'bb-powerpack'),
                        'default'       => '',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'background-image'
                        )
                    ),
                    'form_bg_size'      => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Background Size', 'bb-powerpack'),
                        'default'       => 'false',
                        'options'       => array(
                            'contain'   => __('Contain', 'bb-powerpack'),
                            'cover'     => __('Cover', 'bb-powerpack'),
                        )
                    ),
                    'form_bg_repeat'    => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Background Repeat', 'bb-powerpack'),
                        'default'       => 'no-repeat',
                        'options'       => array(
                            'repeat-x'      => __('Repeat X', 'bb-powerpack'),
                            'repeat-y'      => __('Repeat Y', 'bb-powerpack'),
                            'no-repeat'     => __('No Repeat', 'bb-powerpack'),
                        )
                    ),
                )
            ),
            'form_border'       => array(
                'title'             => __('Form Border', 'bb-powerpack'),
                'fields'            => array(
                    'form_show_border'      => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Show Border', 'bb-powerpack'),
                        'default'       => 'no',
                        'options'       => array(
                            'yes'        => __('Yes', 'bb-powerpack'),
                            'no'        => __('No', 'bb-powerpack'),
                        ),
                        'toggle'        => array(
                            'yes'       => array(
                                'fields'    => array('form_border_width', 'form_border_color', 'form_border_style'),
                            ),
                        ),
                    ),
                    'form_border_width'      => array(
                        'type'          => 'text',
                        'label'         => __('Border Width', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-gf-input input-small',
                        'default'       => 2,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'border-width',
                            'unit'      => 'px'
                        )
                    ),
                    'form_border_color'     => array(
                        'type'          => 'color',
                        'label'         => __('Border Color', 'bb-powerpack'),
                        'default'       => 'ffffff',
                        'show_reset'    => true,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'border-color'
                        )
                    ),
                    'form_border_style' 	=> array(
                        'type'          => 'pp-switch',
                        'label'         => __('Border Style', 'bb-powerpack'),
                        'default'       => 'solid',
                        'options'		=> array(
                       		'dashed'	=> __('Dashed', 'bb-powerpack'),
                       		'dotted'	=> __('Dotted', 'bb-powerpack'),
                        	'solid'		=> __('Solid', 'bb-powerpack')
                        ),
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'border-style'
                        )
                    ),
                )
            ),
            'form_corners'          => array(
                'title'                 => __('Corners & Padding', 'bb-powerpack'),
                'fields'                => array(
                    'form_border_radius' 	=> array(
                        'type'          => 'text',
                        'label'         => __('Round Corners', 'bb-powerpack'),
                        'description'   => 'px',
                        'default'       => 2,
                        'class'         => 'bb-gf-input input-small',
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'border-radius',
                            'unit'      => 'px'
                        )
                    ),
                    'form_padding'      => array(
                        'type'          => 'text',
                        'label'         => __('Padding', 'bb-powerpack'),
                        'description'   => 'px',
                        'class'         => 'bb-gf-input input-small',
                        'default'       => 10,
                        'preview'       => array(
                            'type'      => 'css',
                            'selector'  => '.pp-cf7-content',
                            'property'  => 'padding',
                            'unit'      => 'px'
                        )
                    ),
                )
            ),
        )
    ),
    'input_style'           => array(
        'title'                 => __('Inputs', 'bb-powerpack'),
        'sections'              => array(
            'input_style'           => array( // Section
                'title'                 => __('Colors', 'bb-powerpack'), // Section Title
                'fields'                => array( // Section Fields
                    'input_field_text_color'    => array(
                        'type'                      => 'color',
                        'label'                     => __('Text Color', 'bb-powerpack'),
                        'default'                   => '333333',
                        'show_reset'                => true,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'color'
                        )
                    ),
                    'input_field_bg_color'  => array(
                        'type'                  => 'color',
                        'label'                 => __('Background Color', 'bb-powerpack'),
                        'default'               => 'ffffff',
                        'show_reset'            => true,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'              => 'background-color'
                        )
                    ),
                )
            ),
            'input_sizes'               => array(
                'title'                     => __('Sizes & Padding', 'bb-powerpack'),
                'fields'                    => array(
                    'input_height'              => array(
                        'type'                      => 'text',
                        'label'                     => __('Input Height', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date, .pp-cf7-content .wpcf7-file',
                            'property'                  => 'height',
                            'unit'                      => 'px'
                        ),
                    ),
                    'textarea_height'           => array(
                        'type'                      => 'text',
                        'label'                     => __('Textarea Height', 'bb-powerpack'),
                        'description'               => 'px',
                        'default'                   => 200,
                        'class'                     => 'bb-gf-input input-small',
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content .wpcf7-textarea',
                            'property'                  => 'height',
                            'unit'                      => 'px'
                        ),
                    ),
                    'input_field_padding'       => array(
                        'type'                      => 'text',
                        'label'                     => __('Padding', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'default'                   => 12,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'padding',
                            'unit'                      => 'px'
                        )
                    ),
                    'input_field_margin_top'    => array(
                        'type'                      => 'text',
                        'label'                     => __('Margin Top', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'default'                   => 5,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'margin-top',
                            'unit'                      => 'px'
                        )
                    ),
                    'input_field_margin'        => array(
                        'type'                      => 'text',
                        'label'                     => __('Margin Bottom', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'default'                   => 10,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'margin-bottom',
                            'unit'                      => 'px'
                        )
                    ),
                )
            ),
            'input_border'              => array(
                'title'                     => __('Border', 'bb-powerpack'),
                'fields'                    => array(
                    'input_field_border_width'  => array(
                        'type'                      => 'text',
                        'label'                     => __('Border Width', 'bb-powerpack'),
                        'description'               => 'px',
                        'default'                   => 1,
                        'class'                     => 'bb-gf-input input-small',
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'border-width',
                            'unit'                      => 'px'
                        )
                    ),
                    'input_field_border_color'  => array(
                        'type'                      => 'color',
                        'label'                     => __('Border Color', 'bb-powerpack'),
                        'default'                   => '333333',
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'border-color'
                        )
                    ),
                    'input_field_border_focus'  => array(
                        'type'                      => 'color',
                        'label'                     => __('Border Color Focus', 'bb-powerpack'),
                        'default'                   => '333333',
                    ),
                    'input_field_border_position'   => array(
                        'type'                          => 'select',
                        'label'                         => __('Border Position', 'bb-powerpack'),
                        'default'                       => 'border',
                        'options'				        => array(
                        	'border'			            => __('Default', 'bb-powerpack'),
                        	'border-top'		            => __('Top', 'bb-powerpack'),
                        	'border-bottom'		            => __('Bottom', 'bb-powerpack'),
                        	'border-left'                   => __('Left', 'bb-powerpack'),
                        	'border-right'		            => __('Right', 'bb-powerpack'),
                        ),
                    ),
                )
            ),
            'input_general'             => array(
                'title'                     => __('General', 'bb-powerpack'),
                'fields'                    => array(
                    'input_field_border_radius' => array(
                        'type'                      => 'text',
                        'label'                     => __('Round Corners', 'bb-powerpack'),
                        'description'               => 'px',
                        'default'                   => 2,
                        'class'                     => 'bb-gf-input input-small',
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'border-radius',
                            'unit'                      => 'px'
                        )
                    ),
                    'input_field_box_shadow'    => array(
                        'type'                      => 'pp-switch',
                        'label'                     => __('Enable Box Shadow', 'bb-powerpack'),
                        'default'                   => 'no',
                        'options'                   => array(
                            'yes'                       => __('Yes', 'bb-powerpack'),
                            'no'                        => __('No', 'bb-powerpack'),
                        ),
                        'toggle'                    => array(
                            'yes'                       => array(
                                'fields'                    => array('shadow_color', 'shadow_direction')
                            ),
                        ),
                    ),
                    'shadow_color'              => array(
                        'type'                      => 'color',
                        'label'                     => __('Shadow Color', 'bb-powerpack'),
                        'show_reset'                => true,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content input.wpcf7-text, .pp-cf7-content .wpcf7-textarea, .pp-cf7-content .wpcf7-quiz, .pp-cf7-content .wpcf7-number, .pp-cf7-content .wpcf7-date,.pp-cf7-content .wpcf7-file',
                            'property'                  => 'box-shadow'
                        ),
                    ),
                    'shadow_direction'          => array(
                        'type'                      => 'pp-switch',
                        'label'                     => __('Shadow Direction', 'bb-powerpack'),
                        'default'                   => 'out',
                        'options'                   => array(
                            'out'                       => __('Outside', 'bb-powerpack'),
                            'inset'                     => __('Inside', 'bb-powerpack'),
                        ),
                    ),
                )
            ),
        )
    ),
    'button_style'          => array(
        'title'                 => __('Button', 'bb-powerpack'),
        'sections'              => array(
            'button_settings'       => array( // Section
                'title'                 => __('Colors', 'bb-powerpack'), // Section Title
                'fields'                => array( // Section Fields
                    'button_bg_color'       => array(
                        'type'                  => 'color',
                        'label'                 => __('Background Color', 'bb-powerpack'),
                        'default'               => '333333',
                        'show_reset'            => true,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'background-color'
                        )
                    ),
                    'button_hover_bg_color' => array(
                        'type'                  => 'color',
                        'label'                 => __('Background Color Hover', 'bb-powerpack'),
                        'default'               => '000000',
                        'show_reset'            => true,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit:hover',
                            'property'              => 'background-color'
                        )
                    ),
                    'button_text_color'     => array(
                        'type'                  => 'color',
                        'label'                 => __('Text Color', 'bb-powerpack'),
                        'default'               => 'ffffff',
                        'show_reset'            => true,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'color'
                        )
                    ),
                    'button_hover_text_color'   => array(
                        'type'                      => 'color',
                        'label'                     => __('Text Color Hover', 'bb-powerpack'),
                        'default'                   => 'eeeeee',
                        'show_reset'                => true,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content .wpcf7-submit:hover',
                            'property'                  => 'color'
                        )
                    ),
                )
            ),
            'button_size'           => array(
                'title'                 => __('Sizes & Alignment', 'bb-powerpack'),
                'fields'                => array(
                    'button_width'          => array(
                        'type'                  => 'pp-switch',
                        'label'                 => __('Full Width', 'bb-powerpack'),
                        'default'               => 'false',
                        'options'               => array(
                            'true'                  => __('Yes', 'bb-powerpack'),
                            'false'                 => __('No', 'bb-powerpack'),
                        ),
                        'toggle'            => array(
                            'false'             => array(
                                'fields'            => array('button_width_size', 'button_alignment')
                            ),
                        ),
                    ),
                    'button_width_size'     => array(
                        'type'                  => 'text',
                        'label'                 => __('Button Width', 'bb-powerpack'),
                        'description'           => 'px',
                        'class'                 => 'bb-gf-input input-small',
                        'default'               => 100,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'width',
                            'unit'                  => 'px'
                        )
                    ),
                    'button_alignment'      => array(
                        'type'                  => 'pp-switch',
                        'label'                 => __('Button Alignment', 'bb-powerpack'),
                        'default'               => 'none',
                        'options'               => array(
                            'left'                  => __('Left', 'bb-powerpack'),
                            'none'                  => __('Center', 'bb-powerpack'),
                            'right'                 => __('Right', 'bb-powerpack'),
                        )
                    ),
                )
            ),
            'button_corners'        => array(
                'title'                 => __('Corners & Padding', 'bb-powerpack'),
                'fields'                => array(
                    'button_border_radius'  => array(
                        'type'                  => 'text',
                        'label'                 => __('Round Corners', 'bb-powerpack'),
                        'description'           => 'px',
                        'class'                 => 'bb-gf-input input-small',
                        'default'               => 2,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'border-radius',
                            'unit'                  => 'px'
                        )
                    ),
                    'button_padding_top_bottom' => array(
                        'type'                      => 'text',
                        'label'                     => __('Top/Bottom Padding', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'default'                   => 10,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'rules'                     => array(
                                array(
                                    'selector'              => '.pp-cf7-content .wpcf7-submit',
                                    'property'              => 'padding-top',
                                    'unit'                  => 'px'
                                ),
                                array(
                                    'selector'              => '.pp-cf7-content .wpcf7-submit',
                                    'property'              => 'padding-bottom',
                                    'unit'                  => 'px'
                                ),
                            ),
                        )
                    ),
                    'button_padding_left_right' => array(
                        'type'                      => 'text',
                        'label'                     => __('Left/Right Padding', 'bb-powerpack'),
                        'description'               => 'px',
                        'class'                     => 'bb-gf-input input-small',
                        'default'                   => 10,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'rules'                     => array(
                                array(
                                    'selector'              => '.pp-cf7-content .wpcf7-submit',
                                    'property'              => 'padding-left',
                                    'unit'                  => 'px'
                                ),
                                array(
                                    'selector'              => '.pp-cf7-content .wpcf7-submit',
                                    'property'              => 'padding-right',
                                    'unit'                  => 'px'
                                ),
                            ),
                        )
                    ),
                )
            ),
            'button_border'         => array(
                'title'                 => __('Border', 'bb-powerpack'),
                'fields'                => array(
                    'button_border_width'   => array(
                        'type'                  => 'text',
                        'label'                 => __('Border Width', 'bb-powerpack'),
                        'description'           => 'px',
                        'class'                 => 'bb-gf-input input-small',
                        'default'               => 1,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'border-width',
                            'unit'                  => 'px'
                        )
                    ),
                    'button_border_color'   => array(
                        'type'                  => 'color',
                        'label'                 => __('Border Color', 'bb-powerpack'),
                        'default'               => '333333',
                        'show_reset'            => true,
                        'preview'               => array(
                            'type'                  => 'css',
                            'selector'              => '.pp-cf7-content .wpcf7-submit',
                            'property'              => 'border-color'
                        )
                    ),
                    'button_border_color_hover' => array(
                        'type'                      => 'color',
                        'label'                     => __('Border Color Hover', 'bb-powerpack'),
                        'default'                   => '333333',
                        'show_reset'                => true,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.pp-cf7-content .wpcf7-submit:hover',
                            'property'                  => 'border-color'
                        )
                    ),
                )
            ),
        )
    ),
    'error_style'           => array(
        'title'                 => __('Errors', 'bb-powerpack'),
        'sections'              => array(
            'form_error_styling'    => array( // Section
                'title'                 => __('Errors Style', 'bb-powerpack'), // Section Title
                'fields'                => array( // Section Fields
                    'validation_error'      => array(
                        'type'              => 'pp-switch',
                        'label'             => __('Validation Error', 'bb-powerpack'),
                        'default'           => 'block',
                        'options'           => array(
                            'block'             => __('Show', 'bb-powerpack'),
                            'none'              => __('Hide', 'bb-powerpack'),
                        ),
                        'toggle'            => array(
                            'block'             => array(
                                'fields'        => array('validation_error_color', 'validation_error_font_size', 'form_error_field_background_color', 'form_error_field_border_color', 'form_error_field_border_type', 'form_error_field_border_width'),
                            ),
                        ),
                    ),
					'validation_error_color'   => array(
                        'type'                      => 'color',
                        'label'                     => __('Validation Error Color', 'bb-powerpack'),
                        'default'                   => '000000',
                        'show_reset'                => true,
                        'preview'                   => array(
                            'type'                      => 'css',
                            'selector'                  => '.wpcf7-response-output',
                            'property'                  => 'color'
                        )
                    ),
                    'validation_error_font_size'    => array(
                        'type'                          => 'text',
                        'label'                         => __('Validation Error Font Size', 'bb-powerpack'),
                        'description'                   => 'px',
                        'class'                         => 'bb-gf-input input-small',
                        'default'                       => 13,
                        'preview'                       => array(
                            'type'                          => 'css',
                            'selector'                      => '.wpcf7-response-output',
                            'property'                      => 'font-size',
                            'unit'                          => 'px'
                        )
                    ),
                    'form_error_field_background_color' => array(
                        'type'                              => 'color',
                        'label'                             => __('Validation Error Background Color', 'bb-powerpack'),
                        'default'                           => 'ffffff',
                        'show_reset'                        => true,
                        'preview'                           => array(
                            'type'                              => 'css',
                            'selector'                          => '.wpcf7-response-output',
                            'property'                          => 'color'
                        )
                    ),
                    'form_error_field_border_type'  => array(
                        'type'                          => 'select',
                        'label'                         => __('Validation Error Border Style', 'bb-powerpack'),
                        'default'                       => 'none',
                        'options'                       => array(
                            'none'                          => __('None', 'bb-powerpack'),
                            'solid'                         => __('Solid', 'bb-powerpack'),
                            'dotted'                        => __('Dotted', 'bb-powerpack'),
                            'dashed'                        => __('Dashed', 'bb-powerpack'),
                            'double'                        => __('Double', 'bb-powerpack'),
                        ),
                    ),
                    'form_error_field_border_width' => array(
                        'type'                          => 'text',
                        'label'                         => __('Validation Error Border Width', 'bb-powerpack'),
                        'description'                   => 'px',
                        'class'                         => 'bb-gf-input input-small',
                        'default'                       => 1,
                        'preview'                       => array(
                            'type'                          => 'css',
                            'selector'                      => '.wpcf7-response-output',
                            'property'                      => 'border-width',
                            'unit'                          => 'px'
                        )
                    ),
                    'form_error_field_border_color' => array(
                        'type'                          => 'color',
                        'label'                         => __('Validation Error Border Color', 'bb-powerpack'),
                        'default'                       => 'ffffff',
                        'show_reset'                    => true,
                        'preview'                       => array(
                            'type'                          => 'css',
                            'selector'                      => '.wpcf7-response-output',
                            'property'                      => 'border-color'
                        )
                    ),
					'validation_message'   => array(
                        'type'                 => 'pp-switch',
                        'label'                => __('Error Field Message', 'bb-powerpack'),
                        'default'              => 'block',
                        'options'              => array(
                            'block'            => __('Show', 'bb-powerpack'),
                            'none'             => __('Hide', 'bb-powerpack'),
                        ),
                        'toggle'               => array(
                            'block'                => array(
                                'fields'           => array('validation_message_color'),
                            ),
                        ),
                    ),
					'validation_message_color' => array(
                        'type'                    => 'color',
                        'label'                   => __('Error Field Label Color', 'bb-powerpack'),
                        'default'                 => 'ff0000',
                        'show_reset'              => true,
                        'preview'                 => array(
                            'type'                    => 'css',
                            'selector'                => '.wpcf7-not-valid-tip',
                            'property'                => 'color'
                        )
                    ),
                )
            ),
        )
    ),
    'form_typography'       => array( // Tab
        'title'         => __('Typography', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'section_desc'  => array(
                'title'         => '',
                'fields'        => array(
                    'pro_desc'      => array(
                        'type'          => 'pp-separator',
                        'default'       => __('Typography options are available in <a href="'.BB_POWERPACK_PRO.'" target="_blank" class="pp-pro-link">PowerPack Pro</a> version.', 'bb-powerpack')
                    )
                )
            ),
        )
    )
));
