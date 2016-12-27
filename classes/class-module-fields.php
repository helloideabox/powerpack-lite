<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * @class PPFields
 */
class PP_Fields {

    /**
     * Holds the class object.
     *
     * @since 1.0.0
     *
     * @var object
     */
    public static $instance;

    /**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        add_action( 'fl_builder_control_pp-radio', array( $this, 'radio' ), 1, 4 );
        add_action( 'fl_builder_control_pp-checkbox', array( $this, 'checkbox' ), 1, 4 );
        add_action( 'fl_builder_control_pp-toggle', array( $this, 'toggle' ), 1, 4 );
        add_action( 'fl_builder_control_pp-multitext', array( $this, 'multitext' ), 1, 4 );
        add_action( 'fl_builder_control_pp-color', array( $this, '_color' ), 1, 4 );
        add_action( 'fl_builder_control_pp-switch', array( $this, '_switch' ), 1, 4 );
        add_action( 'fl_builder_control_pp-separator', array( $this, '_separator' ), 1, 4 );
    }

    /**
     * Radio input
     */
    public function radio( $name, $value, $field, $settings )
    {
        if ( ! isset( $field['options'] ) ) {
            return;
        }

        $options    = ( isset( $field['options'] ) && is_array( $field['options'] ) ) ? $field['options'] : array();
        $default    = ( isset( $field['default'] ) ) ? $field['default'] : '';
        $class      = ( isset( $field['class'] ) ) ? $field['class'] : '';
        $toggle     = ( isset( $field['toggle'] ) && is_array( $field['toggle'] ) ) ? $field['toggle'] : array();
        $hide       = ( isset( $field['hide'] ) && is_array( $field['hide'] ) ) ? $field['hide'] : array();
        $trigger    = ( isset( $field['trigger'] ) && is_array( $field['trigger'] ) ) ? $field['trigger'] : array();

        foreach ( $options as $opt_key => $opt_value ) {
            ?>
            <div class="pp-field-wrap">
                <label class="pp-label pp-option-<?php echo $opt_key; ?> <?php echo $name; ?> <?php echo ( $opt_key == $value || ( '' == $value && $opt_key == $default ) ) ? 'selected' : ''; ?>">
                    <input type="radio" class="pp-field-radio <?php echo $class; ?>" name="<?php echo $name; ?>" value="<?php echo $opt_key; ?>" <?php echo ( $opt_key == $value || ( '' == $value && $opt_key == $default ) ) ? 'checked="checked"' : ''; ?> />
                    <span><?php echo $opt_value; ?></span>
                </label>
            </div>
            <?php
        }
        ?>
        <input type="hidden" class="pp-field-radio-data" value="<?php echo ( $value && '' !== $value ) ? $value : $default; ?>" data-name="<?php echo $name; ?>" <?php echo count( $toggle ) ? "data-toggle='". json_encode( $toggle ) . "'" : ''; ?> <?php echo count( $hide ) ? "data-hide='". json_encode( $hide ) . "'" : ''; ?> <?php echo count( $trigger ) ? "data-trigger='". json_encode( $trigger ) . "'" : ''; ?> />
        <script> PPFields._initRadioFields(); </script>
        <?php
    }

    /**
     * Checkbox input
     */
    public function checkbox( $name, $value, $field, $settings )
    {
        if ( ! isset( $field['options'] ) ) {
            return;
        }

        $options    = ( isset( $field['options'] ) && is_array( $field['options'] ) ) ? $field['options'] : array();
        $default    = ( isset( $field['default'] ) ) ? $field['default'] : '';
        $class      = ( isset( $field['class'] ) ) ? $field['class'] : '';
        $toggle     = ( isset( $field['toggle'] ) && is_array( $field['toggle'] ) ) ? $field['toggle'] : array();
        $hide       = ( isset( $field['hide'] ) && is_array( $field['hide'] ) ) ? $field['hide'] : array();
        $trigger    = ( isset( $field['trigger'] ) && is_array( $field['trigger'] ) ) ? $field['trigger'] : array();

        foreach ( $options as $opt_key => $opt_value ) {
            ?>
            <div class="pp-field-wrap">
                <label class="pp-label pp-option-<?php echo $opt_key; ?> <?php echo $name; ?> <?php echo ( ( is_array( $value ) && in_array( $opt_key, $value ) ) || ( '' == $value && $opt_key == $default ) ) ? 'selected' : ''; ?>">
                    <input type="checkbox" class="pp-field-checkbox <?php echo $class; ?>" data-name="<?php echo $name; ?>" value="<?php echo $opt_key; ?>" <?php echo ( ( is_array( $value ) && in_array( $opt_key, $value ) ) || ( '' == $value && $opt_key == $default ) ) ? 'checked="checked"' : ''; ?> />
                    <span><?php echo $opt_value; ?></span>
                </label>
            </div>
            <?php
        }
        ?>
        <input type="hidden" class="pp-field-checkbox-data" name="<?php echo $name; ?>" value="[<?php echo ( is_array( $value ) ) ? implode( ', ', $value ) : $default; ?>]" data-name="<?php echo $name; ?>" <?php echo count( $toggle ) ? "data-toggle='". json_encode( $toggle ) . "'" : ''; ?> <?php echo count( $hide ) ? "data-hide='". json_encode( $hide ) . "'" : ''; ?> <?php echo count( $trigger ) ? "data-trigger='". json_encode( $trigger ) . "'" : ''; ?> />
        <script> PPFields._initCheckboxFields(); </script>
        <?php
    }

