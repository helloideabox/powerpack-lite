
.fl-node-<?php echo $id; ?> .pp-heading-content {
    text-align: <?php echo $settings->heading_alignment; ?>;
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading {
    <?php if ( $settings->heading_title == '' && ! FLBuilderModel::is_builder_active() ) { ?>
    display: none;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading .heading-title {
    <?php if( $settings->heading_font['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->heading_font ); ?>
    <?php } ?>
    <?php if( $settings->heading_font_size >= 0 && $settings->heading_font_size_select == 'custom' ) { ?>
    font-size: <?php echo $settings->heading_font_size; ?>px;
    <?php } ?>
    <?php if( $settings->heading_color ) { ?>
    color: #<?php echo $settings->heading_color; ?>;
    <?php } ?>
    <?php if ( $settings->heading_letter_space != '' ) { ?>
    letter-spacing: <?php echo $settings->heading_letter_space; ?>px;
    <?php } ?>
    <?php if( $settings->heading_line_height_n >= 0 ) { ?>
    line-height: <?php echo $settings->heading_line_height_n;?>;
    <?php } ?>
    <?php if( $settings->heading_top_margin >= 0 ) { ?>
    margin-top: <?php echo $settings->heading_top_margin; ?>px;
    <?php } ?>
    <?php if( $settings->heading_bottom_margin >= 0 ) { ?>
    margin-bottom: <?php echo $settings->heading_bottom_margin; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading .heading-title span.title-text {
    display: inline-block;
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading.pp-separator-inline .heading-title span {
    <?php if( $settings->font_title_line_space ) { ?>
    padding-right: <?php echo $settings->font_title_line_space; ?>px;
    <?php } ?>
    <?php if( $settings->font_title_line_space ) { ?>
    padding-left: <?php echo $settings->font_title_line_space; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading.pp-separator-inline .heading-title span:before {
    <?php if( $settings->line_width >= 0 ) { ?>
    width: <?php echo $settings->line_width; ?>px;
    <?php } ?>
    <?php if( $settings->heading_line_style ) { ?>
    border-style: <?php echo $settings->heading_line_style; ?>;
    <?php } ?>
    <?php if( $settings->line_color ) { ?>
    border-color: #<?php echo $settings->line_color; ?>;
    <?php } ?>
    <?php if( $settings->line_height >= 0 ) { ?>
    border-bottom-width: <?php echo $settings->line_height; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading.pp-separator-inline .heading-title span:after {
    <?php if( $settings->line_width >= 0 ) { ?>
    width: <?php echo $settings->line_width; ?>px;
    <?php } ?>
    <?php if( $settings->heading_line_style ) { ?>
    border-style: <?php echo $settings->heading_line_style; ?>;
    <?php } ?>
    <?php if( $settings->line_color ) { ?>
    border-color: #<?php echo $settings->line_color; ?>;
    <?php } ?>
    <?php if( $settings->line_height >= 0 ) { ?>
    border-bottom-width: <?php echo $settings->line_height; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-sub-heading {
    <?php if( $settings->sub_heading_font['family'] != 'Default' ) { ?>
    <?php FLBuilderFonts::font_css( $settings->sub_heading_font ); ?>
    <?php } ?>
    <?php if( $settings->sub_heading_font_size >= 0 ) { ?>
    font-size: <?php echo $settings->sub_heading_font_size; ?>px;
    <?php } ?>
    <?php if( $settings->sub_heading_color ) { ?>
    color: #<?php echo $settings->sub_heading_color; ?>;
    <?php } ?>
    <?php if( $settings->sub_heading_line_height_n >= 0 ) { ?>
    line-height: <?php echo $settings->sub_heading_line_height_n;?>;
    <?php } ?>
    <?php if( $settings->sub_heading_top_margin >= 0 ) { ?>
    margin-top: <?php echo $settings->sub_heading_top_margin; ?>px;
    <?php } ?>
    <?php if( $settings->sub_heading_bottom_margin >= 0 ) { ?>
    margin-bottom: <?php echo $settings->sub_heading_bottom_margin; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator .pp-heading-separator-align {
    <?php if( $settings->heading_alignment ) { ?>
    text-align: <?php echo $settings->heading_alignment; ?>;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon:before {
    <?php if( $settings->font_icon_line_space >= 0 ) { ?>
    margin-right: <?php echo $settings->font_icon_line_space; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon:after {
    <?php if( $settings->font_icon_line_space >= 0 ) { ?>
    margin-left: <?php echo $settings->font_icon_line_space; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon.pp-left:after {
    left: 1%;
}
.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon.pp-right:before {
    right: 1%;
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon:before,
.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon:after {
    <?php if( $settings->line_width >= 0 ) { ?>
    width: <?php echo $settings->line_width; ?>px;
    <?php } ?>
    <?php if( $settings->heading_line_style ) { ?>
    border-style: <?php echo $settings->heading_line_style; ?>;
    <?php } ?>
    <?php if( $settings->line_color ) { ?>
    border-color: #<?php echo $settings->line_color; ?>;
    <?php } ?>
    <?php if( $settings->line_height >= 0 ) { ?>
    border-bottom-width: <?php echo $settings->line_height; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator img.heading-icon-image {
    <?php if( $settings->heading_icon_select == 'custom_icon_select' ) { ?>
        <?php if( $settings->font_icon_font_size >= 0 ) { ?>
        width: <?php echo $settings->font_icon_font_size; ?>px;
        <?php } ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator .pp-separator-line {
    <?php if( $settings->heading_line_style ) { ?>
    border-bottom-style: <?php echo $settings->heading_line_style; ?>;
    <?php } ?>
    <?php if( $settings->line_height >= 0 ) { ?>
    border-bottom-width: <?php echo $settings->line_height; ?>px;
    <?php } ?>
    <?php if( $settings->line_color ) { ?>
    border-bottom-color: #<?php echo $settings->line_color; ?>;
    <?php } ?>
    <?php if( $settings->line_width >= 0 ) { ?>
    width: <?php echo $settings->line_width; ?>px;
    <?php } ?>
    <?php if( $settings->heading_alignment == 'right' ) { ?>
    float: right;
    <?php } else if( $settings->heading_alignment == 'left' ) { ?>
    float: left;
    <?php } else { ?>
    margin: 0 auto;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator {
    <?php if( $settings->font_icon_color ) { ?>
    color: #<?php echo $settings->font_icon_color; ?>;
    <?php } ?>
    <?php if( $settings->separator_heading_top_margin >= 0 ) { ?>
    margin-top: <?php echo $settings->separator_heading_top_margin; ?>px;
    <?php } ?>
    <?php if( $settings->separator_heading_bottom_margin >= 0 ) { ?>
    margin-bottom: <?php echo $settings->separator_heading_bottom_margin; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator .pp-heading-separator-icon {
    display: inline-block;
    text-align: center;
    <?php if( $settings->font_icon_bg_color ) { ?>
    background: #<?php echo $settings->font_icon_bg_color; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->font_icon_border_radius; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_border_width >= 0 ) { ?>
    border-width: <?php echo $settings->font_icon_border_width; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_border_style ) { ?>
    border-style: <?php echo $settings->font_icon_border_style; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_border_color ) { ?>
    border-color: #<?php echo $settings->font_icon_border_color; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_padding_top >= 0 ) { ?>
    padding-top: <?php echo $settings->font_icon_padding_top; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_bottom >= 0 ) { ?>
    padding-bottom: <?php echo $settings->font_icon_padding_bottom; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_left >= 0 ) { ?>
    padding-left: <?php echo $settings->font_icon_padding_left; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_right >= 0 ) { ?>
    padding-right: <?php echo $settings->font_icon_padding_right; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator .pp-heading-separator-icon i,
.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator .pp-heading-separator-icon i:before {
    <?php if( $settings->heading_icon_select == 'font_icon_select' ) { ?>
        <?php if( $settings->font_icon_font_size >= 0 ) { ?>
        font-size: <?php echo $settings->font_icon_font_size; ?>px;
        <?php } ?>
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.icon_only span {
    <?php if( $settings->font_icon_bg_color ) { ?>
    background: #<?php echo $settings->font_icon_bg_color; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->font_icon_border_radius; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_border_width >= 0 ) { ?>
    border-width: <?php echo $settings->font_icon_border_width; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_border_style ) { ?>
    border-style: <?php echo $settings->font_icon_border_style; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_border_color ) { ?>
    border-color: #<?php echo $settings->font_icon_border_color; ?>;
    <?php } ?>
    <?php if( $settings->font_icon_padding_top >= 0 ) { ?>
    padding-top: <?php echo $settings->font_icon_padding_top; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_bottom >= 0 ) { ?>
    padding-bottom: <?php echo $settings->font_icon_padding_bottom; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_left >= 0 ) { ?>
    padding-left: <?php echo $settings->font_icon_padding_left; ?>px;
    <?php } ?>
    <?php if( $settings->font_icon_padding_right >= 0 ) { ?>
    padding-right: <?php echo $settings->font_icon_padding_right; ?>px;
    <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.icon_only img,
.fl-node-<?php echo $id; ?> .pp-heading-content .pp-heading-separator.line_with_icon img {
    <?php if( $settings->font_icon_border_radius >= 0 ) { ?>
    border-radius: <?php echo $settings->font_icon_border_radius; ?>px;
    <?php } ?>
}
