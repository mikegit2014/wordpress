<?php
/**
 *
 *	Plugin Name: Darna Framework
 *	Plugin URI: http://g5plus.net
 *	Description: The Darna Framework plugin.
 *	Version: 1.0
 *	Author: g5plus
 *	Author URI: http://g5plus.net
 *
 *	Text Domain: g5plus-framework
 *	Domain Path: /languages/
 *
 *	@package G5Plus Framework
 *	@category Core
 *	@author g5plus
 *
 **/
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$current_theme = get_template();

if (($current_theme == 'darna') && !class_exists('g5plusFrameWork')) {
	class g5plusFrameWork {

		protected $loader;

		protected $prefix;

		protected $version;


		public function __construct() {
			$this->version = '1.0.0';
			$this->prefix = 'darna-framework';
			$this->define_constants();
			$this->includes();
			$this->define_hook();
		}


		private function  define_constants() {
			//if( ! defined( 'PLUGIN_G5PLUS_FRAMEWORK_DIR' ) ) {define( 'PLUGIN_G5PLUS_FRAMEWORK_DIR', plugin_dir_path( dirname( __FILE__ ) ));}
			if( ! defined( 'PLUGIN_G5PLUS_FRAMEWORK_DIR' ) ) {define( 'PLUGIN_G5PLUS_FRAMEWORK_DIR', plugin_dir_path( __FILE__ ));}
			if( ! defined( 'PLUGIN_G5PLUS_FRAMEWORK_NAME' ) ) {define( 'PLUGIN_G5PLUS_FRAMEWORK_NAME', 'darna-framework');}
            if( ! defined( 'G5PLUS_FRAMEWORK_SHORTCODE_CATEGORY' ) ) {define( 'G5PLUS_FRAMEWORK_SHORTCODE_CATEGORY', __( 'Darna Shortcodes', 'g5plus-framework' ));}
		}

		private function includes() {
			require_once PLUGIN_G5PLUS_FRAMEWORK_DIR . 'includes/class-g5plus-framework-loader.php';
            if(!class_exists('WPAlchemy_MetaBox')) {
                include_once ( PLUGIN_G5PLUS_FRAMEWORK_DIR . 'includes/MetaBox.php');
            }
			require_once PLUGIN_G5PLUS_FRAMEWORK_DIR . 'admin/class-g5plus-framework-admin.php';
			$this->loader = new g5plusFramework_Loader();

			/*short-codes*/
			require_once PLUGIN_G5PLUS_FRAMEWORK_DIR . 'includes/shortcodes/shortcodes.php';

			/* widgets */
			require_once PLUGIN_G5PLUS_FRAMEWORK_DIR . 'includes/widgets/widgets.php';
		}

		public function load_plugin_textdomain() {

			load_plugin_textdomain(
				'g5plus-framework',
				false,
                basename( dirname( __FILE__ ) ) . '/languages/'
			);
		}



		private function define_hook() {
			/*set locale*/
			$this->loader->add_action( 'plugins_loaded', $this, 'load_plugin_textdomain' );

			/*admin*/
			$plugin_admin = new g5plusFramework_Admin( $this->get_prefix(), $this->get_version());

			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
			$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
		}

		public function get_version() {
			return $this->version;
		}

		public function get_prefix() {
			return $this->prefix;
		}

		public function run() {
			$this->loader->run();
		}
	}

	if( !function_exists( 'init_g5plus_framework' ) ){
		function init_g5plus_framework() {
			$g5plusFramework = new g5plusFrameWork();
			$g5plusFramework->run();
		}
		init_g5plus_framework();
	}
}
