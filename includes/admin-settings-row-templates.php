<div class="pp-page-templates">

    <h2><?php _e('Unlock Row Templates'); ?></h2>
    <p><?php _e('Get access to premium row templates. <a href="'.BB_POWERPACK_PRO.'" target="_blank">Updgrade to PowerPack Pro</a>.'); ?></p>

    <div class="pp-page-templates-grid wp-clearfix">

        <?php foreach ( pp_row_templates_categories() as $cat => $name ) : ?>

            <div class="pp-page-template pp-row-template">
                <div class="pp-template-screenshot"><img src="<?php echo BB_POWERPACK_URL . 'assets/images/templates/' . $cat . '.jpg'; ?>" /></div>
                <h2 class="pp-template-category"><span></span> <?php echo $name; ?></h2>
                <div class="pp-template-actions">
                    <a class="button button-primary pp-btn-upgrade" href="<?php echo BB_POWERPACK_PRO; ?>" target="_blank"><?php _e('Upgrade Now', 'bb-powerpack'); ?></a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>

<script>
    jQuery('.pp-btn-upgrade').on('click', function(e) {
        e.stopPropagation();
    });
</script>
