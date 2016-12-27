<?php

/**
 * @class PPFancyHeadingModule
 */
class PPFancyHeadingModule extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Fancy Heading', 'bb-powerpack'),
            'description'   => __('Fancy Heading module with animated colors and backgroud cliping.', 'bb-powerpack'),
            'category'		=> BB_POWERPACK_CAT,
            'dir'           => BB_POWERPACK_DIR . 'modules/pp-fancy-heading/',
            'url'           => BB_POWERPACK_URL . 'modules/pp-fancy-heading/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PPFancyHeadingModule', array(
    'general'       => array( // Tab
        'title'         => __('General', 'bb-powerpack'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Heading', 'bb-powerpack'), // Section Title
                'fields'        => array( // Section Fields
                    'heading_title' => array(
                        'type'          => 'text',
                        'label'         => __('Title', 'bb-powerpack'),
                        'default'       => __('AWESOME TITLE!', 'bb-powerpack'),
                        'preview'         => array(
                            'type'             => 'text',
                            'selector'         => '.pp-fancy-heading-title',
                        )
                    ),
                    'heading_type'   => array(
                        'type'          => 'select',
                        'label'         => __('Type', 'bb-powerpack'),
                        'default'       => 'gradient',
                        'options'       => array(
                            'gradient'      => __('Gradient Animation', 'bb-powerpack'),
                            'solid'         => __('Color Animation', 'bb-powerpack'),
                            'fade'          => __('Fade Animation', 'bb-powerpack'),
                            'rotate'        => __('Rotate/Flip Animation', 'bb-powerpack'),
                            'clip'          => __('Clip to Image', 'bb-powerpack')
                        ),
                        'toggle'        => array(
                            'gradient'      => array(
                                'fields'        => array('primary_color', 'secondary_color', 'animation_speed')
                            ),
                            'solid'         => array(
                                'fields'        => array('primary_color', 'animation_speed')
                            ),
                            'fade'         => array(
                                'fields'       => array('primary_color', 'animation_speed')
                            ),
                            'rotate'       => array(
                                'fields'       => array('primary_color', 'animation_speed')
                            ),
                            'clip'          => array(
                                'fields'        => array('bg_image', 'bg_repeat', 'bg_position', 'bg_attachment')
                            )
                        )
                    ),
                    'primary_color' => array(
                        'type'          => 'color',
                        'label'         => __('Primary Color', 'bb-powerpack'),
                        'default'       => '255dea',
                        'show_reset'    => false,
                    ),
                    'secondary_color'   => array(
                        'type'              => 'color',
                        'label'             => __('Secondary Color', 'bb-powerpack'),
                        'default'           => '34d6e5',
                        'show_reset'        => false,
                    ),
                    'animation_speed'   => array(
                        'type'              => 'text',
                        'label'             => __('Animation Speed', 'bb-powerpack'),
                        'default'           => 20,
                        'description'       => __('seconds', 'bb-powerpack'),
                        'size'              => 5
                    ),
                    'bg_image'      => array(
                        'type'          => 'photo',
                        'label'         => __('Image', 'bb-powerpack'),
                        'show_remove'   => false
                    ),
                    'bg_repeat' => array(
                        'type'      => 'select',
                        'label'     => __('Repeat', 'bb-powerpack'),
                        'default'   => 'no-repeat',
                        'options'   => array(
                            'no-repeat' => __('None', 'bb-powerpack'),
                            'repeat'    => __('Tile', 'bb-powerpack'),
                            'repeat-x'  => __('Horizontal', 'bb-powerpack'),
                            'repeat-y'  => __('Vertical', 'bb-powerpack'),
                        ),
                        'help'  => __('Repeat applies to how the image should display in the background. Choosing none will display the image as uploaded. Tile will repeat the image as many times as needed to fill the background horizontally and vertically. You can also specify the image to only repeat horizontally or vertically.', 'bb-powerpack')
                    ),
                    'bg_position'       => array(
                        'type'              => 'select',
                        'label'             => __('Position', 'bb-powerpack'),
                        'default'           => 'center center',
                        'options'           => array(
                            'left top'          => __('Left Top', 'bb-powerpack'),
                            'left center'       => __('Left Center', 'bb-powerpack'),
                            'left bottom'       => __('Left Bottom', 'bb-powerpack'),
                            'right top'         => __('Right Top', 'bb-powerpack'),
                            'right center'      => __('Right Center', 'bb-powerpack'),
                            'right bottom'      => __('Right Bottom', 'bb-powerpack'),
                            'center top'        => __('Center Top', 'bb-powerpack'),
                            'center center'     => __('Center Center', 'bb-powerpack'),
                            'center bottom'     => __('Center Bottom', 'bb-powerpack'),
                        ),
                        'help'  => __('Position will tell the image where it should sit in the background.', 'bb-powerpack')
                    ),
                    'bg_attachment' => array(
                        'type'          => 'pp-switch',
                        'label'         => __('Attachment', 'bb-powerpack'),
                        'default'       => 'scroll',
                        'options'       => array(
                            'scroll'        => __('Scroll', 'bb-powerpack'),
                            'fixed'         => __('Fixed', 'bb-powerpack'),
                        ),
                        'help'  => __('Attachment will specify how the image reacts when scrolling a page. When scrolling is selected, the image will scroll with page scrolling. This is the default setting. Fixed will allow the image to scroll within the background if fill is selected in the scale setting.', 'bb-powerpack')
                    )
                )
            )
        )
    ),
    'typography'    => array(
        'title'         => __('Typography', 'bb-powerpack'),
        'sections'      => array(
            'typography'    => array(
                'title'         => '',
                'fields'        => array(
                    'html_tag'      => array(
                        'type'          => 'select',
                        'label'         => __('HTML Tag', 'bb-powerpack'),
                        'default'       => 'h2',
                        'options'       => array(
                            'h1'            => 'h1',
                            'h2'            => 'h2',
                            'h3'            => 'h3',
                            'h4'            => 'h4',
                            'h5'            => 'h5',
                            'h6'            => 'h6'
                        )
                    ),
                    'font_family'   => array(
                        'type'          => 'font',
                        'label'         => __('Font', 'bb-powerpack'),
                        'default'		=> array(
                            'family'		=> 'Default',
                            'weight'		=> 300
                        ),
                        'preview'         => array(
                            'type'            => 'font',
                            'selector'        => '.pp-fancy-heading-title'
                        )
                    ),
                    'font_size'     => array(
                        'type'          => 'pp-switch',
						'label'         => __('Font Size', 'bb-powerpack'),
						'default'       => 'default',
						'options'       => array(
							'default'       =>  __('Default', 'bb-powerpack'),
							'custom'        =>  __('Custom', 'bb-powerpack')
						),
						'toggle'        => array(
							'custom'        => array(
								'fields'        => array('font_size_custom')
							)
						)
                    ),
                    'font_size_custom'  => array(
                        'type'              => 'pp-multitext',
						'label'             => __('Custom Font Size', 'bb-powerpack'),
						'default'	        => array(
							'desktop'	        => 40,
							'tablet'	        => '',
							'mobile'	        => '',
						),
						'options' 		    => array(
							'desktop'           => array(
								'icon'		        => 'fa-desktop',
								'placeholder'	    => __('Desktop', 'bb-powerpack'),
								'tooltip'	        => __('Desktop', 'bb-powerpack'),
								'preview'           => array(
									'selector'          => '.pp-fancy-heading-title',
									'property'          => 'font-size',
									'unit'			    => 'px'
								),
							),
							'tablet'             => array(
								'icon'		         => 'fa-tablet',
								'placeholder'	     => __('Tablet', 'bb-powerpack'),
								'tooltip'	         => __('Tablet', 'bb-powerpack'),
							),
							'mobile'             => array(
								'icon'		         => 'fa-mobile',
								'placeholder'	     => __('Mobile', 'bb-powerpack'),
								'tooltip'	         => __('Mobile', 'bb-powerpack'),
							),
						),
                    ),
                    'line_height'   => array(
                        'type'          => 'pp-switch',
						'label'         => __('Line Height', 'bb-powerpack'),
						'default'       => 'default',
						'options'       => array(
							'default'       =>  __('Default', 'bb-powerpack'),
							'custom'        =>  __('Custom', 'bb-powerpack')
						),
						'toggle'        => array(
							'custom'        => array(
								'fields'        => array('line_height_custom')
							)
						)
                    ),
                    'line_height_custom' => array(
                        'type'                => 'pp-multitext',
						'label'               => __('Custom Line Height', 'bb-powerpack'),
						'default'	        => array(
							'desktop'	        => 1.4,
							'tablet'	        => '',
							'mobile'	        => '',
						),
						'options' 		    => array(
							'desktop'           => array(
								'icon'		        => 'fa-desktop',
								'placeholder'	    => __('Desktop', 'bb-powerpack'),
								'tooltip'	        => __('Desktop', 'bb-powerpack'),
								'preview'           => array(
									'selector'          => '.pp-fancy-heading-title',
									'property'          => 'line-height',
								),
							),
							'tablet'             => array(
								'icon'		         => 'fa-tablet',
								'placeholder'	     => __('Tablet', 'bb-powerpack'),
								'tooltip'	         => __('Tablet', 'bb-powerpack'),
							),
							'mobile'             => array(
								'icon'		         => 'fa-mobile',
								'placeholder'	     => __('Mobile', 'bb-powerpack'),
								'tooltip'	         => __('Mobile', 'bb-powerpack'),
							),
						),
                    ),
                    'letter_spacing'    => array(
                        'type'              => 'text',
                        'label'             => __('Letter Spacing', 'bb-powerpack'),
                        'default'           => '',
                        'size'              => 5,
                        'preview'           => array(
                            'type'              => 'css',
                            'selector'          => '.pp-fancy-heading-title',
                            'property'          => 'letter-spacing',
                            'unit'              => 'px'
                        )
                    ),
                    'text_alignment'    => array(
                        'type'              => 'pp-switch',
                        'label'             => __('Alignment', 'bb-powerpack'),
                        'default'           => 'left',
                        'options'           => array(
                            'left'              => __('Left', 'bb-powerpack'),
                            'center'            => __('Center', 'bb-powerpack'),
                            'right'             => __('Right', 'bb-powerpack'),
                        )
                    )
                )
            )
        )
    )
));
