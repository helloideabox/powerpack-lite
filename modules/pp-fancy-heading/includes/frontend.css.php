.fl-node-<?php echo $id; ?> {
    text-align: <?php echo $settings->text_alignment; ?>;
}
.fl-node-<?php echo $id; ?> .pp-fancy-heading-title {
    display: inline-block;
    <?php if ( $settings->font_family['family'] != 'Default' ) {
        FLBuilderFonts::font_css( $settings->font_family );
    } ?>
    <?php if ( $settings->font_size != 'default' && $settings->font_size_custom['desktop'] != '' ) { ?>
        font-size: <?php echo $settings->font_size_custom['desktop']; ?>px;
    <?php } ?>
    <?php if ( $settings->line_height != 'default' && $settings->line_height_custom['desktop'] != '' ) { ?>
        line-height: <?php echo $settings->line_height_custom['desktop']; ?>;
    <?php } ?>
    <?php if ( $settings->letter_spacing != '' ) { ?>
        letter-spacing: <?php echo $settings->letter_spacing; ?>px;
    <?php } ?>
    <?php if ( $settings->heading_type == 'gradient' ) { ?>
        color: #<?php echo $settings->primary_color; ?>;
        background-image: -webkit-linear-gradient(92deg, #<?php echo $settings->primary_color; ?>, #<?php echo $settings->secondary_color; ?>);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-animation: pp-hue <?php echo $settings->animation_speed; ?>s infinite linear;
        animation: pp-hue <?php echo $settings->animation_speed; ?>s infinite linear;
    <?php } ?>
    <?php if ( $settings->heading_type == 'solid' ) { ?>
        color: #<?php echo $settings->primary_color; ?>;
        -webkit-animation: pp-hue <?php echo $settings->animation_speed; ?>s infinite linear;
        animation: pp-hue <?php echo $settings->animation_speed; ?>s infinite linear;
    <?php } ?>
    <?php if ( $settings->heading_type == 'clip' ) { ?>
        background-image: url(<?php echo $settings->bg_image_src; ?>);
        background-repeat: <?php echo $settings->bg_repeat; ?>;
        background-position: <?php echo $settings->bg_position; ?>;
        background-attachment: <?php echo $settings->bg_attachment; ?>;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    <?php } ?>
    <?php if ( $settings->heading_type == 'fade' ) { ?>
        color: #<?php echo $settings->primary_color; ?>;
        -webkit-animation: pp-fade <?php echo $settings->animation_speed; ?>s infinite linear;
        animation: pp-fade <?php echo $settings->animation_speed; ?>s infinite linear;
    <?php } ?>
    <?php if ( $settings->heading_type == 'rotate' ) { ?>
        color: #<?php echo $settings->primary_color; ?>;
        -webkit-animation: pp-rotate <?php echo $settings->animation_speed; ?>s infinite linear;
        animation: pp-rotate <?php echo $settings->animation_speed; ?>s infinite linear;
    <?php } ?>
}

@media only screen and (max-width: 768px) {
    .fl-node-<?php echo $id; ?> .pp-fancy-heading-title {
        <?php if ( $settings->font_size != 'default' && $settings->font_size_custom['tablet'] != '' ) { ?>
            font-size: <?php echo $settings->font_size_custom['tablet']; ?>px;
        <?php } ?>
        <?php if ( $settings->line_height != 'default' && $settings->line_height_custom['tablet'] != '' ) { ?>
            line-height: <?php echo $settings->line_height_custom['tablet']; ?>;
        <?php } ?>
    }
}

@media only screen and (max-width: 480px) {
    .fl-node-<?php echo $id; ?> .pp-fancy-heading-title {
        <?php if ( $settings->font_size != 'default' && $settings->font_size_custom['mobile'] != '' ) { ?>
            font-size: <?php echo $settings->font_size_custom['mobile']; ?>px;
        <?php } ?>
        <?php if ( $settings->line_height != 'default' && $settings->line_height_custom['mobile'] != '' ) { ?>
            line-height: <?php echo $settings->line_height_custom['mobile']; ?>;
        <?php } ?>
    }
}