    /**
     * Toggle
     */
    public function toggle( $name, $value, $field, $settings )
    {
        $default    = ( isset( $field['default'] ) ) ? $field['default'] : 'disabled';
        $class      = ( isset( $field['class'] ) ) ? $field['class'] : '';
        $toggle     = ( isset( $field['toggle'] ) && is_array( $field['toggle'] ) ) ? $field['toggle'] : array();
        $hide       = ( isset( $field['hide'] ) && is_array( $field['hide'] ) ) ? $field['hide'] : array();
        $trigger    = ( isset( $field['trigger'] ) && is_array( $field['trigger'] ) ) ? $field['trigger'] : array();
        $value      = ( '' != $value ) ? ( 'enabled' != $value ? 'disabled' : $value ) : $default;

        ?>
        <div class="pp-field-wrap">
            <div class="pp-toggle <?php echo $value; ?>">
                <span class="track"></span>
                <span class="thumb"></span>
                <input type="checkbox" class="pp-field-toggle" name="<?php echo $name; ?>" value="<?php echo $value; ?>" checked="checked" <?php echo count( $toggle ) ? "data-toggle='". json_encode( $toggle ) . "'" : ''; ?> <?php echo count( $hide ) ? "data-hide='". json_encode( $hide ) . "'" : ''; ?> <?php echo count( $trigger ) ? "data-trigger='". json_encode( $trigger ) . "'" : ''; ?> />
            </div>
        </div>
        <script> PPFields._initToggleFields(); </script>
        <?php
    }

    /**
     * Multi input text fields
     */
    public function multitext( $name, $value, $field, $settings )
    {

        if ( ! isset( $field['options'] ) || ! is_array( $field['options'] ) ) {
           return;
        }

        $options    = $field['options'];
        $class      = ( isset( $field['class'] ) ) ? $field['class'] : '';
        $default    = isset($field['default']) ? $field['default'] : array();
        $value      = (array) $value;
        $count      = 0;
        ?>
        <div class="pp-multitext-wrap">
        <?php
        foreach ( $options as $key => $opt ) {
            $placeholder = isset($opt['placeholder']) ? $opt['placeholder'] : '';
            $size        = isset($opt['size']) ? 'size="'.$opt['size'].'"' : '';
            $maxlength   = isset($opt['maxlength']) ? 'maxlength="'.$opt['maxlength'].'"' : '';
            $icon        = isset($opt['icon']) ? 'fa ' . $opt['icon'] : '';
            $preview     = isset($opt['preview']) ? $opt['preview'] : array();
            $tooltip     = isset($opt['tooltip']) ? $opt['tooltip'] : '';
        ?>
        <span class="pp-multitext <?php echo $icon; ?><?php echo '' != $tooltip ? ' pp-tip' : ''; ?> pp-field" <?php echo count( $preview ) ? "data-preview='". json_encode( $preview ) . "'" : ''; ?> title="<?php echo $tooltip; ?>">
            <input type="text" name="<?php echo $name . '[]['. $key .']'; ?>" value="<?php echo $value[$key]; ?>" class="text pp-field-multitext input-small-m valid" placeholder="<?php echo $placeholder; ?>" <?php echo $size; ?> <?php echo $maxlength; ?> />
            <?php if ( 0 == $count ) { ?>
                <span class="pp-responsive-toggle fa fa-chevron-right pp-tip" title="<?php _e( 'Responsive Options', 'bb-powerpack' ); ?>"></span>
            <?php } ?>
        </span>
        <?php
        $count++;
        }
        ?>
        </div>
        <?php
    }

