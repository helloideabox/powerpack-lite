<?php
/**
 * Plugin Name: PowerPack Lite for Beaver Builder
 * Plugin URI: https://wpbeaveraddons.com
 * Description: A set of custom, creative, unique modules for Beaver Builder to speed up your web design and development process.
 * Version: 1.0.3
 * Author: Team IdeaBox - Beaver Addons
 * Author URI: https://wpbeaveraddons.com
 * Copyright: (c) 2016 IdeaBox Creations
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bb-powerpack
 * Domain Path: /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class BB_PowerPack_Lite {

	/**
     * Holds the class object.
     *
     * @since 1.0.0
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
		$this->define_constants();

		/* Hooks */
		$this->init_hooks();

		/* Classes */
		require_once 'classes/class-admin-settings.php';

		/* Includes */
		require_once 'includes/helper-functions.php';
	}

	/**
	 * Define PowerPack constants.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	private function define_constants()
	{
		define( 'BB_POWERPACK_LITE', true );
		define( 'BB_POWERPACK_PRO', 'https://wpbeaveraddons.com/upgrade/?utm_medium=bb-powerpack-lite&utm_source=module-settings&utm_campaign=module-settings' );
		define( 'BB_POWERPACK_VER', '1.0.3' );
		define( 'BB_POWERPACK_DIR', plugin_dir_path( __FILE__ ) );
		define( 'BB_POWERPACK_URL', plugins_url( '/', __FILE__ ) );
		define( 'BB_POWERPACK_PATH', plugin_basename( __FILE__ ) );
		define( 'BB_POWERPACK_CAT', __('PowerPack Modules', 'bb-powerpack') );
	}

	/**
	 * Initializes actions and filters.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function init_hooks()
	{
		add_action( 'init', array( $this, 'load_modules' ) );
		add_action( 'plugins_loaded', array( $this, 'loader' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts' ), 100 );
		add_action( 'admin_notices', array( $this, 'admin_notices' ) );
		add_action( 'network_admin_notices', array( $this, 'admin_notices' ) );
		add_filter( 'body_class', array( $this, 'body_class' ) );
	}

	/**
	 * Load language files.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function load_textdomain()
	{
    	load_plugin_textdomain( 'bb-powerpack', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	}

	/**
	 * Include modules.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function load_modules()
	{
		if ( class_exists( 'FLBuilder' ) ) {

			/* Modules */
			require_once 'modules/pp-heading/pp-heading.php';
			require_once 'modules/pp-dual-button/pp-dual-button.php';
			require_once 'modules/pp-spacer/pp-spacer.php';
			require_once 'modules/pp-iconlist/pp-iconlist.php';
			require_once 'modules/pp-infobox/pp-infobox.php';
			require_once 'modules/pp-infolist/pp-infolist.php';
			require_once 'modules/pp-fancy-heading/pp-fancy-heading.php';
			require_once 'modules/pp-business-hours/pp-business-hours.php';

			/* Form Modules */
			if ( class_exists( 'WPCF7_ContactForm' ) ) {
				require_once 'modules/pp-contact-form-7/pp-contact-form-7.php';
			}
		}
	}

	/**
	 * Include row and column setting extendor.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function loader()
	{
		if ( !is_admin() && class_exists( 'FLBuilder' ) ) {

			// Fields
			require_once 'classes/class-module-fields.php';

			// Panel functions
			require_once 'includes/panel-functions.php';

			$extensions = BB_PowerPack_Admin_Settings::get_enabled_extensions();

			// Extend row settings
			if ( isset( $extensions['row'] ) && count( $extensions['row'] ) > 0 ) {
		        require_once 'includes/row.php';
		    }

			// Extend column settings
			if ( isset( $extensions['col'] ) && count( $extensions['col'] ) > 0 ) {
		        require_once 'includes/column.php';
		    }
		}

		$this->load_textdomain();
	}

	/**
	 * Custom scripts.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function load_scripts()
	{
		wp_enqueue_style( 'animate', BB_POWERPACK_URL . 'assets/css/animate.min.css', array(), rand() );
		if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {
			wp_enqueue_style( 'pp-fields-style', BB_POWERPACK_URL . 'assets/css/fields.css', array(), rand() );
			wp_enqueue_script( 'pp-fields-script', BB_POWERPACK_URL . 'assets/js/fields.js', array( 'jquery' ), rand(), true );
			wp_enqueue_style( 'pp-panel-style', BB_POWERPACK_URL . 'assets/css/panel.css', array(), rand() );
	        wp_enqueue_script( 'pp-panel-script', BB_POWERPACK_URL . 'assets/js/panel.js', array( 'jquery' ), rand(), true );
		}
	}

	/**
	 * Admin notices.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function admin_notices()
	{
		if ( ! is_admin() ) {
			return;
		}
		else if ( ! is_user_logged_in() ) {
			return;
		}
		else if ( ! current_user_can( 'update_core' ) ) {
			return;
		}

		if ( !is_plugin_active( 'bb-plugin/fl-builder.php' ) ) {
			if ( !is_plugin_active( 'beaver-builder-lite-version/fl-builder.php' ) ) {
				echo sprintf('<div class="notice notice-error"><p>%s</p></div>', __('Please install and activate <a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">Beaver Builder Lite</a> or <a href="https://www.wpbeaverbuilder.com/pricing/" target="_blank">Beaver Builder Pro / Agency</a> to use PowerPack add-on.', 'bb-powerpack'));
			}
		}
		if ( class_exists( 'BB_PowerPack' ) ) {
			echo sprintf('<div class="notice notice-error"><p>%s</p></div>', __('You already have PowerPack Pro version. PowerPack Lite cannot be used with the Pro version.', 'bb-powerpack'));
		}
		/* Check transient, if available display notice */
    	if ( get_transient( 'bb-powerpack-lite-admin-notices' ) ) {
			if ( ! class_exists( 'BB_PowerPack' ) && ( is_plugin_active( 'bb-plugin/fl-builder.php' ) || is_plugin_active( 'beaver-builder-lite-version/fl-builder.php' ) ) ) {
				echo sprintf('<div class="notice notice-info is-dismissible"><p>%s</p></div>', __('Thank you for choosing PowerPack Lite for Beaver Builder. Checkout <a href="https://wpbeaveraddons.com/?utm_medium=powerpack-lite&utm_source=plugin-page&utm_campaign=activation-message" target="_blank">Pro version</a> for more features.', 'bb-powerpack'));
				delete_transient( 'bb-powerpack-lite-admin-notices' );
			}
		}
	}

	/**
	 * Add CSS class to body.
	 *
	 * @since 1.0.0
	 *
	 * @return array $classes Array of body CSS classes.
	 */
	public function body_class( $classes )
	{
		if ( class_exists( 'FLBuilder' ) && class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {
			$classes[] = 'bb-powerpack';
			if ( pp_panel_search() == 1 ) {
				$classes[] = 'bb-powerpack-search-enabled';
			}
		}

		return $classes;
	}

	/**
	 * Returns the singleton instance of the class.
	 *
	 * @since 1.0.0
	 *
	 * @return object The BB_PowerPack_Lite object.
	 */
	public static function get_instance()
	{
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof BB_PowerPack_Lite ) ) {
			self::$instance = new BB_PowerPack_Lite();
		}

		return self::$instance;
	}

}

// Load the PowerPack class.
$bb_powerpack_lite = BB_PowerPack_Lite::get_instance();
