<?php
    $module_cats = array(
        'content'  => array(
            'name'      => __('Content Modules', 'bb-powerpack'),
            'desc'      => __('PowerPack\'s creative content modules can let you build beautiful websites. Whether you want to build a magazine layout or a portfolio site, we have got you covered.', 'bb-powerpack'),
            'count'     => 13
        ),
        'creative'  => array(
            'name'      => __('Creative Modules', 'bb-powerpack'),
            'desc'      => __('PowerPack\'s creative content modules can let you build beautiful websites. Whether you want to build a magazine layout or a portfolio site, we have got you covered.', 'bb-powerpack'),
            'count'     => 8
        ),
        'lead_gen'  => array(
            'name'      => __('Lead Generation Modules', 'bb-powerpack'),
            'desc'      => __('Lead Generation modules lets you create attention grabbing blocks on your site. These will allow you to boost conversion and generate more leads. You can create an announcement bar, a modal box, an optin form etc. with these modules.', 'bb-powerpack'),
            'count'     => 5
        ),
        'form'      => array(
            'name'      => __('Form Modules', 'bb-powerpack'),
            'desc'      => __('Custom modules for all the popular form plugins will make styling forms fun. Simply drag the module and stylize the form with a few clicks.', 'bb-powerpack'),
            'count'     => 8
        ),
        'extensions'    => array(
            'name'          => __('Extensions', 'bb-powerpack'),
            'desc'          => __('Extensions add extra functionality to BB’s native Row and Column settings. These extensions include Row separators, column shadow, round corner, gradient backgrounds etc. These will allow you  to create beautiful sites effortlessly.', 'bb-powerpack'),
            'count'         => 8
        )
    );
?>
<div class="pp-page-templates">

    <h2><?php _e('Unlock these set of Modules'); ?></h2>
    <p><?php _e('Get access to all of these modules. <a href="'.BB_POWERPACK_PRO.'" target="_blank">Updgrade to PowerPack Pro</a>.'); ?></p>

    <div class="pp-page-templates-grid wp-clearfix">

        <?php foreach ( $module_cats as $module_cat ) : ?>

            <div class="pp-page-template pp-modules">
                <div class="pp-module-content">
                    <div class="pp-module-count"><span><?php echo $module_cat['count']; ?></span></div>
                    <h2 class="pp-module-cat"><?php echo $module_cat['name']; ?></h2>
                    <p class="pp-module-desc"><?php echo $module_cat['desc']; ?></p>
                </div>
                <div class="pp-template-actions">
                    <a class="button button-secondary pp-view-demo" href="https://wpbeaveraddons.com/demo/" target="_blank"><?php _e('View Demo', 'bb-powerpack'); ?></a>
                    <a class="button button-primary pp-btn-upgrade" href="<?php echo BB_POWERPACK_PRO; ?>" target="_blank"><?php _e('Upgrade Now', 'bb-powerpack'); ?></a>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>

<script>
    jQuery('.pp-btn-upgrade, .pp-view-demo').on('click', function(e) {
        e.stopPropagation();
    });
</script>
