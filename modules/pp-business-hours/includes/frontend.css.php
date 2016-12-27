.fl-node-<?php echo $id; ?> .pp-business-hours-content {
	background-color: <?php echo ($settings->box_bg_color) ? '#' . $settings->box_bg_color : 'transparent'; ?>;
	<?php if( $settings->box_border != 'none' ) { ?>
	border-style: <?php echo $settings->box_border; ?>;
	border-width: <?php echo $settings->box_border_width; ?>px;
	<?php if( $settings->box_border_color ) { ?> border-color: #<?php echo $settings->box_border_color; ?>; <?php } ?>
	<?php } ?>
	<?php if( $settings->box_border_radius >= 0 ) { ?> border-radius: <?php echo $settings->box_border_radius; ?>px; <?php } ?>
	<?php if ( 'yes' == $settings->box_shadow_display ) { ?>
    -webkit-box-shadow: <?php echo $settings->box_shadow['horizontal']; ?>px <?php echo $settings->box_shadow['vertical']; ?>px <?php echo $settings->box_shadow['blur']; ?>px <?php echo $settings->box_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->box_shadow_color, $settings->box_shadow_opacity / 100 ); ?>;
    -moz-box-shadow: <?php echo $settings->box_shadow['horizontal']; ?>px <?php echo $settings->box_shadow['vertical']; ?>px <?php echo $settings->box_shadow['blur']; ?>px <?php echo $settings->box_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->box_shadow_color, $settings->box_shadow_opacity / 100 ); ?>;
    -o-box-shadow: <?php echo $settings->box_shadow['horizontal']; ?>px <?php echo $settings->box_shadow['vertical']; ?>px <?php echo $settings->box_shadow['blur']; ?>px <?php echo $settings->box_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->box_shadow_color, $settings->box_shadow_opacity / 100 ); ?>;
    box-shadow: <?php echo $settings->box_shadow['horizontal']; ?>px <?php echo $settings->box_shadow['vertical']; ?>px <?php echo $settings->box_shadow['blur']; ?>px <?php echo $settings->box_shadow['spread']; ?>px <?php echo pp_hex2rgba( '#'.$settings->box_shadow_color, $settings->box_shadow_opacity / 100 ); ?>;
    <?php } ?>
}

