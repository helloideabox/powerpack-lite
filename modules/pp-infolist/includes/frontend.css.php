.fl-node-<?php echo $id; ?> .pp-infolist-wrap .pp-list-item {
	margin-bottom: <?php echo ($settings->list_spacing >= 0) ? $settings->list_spacing.'px' : '25px'; ?>;
}
.fl-node-<?php echo $id; ?> .pp-infolist-title h3.pp-infolist-title-text {
	<?php if( $settings->title_color ) { ?>color: #<?php echo $settings->title_color; ?>;<?php } ?>
	<?php if( $settings->title_font_size ) { ?>font-size: <?php echo $settings->title_font_size; ?>px;<?php } ?>
	margin-top: <?php echo $settings->title_margin['top']; ?>px;
	margin-bottom: <?php echo $settings->title_margin['bottom']; ?>px;
}
.fl-node-<?php echo $id; ?> .pp-infolist-description {
	<?php if( $settings->text_color ) { ?>color: #<?php echo $settings->text_color; ?>;<?php } ?>
	<?php if( $settings->text_font_size ) { ?>font-size: <?php echo $settings->text_font_size; ?>px;<?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-infolist-icon {
	<?php if( $settings->icon_border_radius ) { ?>border-radius: <?php echo $settings->icon_border_radius; ?>px;<?php } ?>
	<?php if( $settings->icon_box_size ) { ?>padding: <?php echo $settings->icon_box_size; ?>px;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-infolist-icon-inner {
	<?php if( $settings->icon_box_width ) { ?>height: <?php echo $settings->icon_box_width; ?>px;<?php } ?>
	<?php if( $settings->icon_box_width ) { ?>width: <?php echo $settings->icon_box_width; ?>px;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-infolist-icon-inner span.pp-icon,
.fl-node-<?php echo $id; ?> .pp-infolist-icon-inner span.pp-icon:before {
	<?php if( $settings->icon_font_size ) { ?>font-size: <?php echo $settings->icon_font_size; ?>px;<?php } ?>
}

.fl-node-<?php echo $id; ?> .pp-infolist-wrap .layout-1 .pp-icon-wrapper {
	<?php if( $settings->icon_gap >= 0 ) { ?>margin-right: <?php echo $settings->icon_gap; ?>px; <?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-infolist-wrap .layout-2 .pp-icon-wrapper {
	<?php if( $settings->icon_gap >= 0 ) { ?>margin-left: <?php echo $settings->icon_gap; ?>px;<?php } ?>
}
.fl-node-<?php echo $id; ?> .pp-infolist-wrap .layout-3 .pp-icon-wrapper {
	<?php if( $settings->icon_gap >= 0 ) { ?>margin-bottom: <?php echo $settings->icon_gap; ?>px;<?php } ?>
}

<?php
$number_items = count($settings->list_items);
for($i=0; $i < $number_items; $i++) :
	$items = $settings->list_items[$i]; ?>

	.fl-node-<?php echo $id; ?> .pp-list-item-<?php echo $i; ?> .pp-infolist-icon-inner .pp-icon {
		<?php if( $items->icon_background ) { ?>background: #<?php echo $items->icon_background; ?>;<?php } ?>
		<?php if( $settings->icon_border_radius ) { ?>border-radius: <?php echo $settings->icon_border_radius; ?>px;<?php } ?>
		<?php if( $items->icon_color ) { ?>color: #<?php echo $items->icon_color; ?>;<?php } ?>
	}
	.fl-node-<?php echo $id; ?> .pp-list-item-<?php echo $i; ?> .pp-infolist-icon:hover .pp-icon {
		<?php if( $items->icon_background_hover ) { ?>background: #<?php echo $items->icon_background_hover; ?>;<?php } ?>
		<?php if( $items->icon_color_hover ) { ?>color: #<?php echo $items->icon_color_hover; ?>;<?php } ?>
	}

<?php if( $items->link_type == 'read_more' ) { ?>
	.fl-node-<?php echo $id; ?> .pp-list-item-<?php echo $i; ?> .pp-more-link {
		<?php if( $items->read_more_color ) { ?>color: #<?php echo $items->read_more_color; ?>;<?php } ?>
	}
	.fl-node-<?php echo $id; ?> .pp-list-item-<?php echo $i; ?> .pp-more-link:hover {
		<?php if( $items->read_more_color_hover ) { ?>color: #<?php echo $items->read_more_color_hover; ?>;<?php } ?>
	}
<?php } ?>

<?php endfor; ?>

.fl-node-<?php echo $id; ?> .pp-infolist-wrap .layout-3 .pp-list-item {
	width: <?php echo 100 / $number_items; ?>%;
}

<?php if( $items->link_type == 'read_more' ) { ?>
	<?php if( $settings->text_font['family'] != 'Default' ) { ?><?php FLBuilderFonts::font_css( $settings->text_font ); ?><?php } ?>
	<?php if( $settings->text_font_size ) { ?>font-size: <?php echo $settings->text_font_size; ?>px;<?php } ?>
<?php } ?>

@media only screen and (max-width: 768px) {
	.fl-node-<?php echo $id; ?> .pp-infolist-wrap .layout-3 .pp-list-item {
		width: 100%;
		max-width: 400px;
		float: none;
	}
}
