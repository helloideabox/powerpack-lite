<div class="pp-page-templates">

    <h2><?php _e('Unlock Page Templates'); ?></h2>
    <p><?php _e('Get access to Premium Page Templates. <a href="'.BB_POWERPACK_PRO.'" target="_blank">Updgrade to PowerPack Pro</a>.'); ?></p>

    <div class="pp-page-templates-grid wp-clearfix">

        <?php foreach ( pp_page_templates_categories() as $cat => $name ) : ?>

            <div class="pp-page-template">
                <div class="pp-template-screenshot"><img src="<?php echo BB_POWERPACK_URL . 'assets/images/templates/400x400/' . $cat . '.jpg'; ?>" /></div>
                <span class="pp-template-preview" data-preview-src="<?php echo pp_page_templates_preview_src( $cat ); ?>" data-template-cat="<?php echo $cat; ?>"><?php _e('Preview', 'bb-powerpack'); ?></span>
                <h2 class="pp-template-category"><span></span> <?php echo $name; ?></h2>
                <div class="pp-template-actions">
                    <a class="button button-primary pp-btn-upgrade" href="<?php echo BB_POWERPACK_PRO; ?>" target="_blank"><?php _e('Upgrade Now', 'bb-powerpack'); ?></a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>
<div class="pp-template-overlay">
    <div class="pp-template-backdrop"></div>
    <div class="pp-template-wrap wp-clearfix">
        <div class="pp-template-header">
            <button class="left dashicons dashicons-no"><span class="screen-reader-text"><?php _e('Show previous template', 'bb-powerpack'); ?></span></button>
			<button class="right dashicons dashicons-no"><span class="screen-reader-text"><?php _e('Show next template', 'bb-powerpack'); ?></span></button>
			<button class="close dashicons dashicons-no"><span class="screen-reader-text"><?php _e('Close details dialog', 'bb-powerpack'); ?></span></button>
        </div>
        <div class="pp-template-info wp-clearfix">
            <span class="ajax-spinner"><img src="<?php echo admin_url( 'images/spinner.gif' ); ?>" class="loader-image" /></span>
            <iframe class="pp-template-preview-frame" src="" frameborder="0" height="100%" width="100%" seamless></iframe>
        </div>
        <div class="pp-template-actions">
            <a class="button button-primary pp-btn-upgrade" href="<?php echo BB_POWERPACK_PRO; ?>" target="_blank"><?php _e('Upgrade Now', 'bb-powerpack'); ?></a>
        </div>
    </div>
</div>

<script>
    jQuery('.pp-btn-upgrade').on('click', function(e) {
        e.stopPropagation();
    });

    jQuery(document).on('click', '.pp-page-template', function(e) {

        e.preventDefault();

        var preview = jQuery(this).find('.pp-template-preview');
        var previewSrc = preview.data('preview-src');
        var templateCat = preview.data('template-cat');

        jQuery('.pp-template-overlay').show().find('.pp-template-preview-frame').attr('src', previewSrc);

    });

    jQuery('.pp-template-overlay .pp-template-header .close').on('click', function(e) {

        e.preventDefault();

        var overlay = jQuery(this).parents('.pp-template-overlay');
        overlay.fadeOut(100).find('.pp-template-preview-frame').attr('src', '');

    });
</script>