    /**
     * Dual color
     */
    public function _color( $name, $value, $field, $settings )
    {
        $primary    = isset( $field['options'] ) ? ( isset( $field['options']['primary'] ) ? $field['options']['primary'] : __('Primary', 'bb-powerpack') ) : __('Primary', 'bb-powerpack');
        $secondary  = isset( $field['options'] ) ? ( isset( $field['options']['secondary'] ) ? $field['options']['secondary'] : __('Secondary', 'bb-powerpack') ) : __('Secondary', 'bb-powerpack');
        $value      = (array) $value;
        ?>
        <div class="pp-color-picker fl-color-picker<?php if(isset($field['class'])) echo ' ' . $field['class']; ?>">
        	<div class="fl-color-picker-color<?php echo (!isset( $value['primary'] ) || '' == $value['primary']) ? ' fl-color-picker-empty' : '' ?>"></div>
        	<?php if(isset($field['show_reset']) && $field['show_reset']) : ?>
        		<div class="fl-color-picker-clear"><div class="fl-color-picker-icon-remove"></div></div>
        	<?php endif; ?>
            <div class="pp-color-text"><?php echo $primary; ?></div>
        	<input name="<?php echo $name . '[][primary]'; ?>" type="hidden" value="<?php echo isset( $value['primary'] ) ? $value['primary'] : ''; ?>" class="fl-color-picker-value pp-field-color pp-color-primary" />
        </div>
        <div class="pp-color-picker fl-color-picker<?php if(isset($field['class'])) echo ' ' . $field['class']; ?>">
        	<div class="fl-color-picker-color<?php echo (!isset( $value['secondary'] ) || '' == $value['secondary']) ? ' fl-color-picker-empty' : '' ?>"></div>
        	<?php if(isset($field['show_reset']) && $field['show_reset']) : ?>
        		<div class="fl-color-picker-clear"><div class="fl-color-picker-icon-remove"></div></div>
        	<?php endif; ?>
            <div class="pp-color-text"><?php echo $secondary; ?></div>
        	<input name="<?php echo $name . '[][secondary]'; ?>" type="hidden" value="<?php echo isset( $value['secondary'] ) ? $value['secondary'] : ''; ?>" class="fl-color-picker-value pp-field-color pp-color-secondary" />
        </div>
        <?php
    }

    /**
     * Switch
     */
    public function _switch( $name, $value, $field, $settings )
    {
        if ( ! isset( $field['options'] ) || ! is_array( $field['options'] ) ) {
           return;
        }
        $options = $field['options'];
        $class      = ( isset( $field['class'] ) ) ? $field['class'] : '';
        $toggle     = ( isset( $field['toggle'] ) && is_array( $field['toggle'] ) ) ? $field['toggle'] : array();
        $hide       = ( isset( $field['hide'] ) && is_array( $field['hide'] ) ) ? $field['hide'] : array();
        $trigger    = ( isset( $field['trigger'] ) && is_array( $field['trigger'] ) ) ? $field['trigger'] : array();
        ?>
        <div class="pp-switch">
            <?php foreach ( $options as $key => $label ) { ?>
            <span class="pp-switch-button<?php echo $key == $value ? ' pp-switch-active' : ''; ?>" data-value="<?php echo $key; ?>"><?php echo $label; ?></span>
            <?php } ?>
            <input type="hidden" class="pp-field-switch" name="<?php echo $name; ?>" value="<?php echo $value; ?>" <?php echo count( $toggle ) ? "data-toggle='". json_encode( $toggle ) . "'" : ''; ?> <?php echo count( $hide ) ? "data-hide='". json_encode( $hide ) . "'" : ''; ?> <?php echo count( $trigger ) ? "data-trigger='". json_encode( $trigger ) . "'" : ''; ?> />
        </div>
        <?php
    }

    /**
    * Separator
    */
    public function _separator( $name, $value, $field, $settings )
    {
        if ( '' != $value ) { ?>
            <p class="pp-field-desc" style="<?php echo isset($field['style']) ? $field['style'] : ''; ?>"><?php echo $value; ?>
        <?php } ?>
        <div class="pp-field-separator" style="height: 1px; background: <?php echo isset($field['color']) ? '#'.$field['color'] : '#ddd'; ?>;"></div>
        <?php
    }

    /**
     * Returns the singleton instance of the class.
     *
     * @since 1.0.0
     *
     * @return object
     */
    public static function get_instance()
    {
        if ( ! isset( self::$instance ) && ! ( self::$instance instanceof PP_Fields ) ) {
            self::$instance = new PP_Fields();
        }

        return self::$instance;
    }

}

function PPFields()
{
    return PP_Fields::get_instance();
}

$pp_fields = PP_Fields::get_instance();
