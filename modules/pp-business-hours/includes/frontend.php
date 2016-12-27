<div class="pp-business-hours-content clearfix">
	<?php $rows = count($settings->business_hours_rows);
	for ($i=0; $i < count($settings->business_hours_rows); $i++) :

		if(!is_object($settings->business_hours_rows[$i])) continue;

		$bhRow = $settings->business_hours_rows[$i];
		$status = '';
		$highlight = '';

		if( $bhRow->status == 'close' ) {
			$status = ' pp-closed';
		}
		if( $bhRow->highlight == 'yes' ) {
			$highlight = ' pp-highlight-row';
		}
		?>
		<div class="pp-bh-row clearfix pp-bh-row-<?php echo $i; ?><?php echo $status; ?><?php echo $highlight; ?>">
			<div class="pp-bh-title">
				<?php echo $bhRow->title; ?>
			</div>
			<div class="pp-bh-timing">
				<?php if( $bhRow->status == 'close' ) {
					echo $bhRow->status_text;
				} else {
					if ( is_object( $bhRow->start_time ) ) {
						echo $bhRow->start_time->hours;
						echo ':';
						echo $bhRow->start_time->minutes . '&nbsp;';
						echo $bhRow->start_time->day_period;
						echo ' - ';
						echo $bhRow->end_time->hours;
						echo ':';
						echo $bhRow->end_time->minutes . '&nbsp;';
						echo $bhRow->end_time->day_period;
					}
					if ( is_array( $bhRow->start_time ) ) {
						echo $bhRow->start_time['hours'];
						echo ':';
						echo $bhRow->start_time['minutes'] . '&nbsp;';
						echo $bhRow->start_time['day_period'];
						echo ' - ';
						echo $bhRow->end_time['hours'];
						echo ':';
						echo $bhRow->end_time['minutes'] . '&nbsp;';
						echo $bhRow->end_time['day_period'];
					}
				} ?>
			</div>
		</div>
		<?php
	endfor; ?>
</div>