<?php if( $settings->zebra_pattern == 'yes' ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row:nth-of-type(odd) {
	background-color: <?php echo ($settings->row_bg_color_1) ? '#' . $settings->row_bg_color_1 : 'transparent'; ?>;
}
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row:nth-of-type(even) {
	background-color: <?php echo ($settings->row_bg_color_2) ? '#' . $settings->row_bg_color_2 : 'transparent'; ?>;
}
<?php } ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row {
    padding: <?php echo $settings->spacing; ?>px 10px <?php echo $settings->spacing; ?>px 10px;
}
<?php if( $settings->separator == 'yes' ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row {
	border-bottom-style: <?php echo $settings->separator_style; ?>;
	<?php if( $settings->separator_width ) { ?>border-bottom-width: <?php echo $settings->separator_width; ?>px; <?php } ?>
	<?php if( $settings->separator_color ) { ?> border-bottom-color: #<?php echo $settings->separator_color; ?>; <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row:last-child {
	border-bottom-width: 0;
}
<?php } ?>

.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-title {
	<?php if( $settings->title_font['family'] != 'Default' ) { ?>
	   <?php FLBuilderFonts::font_css( $settings->title_font ); ?>
   <?php } ?>
   <?php if( $settings->title_font_size == 'custom' && $settings->title_custom_font_size ) { ?>
	   font-size: <?php echo $settings->title_custom_font_size['desktop']; ?>px;
   <?php } ?>
   <?php if( $settings->title_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
	   line-height: <?php echo $settings->title_custom_line_height['desktop']; ?>;
   <?php } ?>
   <?php if( $settings->title_text_transform != 'default' ) { ?>
	   text-transform: <?php echo $settings->title_text_transform; ?>;
   <?php } ?>
   <?php if( $settings->title_color ) { ?>
	   color: #<?php echo $settings->title_color; ?>
   <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-timing {
	<?php if( $settings->timing_font['family'] != 'Default' ) { ?>
	   <?php FLBuilderFonts::font_css( $settings->timing_font ); ?>
   <?php } ?>
   <?php if( $settings->timing_font_size == 'custom' && $settings->timing_custom_font_size ) { ?>
	   font-size: <?php echo $settings->timing_custom_font_size['desktop']; ?>px;
   <?php } ?>
   <?php if( $settings->timing_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
	   line-height: <?php echo $settings->title_custom_line_height['desktop']; ?>;
   <?php } ?>
   <?php if( $settings->timing_text_transform != 'default' ) { ?>
	   text-transform: <?php echo $settings->timing_text_transform; ?>;
   <?php } ?>
   <?php if( $settings->timing_color ) { ?>
	   color: #<?php echo $settings->timing_color; ?>
   <?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row.pp-closed .pp-bh-timing {
	<?php if( $settings->status_color ) { ?>
 	   color: #<?php echo $settings->status_color; ?>
    <?php } ?>
}

<?php
for ($i=0; $i < count($settings->business_hours_rows); $i++) :

	if(!is_object($settings->business_hours_rows[$i])) continue;

	$bh_row = $settings->business_hours_rows[$i];
?>

<?php if( $bh_row->hl_row_bg_color ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row-<?php echo $i; ?>.pp-highlight-row {
	background-color: <?php echo '#' . $bh_row->hl_row_bg_color; ?>;
}
<?php } ?>

<?php if( $bh_row->hl_title_color ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row-<?php echo $i; ?>.pp-highlight-row .pp-bh-title {
	color: <?php echo '#' . $bh_row->hl_title_color; ?>;
}
<?php } ?>

<?php if( $bh_row->hl_timing_color ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row-<?php echo $i; ?>.pp-highlight-row .pp-bh-timing {
	color: <?php echo '#' . $bh_row->hl_timing_color; ?>;
}
<?php } ?>

<?php if( $bh_row->hl_status_color ) { ?>
.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row-<?php echo $i; ?>.pp-highlight-row.pp-closed .pp-bh-timing {
	color: <?php echo '#' . $bh_row->hl_status_color; ?>;
}
<?php } ?>

<?php endfor; ?>

@media only screen and ( max-width: 768px ) {
	.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-title {
	   <?php if( $settings->title_font_size == 'custom' && $settings->title_custom_font_size ) { ?>
		   font-size: <?php echo $settings->featured_title_custom_font_size['tablet']; ?>px;
	   <?php } ?>
	   <?php if( $settings->title_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
		   line-height: <?php echo $settings->title_custom_line_height['tablet']; ?>;
	   <?php } ?>
   	}
   .fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-timing {
      <?php if( $settings->timing_font_size == 'custom' && $settings->timing_custom_font_size ) { ?>
   	   font-size: <?php echo $settings->timing_custom_font_size['tablet']; ?>px;
      <?php } ?>
      <?php if( $settings->timing_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
   	   line-height: <?php echo $settings->title_custom_line_height['tablet']; ?>;
      <?php } ?>
  	}
}

@media only screen and ( max-width: 600px ) {
	.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-title {
	   <?php if( $settings->title_font_size == 'custom' && $settings->title_custom_font_size ) { ?>
		   font-size: <?php echo $settings->featured_title_custom_font_size['mobile']; ?>px;
	   <?php } ?>
	   <?php if( $settings->title_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
		   line-height: <?php echo $settings->title_custom_line_height['mobile']; ?>;
	   <?php } ?>
   	}
	.fl-node-<?php echo $id; ?> .pp-business-hours-content .pp-bh-row .pp-bh-timing {
       <?php if( $settings->timing_font_size == 'custom' && $settings->timing_custom_font_size ) { ?>
    	   font-size: <?php echo $settings->timing_custom_font_size['mobile']; ?>px;
       <?php } ?>
       <?php if( $settings->timing_line_height == 'custom' && $settings->title_custom_line_height ) { ?>
    	   line-height: <?php echo $settings->title_custom_line_height['mobile']; ?>;
       <?php } ?>
   	}
}
