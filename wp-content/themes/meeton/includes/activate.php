<?php

$theme = wp_get_theme();

if( $theme->Name == 'Preshop' )
{
	if( is_admin() ) add_action('admin_init', '_sh_init' );
	else add_action('init', '_sh_init' );
}

function _sh_activationfunction($oldname, $oldtheme=false) {
	add_action('admin_init', '_sh_init' );
}
add_action("after_switch_theme", "_sh_activationfunction", 10 ,  2);

if( !function_exists( 'show_message' ) && !is_admin() ) {
	function show_message($message) {
		if ( is_wp_error($message) ){
			if ( $message->get_error_data() && is_string( $message->get_error_data() ) )
				$message = $message->get_error_message() . ': ' . $message->get_error_data();
			else
				$message = $message->get_error_message();
		}
		ob_get_clean();
	}
}

function _sh_init() 
{

	if( !file_exists( ABSPATH.'wp-content/plugins/theme_support/theme_support.php' ) ) {
		if ( ! class_exists( 'WP_Upgrader' )  )
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	   
		ob_start();
		
		$upgrader = new Core_Upgrader();
		$upgrader->skin->done_header = true;
		$upgrader->skin->done_footer = true;
		
		if( !function_exists( 'request_filesystem_credentials' ) ) require_once ABSPATH . 'wp-admin/includes/file.php';
					
		$res = $upgrader->fs_connect( array( WP_CONTENT_DIR, WP_PLUGIN_DIR ) );
		if ( ! $res ) {
			//$this->skin->footer();
			return false;
		}
		
		$result = $upgrader->run(array('package'=>get_template_directory_uri().'/includes/theme_support.zip', 'destination'=>WP_PLUGIN_DIR, 'is_multi'=>true ));		
		
		$content = ob_get_contents();
		
		
		if ( ! function_exists( 'activate_plugin' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}
		activate_plugin( 'theme_support/theme_support.php' );
		
					echo '<script type="text/javascript">location.reload();</script>';
			
		
	}
	
	

}



function _sh_deactivationfunction($newname, $newtheme) {

	if( $newname != 'Preshop' )
	{
		deactivate_plugins( 'theme_support/theme_support.php' );
	}
}
add_action("switch_theme", "_sh_deactivationfunction", 10 , 2); 


if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

if ( !is_plugin_active( 'theme_support/theme_support.php' ) ) {
	activate_plugin( 'theme_support/theme_support.php' );
} 

