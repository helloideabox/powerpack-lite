/**
 * $module An instance of your module class.
 * $id The module's ID.
 * $settings The module's settings.
*/

.fl-node-<?php echo $id; ?> .pp-spacer {
    float: left;
    height: 1px;
    width: <?php echo $settings->button_spacing; ?>px;
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content a.pp-button {
    <?php if($settings->button_font_family['family'] != 'Default') { ?><?php FLBuilderFonts::font_css( $settings->button_font_family ); ?><?php } ?>
    <?php if( $settings->button_font_size['button_font_size_desktop'] >=0 ) { ?>font-size: <?php echo $settings->button_font_size['button_font_size_desktop']; ?>px;<?php } ?>
    <?php if( $settings->button_border_width ) { ?>border-width: <?php echo $settings->button_border_width; ?>px;<?php } ?>
    <?php if( $settings->button_border_radius ) { ?>border-radius: <?php echo $settings->button_border_radius; ?>px;<?php } ?>
    <?php if( $settings->button_width ) { ?>width: <?php echo $settings->button_width; ?>px;<?php } ?>
    <?php if( $settings->button_border_style) { ?>border-style:  <?php echo $settings->button_border_style; ?>;<?php } ?>
    <?php if( $settings->button_padding['button_top_padding'] >= 0) { ?>padding-top: <?php echo $settings->button_padding['button_top_padding']; ?>px;<?php } ?>
    <?php if( $settings->button_padding['button_right_padding'] >= 0) { ?>padding-right: <?php echo $settings->button_padding['button_right_padding']; ?>px;<?php } ?>
    <?php if( $settings->button_padding['button_bottom_padding'] >= 0) { ?>padding-bottom: <?php echo $settings->button_padding['button_bottom_padding']; ?>px;<?php } ?>
    <?php if( $settings->button_padding['button_left_padding'] >= 0) { ?>padding-left: <?php echo $settings->button_padding['button_left_padding']; ?>px;<?php } ?>
    text-decoration: none;
    box-shadow: none;
    display: block;
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 a.pp-button {
    background-color:<?php echo ($settings->button_1_bg_color['primary']) ? '#'.$settings->button_1_bg_color['primary'] : 'transparent'; ?>;
    <?php if( $settings->button_1_border_color['primary'] ) { ?>border-color: #<?php echo $settings->button_1_border_color['primary']; ?>;<?php } ?>
    color:<?php echo ($settings->button_1_text_color['primary']) ? '#'.$settings->button_1_text_color['primary'] : '#000'; ?>;
    position: relative;
    vertical-align: middle;
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 a.pp-button:hover {
    background-color:<?php echo ($settings->button_1_bg_color['secondary']) ? '#'.$settings->button_1_bg_color['secondary'] : 'transparent'; ?>;
    color:<?php echo ($settings->button_1_text_color['secondary']) ? '#'.$settings->button_1_text_color['secondary'] : '#000'; ?>;
    border-color:<?php echo ($settings->button_1_border_color['secondary']) ? '#'.$settings->button_1_border_color['secondary'] : 'transparent'; ?>;
}

.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 a.pp-button {
    background-color:<?php echo ($settings->button_2_bg_color['primary']) ? '#'.$settings->button_2_bg_color['primary'] : 'transparent'; ?>;
    <?php if( $settings->button_2_border_color['primary'] ) { ?>border-color: #<?php echo $settings->button_2_border_color['primary']; ?>;<?php } ?>
    color:<?php echo ($settings->button_2_text_color['primary']) ? '#'.$settings->button_2_text_color['primary'] : 'transparent'; ?>;
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 a.pp-button:hover {
    background-color:<?php echo ($settings->button_2_bg_color['secondary']) ? '#'.$settings->button_2_bg_color['secondary'] : 'transparent'; ?>;
    color:<?php echo ($settings->button_2_text_color['secondary']) ? '#'.$settings->button_2_text_color['secondary'] : 'transparent'; ?>;
    border-color:<?php echo ($settings->button_2_border_color['secondary']) ? '#'.$settings->button_2_border_color['secondary'] : 'transparent'; ?>;
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-font-icon {
    <?php if( $settings->button_1_font_icon_size ) { ?>font-size:<?php echo $settings->button_1_font_icon_size; ?>px;<?php } ?>
    <?php if( $settings->button_1_text_color['primary']) { ?>color:#<?php echo $settings->button_1_text_color['primary']; ?>;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 a.pp-button:hover .pp-font-icon {
    <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .custom_icon {
    <?php if( $settings->button_1_custom_icon_width) { ?>width:<?php echo $settings->button_1_custom_icon_width; ?>px;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-font-icon {
    <?php if( $settings->button_2_font_icon_size) { ?>font-size:<?php echo $settings->button_2_font_icon_size; ?>px;<?php } ?>
    <?php if( $settings->button_2_text_color['primary']) { ?>color:#<?php echo $settings->button_2_text_color['primary']; ?>;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 a.pp-button:hover .pp-font-icon {
    <?php if($settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .custom_icon {
    <?php if($settings->button_2_custom_icon_width) { ?>width:<?php echo $settings->button_2_custom_icon_width; ?>px;<?php } ?>
}
<?php if( $settings->button_alignment == 'none' ) { ?>
    .fl-node-<?php echo $id; ?> .pp-dual-button-content {
        text-align: center;
    }
<?php } ?>
.fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-inner {
    display: inline-block;
    float: <?php echo $settings->button_alignment; ?>;
}

.fl-node-<?php echo $id; ?> .pp-dual-button-1 .pp-custom-icon {
    <?php if($settings->button_1_custom_icon_width) { ?>width: <?php echo $settings->button_1_custom_icon_width; ?>px;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-dual-button-2 .pp-custom-icon {
    <?php if($settings->button_2_custom_icon_width) { ?>width: <?php echo $settings->button_2_custom_icon_width; ?>px;<?php } ?>
}

<?php
$pp_button_1_effect = $settings->button_1_effect;

switch( $pp_button_1_effect ) {
    case 'fade': ?>
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
        transition: background-color, color;
        <?php if($settings->button_1_effect_duration) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
    }
    <?php
    break;

    case 'sweep_right': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            transform-origin: 0 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'sweep_left': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'sweep_bottom': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'sweep_top': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'bounce_right': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            transform-origin: 0 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_left': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_bottom': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_top': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'radial_out': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            border-radius: 100%;
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
        }
    <?php
    break;

    case 'radial_in': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            border-radius: 100%;
            content: "";
            <?php if( $settings->button_1_bg_color['primary']) { ?>background: #<?php echo $settings->button_1_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
    <?php
    break;

    case 'rectangle_out': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    <?php
    break;

    case 'rectangle_in': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['primary']) { ?>background: #<?php echo $settings->button_1_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
    <?php
    break;

    case 'shutter_in_horizontal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['primary']) { ?>background: #<?php echo $settings->button_1_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
        }
    <?php
    break;

    case 'shutter_out_horizontal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'shutter_in_vertical': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['primary']) { ?>background: #<?php echo $settings->button_1_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }
    <?php
    break;

    case 'shutter_out_vertical': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:before {
            content: "";
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'shutter_out_diagonal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -o-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
            height: 0;
            width: 0;
            z-index: -1;
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:after {
            height: 4000%;
            width: 100%;
        }
    <?php
    break;

    case 'shutter_in_diagonal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
            <?php if( $settings->button_1_bg_color['secondary']) { ?>background: #<?php echo $settings->button_1_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            <?php if( $settings->button_1_bg_color['primary']) { ?>background: #<?php echo $settings->button_1_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_1_text_color['secondary']) { ?>color:#<?php echo $settings->button_1_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -o-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            <?php if($settings->button_1_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_1_effect_duration; ?>ms;<?php } ?>
            height: 4000%;
            width: 100%;
            z-index: -1;
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button:hover:after {
            height: 4000%;
            width: 0;
        }
    <?php
    break;
}
?>
<?php
$pp_button_2_effect = $settings->button_2_effect;

switch( $pp_button_2_effect ) {
    case 'fade': ?>
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
        transition: background-color, color;
        <?php if($settings->button_2_effect_duration) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
    }
    <?php
    break;

    case 'sweep_right': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            transform-origin: 0 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'sweep_left': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'sweep_bottom': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'sweep_top': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'bounce_right': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            -moz-transform-origin: 0 50%;
            -o-transform-origin: 0 50%;
            -ms-transform-origin: 0 50%;
            transform-origin: 0 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_left': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 100% 50%;
            -moz-transform-origin: 100% 50%;
            -o-transform-origin: 100% 50%;
            -ms-transform-origin: 100% 50%;
            transform-origin: 100% 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_bottom': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 0;
            -moz-transform-origin: 50% 0;
            -o-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'bounce_top': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50% 100%;
            -moz-transform-origin: 50% 100%;
            -o-transform-origin: 50% 100%;
            -ms-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    <?php
    break;

    case 'radial_out': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            border-radius: 100%;
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
        }
    <?php
    break;

    case 'radial_in': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            border-radius: 100%;
            content: "";
            <?php if( $settings->button_2_bg_color['primary']) { ?>background: #<?php echo $settings->button_2_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(2);
            -moz-transform: scale(2);
            -o-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
    <?php
    break;

    case 'rectangle_out': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }
    <?php
    break;

    case 'rectangle_in': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['primary']) { ?>background: #<?php echo $settings->button_2_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -o-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
    <?php
    break;

    case 'shutter_in_horizontal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['primary']) { ?>background: #<?php echo $settings->button_2_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
        }
    <?php
    break;

    case 'shutter_out_horizontal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleX(0);
            -moz-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1);
            transform: scaleX(1);
        }
    <?php
    break;

    case 'shutter_in_vertical': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['primary']) { ?>background: #<?php echo $settings->button_2_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
        }
    <?php
    break;

    case 'shutter_out_vertical': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:before {
            content: "";
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: scaleY(0);
            -moz-transform: scaleY(0);
            -o-transform: scaleY(0);
            -ms-transform: scaleY(0);
            transform: scaleY(0);
            -webkit-transform-origin: 50%;
            -moz-transform-origin: 50%;
            -o-transform-origin: 50%;
            -ms-transform-origin: 50%;
            transform-origin: 50%;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:before {
            -webkit-transform: scaleY(1);
            -moz-transform: scaleY(1);
            -o-transform: scaleY(1);
            -ms-transform: scaleY(1);
            transform: scaleY(1);
        }
    <?php
    break;

    case 'shutter_out_diagonal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -o-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
            height: 0;
            width: 0;
            z-index: -1;
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:after {
            height: 4000%;
            width: 100%;
        }
    <?php
    break;

    case 'shutter_in_diagonal': ?>
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
            <?php if( $settings->button_2_bg_color['secondary']) { ?>background: #<?php echo $settings->button_2_bg_color['secondary']; ?>;<?php } ?>
            overflow: hidden;
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            <?php if( $settings->button_2_bg_color['primary']) { ?>background: #<?php echo $settings->button_2_bg_color['primary']; ?>;<?php } ?>
            <?php if( $settings->button_2_text_color['secondary']) { ?>color:#<?php echo $settings->button_2_text_color['secondary']; ?>;<?php } ?>
            <?php if( $settings->button_border_color['secondary']) { ?>border-color:#<?php echo $settings->button_border_color['secondary']; ?>;<?php } ?>
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -moz-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -o-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            -ms-transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            transform: translateX(-50%) translateY(-50%) rotate(45deg) translateZ(0);
            <?php if($settings->button_2_effect_duration >= 0) { ?>transition-duration: <?php echo $settings->button_2_effect_duration; ?>ms;<?php } ?>
            height: 4000%;
            width: 100%;
            z-index: -1;
        }
        .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button:hover:after {
            height: 4000%;
            width: 0;
        }
    <?php
    break;
}
?>

<?php if ( $global_settings->responsive_breakpoint > 768 ) { ?>
@media only screen and ( max-width: <?php echo $global_settings->responsive_breakpoint; ?>px ) {
    .fl-node-<?php echo $id; ?> .pp-dual-button-content {
        text-align: center;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-inner {
        float: none;
    }
}
<?php } ?>

@media only screen and ( max-width: 768px ) {
    .fl-node-<?php echo $id; ?> .pp-dual-button-content {
        text-align: center;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-inner {
        float: none;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-button {
        <?php if( $settings->button_font_size['button_font_size_tablet'] >=0 ) { ?>font-size: <?php echo $settings->button_font_size['button_font_size_tablet']; ?>px;<?php } ?>
    }
}

@media only screen and ( max-width: 480px ) {
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-button {
        <?php if( $settings->button_font_size['button_font_size_mobile'] >=0 ) { ?>font-size: <?php echo $settings->button_font_size['button_font_size_mobile']; ?>px;<?php } ?>
    }
}

@media only screen and ( max-width: <?php echo $settings->responsive_breakpoint; ?>px ) {
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-inner {
        float: none;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-inner {
        display: block;
        text-align: center;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button,
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button .pp-button {
        display: block;
        float: none;
        margin: 0 auto;
        width: 100%;
    }
    .fl-node-<?php echo $id; ?> .pp-spacer {
        float: left;
        height: 10px;
        width: 1px;
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-1 .pp-button {
        <?php if( $settings->button_border_radius ) { ?>border-radius: <?php echo $settings->button_border_radius; ?>px;<?php } ?>
    }
    .fl-node-<?php echo $id; ?> .pp-dual-button-content .pp-dual-button-2 .pp-button {
        <?php if( $settings->button_border_color['primary'] ) { ?>border-color: #<?php echo $settings->button_border_color['primary']; ?>;<?php } ?>
        <?php if( $settings->button_border_style) { ?>border-style:  <?php echo $settings->button_border_style; ?>;<?php } ?>
        <?php if( $settings->button_border_width ) { ?>border-width: <?php echo $settings->button_border_width; ?>px;<?php } ?>
        <?php if( $settings->button_border_radius ) { ?>border-radius: <?php echo $settings->button_border_radius; ?>px;<?php } ?>
    }
}
