<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * PPContactForm7Module:
 */

?>
<div class="pp-cf7-content">
	<h3 class="pp-cf7-form-title">
	<?php if ( $settings->custom_title ) {
	 	echo $settings->custom_title;
	} ?>
	</h3>
	<p class="pp-cf7-form-description">
	<?php if ( $settings->custom_description ) {
		echo $settings->custom_description;
	} ?>
	</p>
    <?php
    if ( $settings->select_form_field ) {
        echo do_shortcode( '[contact-form-7 id='.absint( $settings->select_form_field ).' ajax=true]' );
    }
    ?>
</div>
