<?php

$infobox_class = 'pp-infobox-wrap';

?>
<div class="<?php echo $infobox_class; ?>">
	<?php

	$layout = $settings->layouts;
	switch ( $layout ) {
		case '1':

			echo __('This Info Box layout is available in <a href="https://wpbeaveraddons.com/upgrade/">PowerPack Pro</a> version.', 'bb-powerpack');
			break;

		case '2':

			echo __('This Info Box layout is available in <a href="https://wpbeaveraddons.com/upgrade/">PowerPack Pro</a> version.', 'bb-powerpack');
			break;

		case '3':

			echo __('This Info Box layout is available in <a href="https://wpbeaveraddons.com/upgrade/">PowerPack Pro</a> version.', 'bb-powerpack');
			break;

		case '4':

			echo __('This Info Box layout is available in <a href="https://wpbeaveraddons.com/upgrade/">PowerPack Pro</a> version.', 'bb-powerpack');
			break;

		case '5': ?>
		<?php if( $settings->pp_infobox_link_type == 'box' ) { ?>
			<a class="pp-more-link" href="<?php echo $settings->link; ?>">
		<?php } ?>
			<div class="pp-infobox layout-5 clearfix">
				<div class="pp-icon-wrapper animated">
					<?php if( $settings->icon_type == 'icon' ) { ?>
						<div class="pp-infobox-icon">
							<div class="pp-infobox-icon-inner">
								<span class="pp-icon <?php echo $settings->icon_select; ?>"></span>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php if( $settings->pp_infobox_link_type == 'title' ) { ?>
					<a class="pp-more-link" href="<?php echo $settings->link; ?>">
				<?php } ?>
				<div class="pp-infobox-title-wrapper">
					<p class="pp-infobox-title"><?php echo $settings->title; ?></p>
				</div>
				<?php if( $settings->pp_infobox_link_type == 'title' ) { ?>
					</a>
				<?php } ?>
				<div class="pp-infobox-description">
					<?php echo $settings->description; ?>
					<?php if( $settings->pp_infobox_link_type == 'read_more' ) { ?>
						<a class="pp-more-link" href="<?php echo $settings->link; ?>"><?php echo $settings->pp_infobox_read_more_text; ?></a>
					<?php } ?>
				</div>
			</div>
			<?php if( $settings->pp_infobox_link_type == 'box' ) { ?>
				</a>
			<?php }
			break;

		default: ?>
		<?php if( $settings->pp_infobox_link_type == 'box' ) { ?>
			<a class="pp-more-link" href="<?php echo $settings->link; ?>">
		<?php } ?>
			<div class="pp-infobox clearfix">
				<div class="pp-icon-wrapper animated">
					<?php if( $settings->icon_type == 'icon' ) { ?>
						<div class="pp-infobox-icon">
							<div class="pp-infobox-icon-inner">
								<span class="pp-icon <?php echo $settings->icon_select; ?>"></span>
							</div>
						</div>
					<?php } ?>
				</div>
				<?php if( $settings->pp_infobox_link_type == 'title' ) { ?>
					<a class="pp-more-link pp-title-link" href="<?php echo $settings->link; ?>">
				<?php } ?>
				<div class="pp-infobox-title-wrapper">
					<p class="pp-infobox-title"><?php echo $settings->title; ?></p>
				</div>
				<?php if( $settings->pp_infobox_link_type == 'title' ) { ?>
					</a>
				<?php } ?>
				<div class="pp-infobox-description">
					<?php echo $settings->description; ?>
					<?php if( $settings->pp_infobox_link_type == 'read_more' ) { ?>
						<a class="pp-more-link" href="<?php echo $settings->link; ?>"><?php echo $settings->pp_infobox_read_more_text; ?></a>
					<?php } ?>
				</div>
			</div>
			<?php if( $settings->pp_infobox_link_type == 'box' ) { ?>
				</a>
			<?php }
			break;
	}
	?>

</div>
