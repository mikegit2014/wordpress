<?php

/*

Plugin Name: Theme Support

Plugin URI: http://themeforest.net/user/template_path

Description: This plugin is compatible with meeton wordpress theme. 

Author: Muhibbur

Author URI: http://themeforest.net/user/template_path

Version: 1.0

Text Domain: SH_NAME

*/

if( !defined( 'SH_TH_ROOT' ) ) define('SH_TH_ROOT', plugin_dir_path( __FILE__ ));

if( !defined( 'SH_TH_URL' ) ) define( 'SH_TH_URL', plugins_url( '', __FILE__ ) );

if( !defined( 'SH_NAME' ) ) define( 'SH_NAME', 'wp_meeton' );

include_once( 'includes/loader.php' );