<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/1/2015
 * Time: 10:39 AM
 */
/*================================================
GET TEMPLATE
================================================== */
if (!function_exists('g5plus_get_template')) {
	function g5plus_get_template($template, $name = null){
		get_template_part( 'templates/' . $template, $name);
	}
}

/*================================================
GET POST META
================================================== */
if ( !function_exists( 'g5plus_get_post_meta' ) ) {
	function g5plus_get_post_meta( $id, $key = "", $single = false ) {

		$GLOBALS['g5plus_post_meta'] = isset( $GLOBALS['g5plus_post_meta'] ) ? $GLOBALS['g5plus_post_meta'] : array();
		if ( ! isset( $id ) ) {
			return;
		}
		if ( ! is_array( $id ) ) {
			if ( ! isset( $GLOBALS['g5plus_post_meta'][ $id ] ) ) {
				//$GLOBALS['g5plus_post_meta'][ $id ] = array();
				$GLOBALS['g5plus_post_meta'][ $id ] = get_post_meta( $id );
			}
			if ( ! empty( $key ) && isset( $GLOBALS['g5plus_post_meta'][ $id ][ $key ] ) && ! empty( $GLOBALS['g5plus_post_meta'][ $id ][ $key ] ) ) {
				if ( $single ) {
					return maybe_unserialize( $GLOBALS['g5plus_post_meta'][ $id ][ $key ][0] );
				} else {
					return array_map( 'maybe_unserialize', $GLOBALS['g5plus_post_meta'][ $id ][ $key ] );
				}
			}

			if ( $single ) {
				return '';
			} else {
				return array();
			}

		}

		return get_post_meta( $id, $key, $single );
	}
}

/* GET USER MENU LIST
    ================================================== */
if ( !function_exists( 'g5plus_get_menu_list' ) ){
	function g5plus_get_menu_list() {

		if ( !is_admin() ) {
			return array();
		}

		$user_menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );

		$menu_list = array();

		foreach ( $user_menus as $menu ) {
			$menu_list[ $menu->term_id ] = $menu->name;
		}

		return $menu_list;
	}
}

/* CHECK IS BLOG PAGE
    ================================================== */
if ( !function_exists( 'g5plus_is_blog_page' ) ){
	function g5plus_is_blog_page() {
		global $post;

		//Post type must be 'post'.
		$post_type = get_post_type($post);

		return (
			( is_home() || is_archive() || is_single() )
			&& ($post_type == 'post')
		) ? true : false ;
	}
}

/* ATTRIBUTE VALUE
    ================================================== */
if ( !function_exists( 'g5plus_the_attr_value' ) ){
	function g5plus_the_attr_value($attr) {
		foreach ($attr as $key) {
			echo esc_attr($key) . ' ';
		}
	}
}

/*================================================
MAINTENANCE MODE
================================================== */
if (!function_exists('g5plus_maintenance_mode')) {
    function g5plus_maintenance_mode() {

        if (current_user_can( 'edit_themes' ) || is_user_logged_in()) {
            return;
        }

        global $g5plus_options;
        $enable_maintenance = isset($g5plus_options['enable_maintenance']) ? $g5plus_options['enable_maintenance'] : 0;

        switch ($enable_maintenance) {
            case 1 :
                wp_die( '<p style="text-align:center">' . __( 'We are currently in maintenance mode, please check back shortly.', 'g5plus-framework' ) . '</p>', get_bloginfo( 'name' ) );
                break;
            case 2:
                $maintenance_mode_page = $g5plus_options['maintenance_mode_page'];
                if (empty($maintenance_mode_page)) {
                    wp_die( '<p style="text-align:center">' . __( 'We are currently in maintenance mode, please check back shortly.', 'g5plus-framework' ) . '</p>', get_bloginfo( 'name' ) );
                } else {
                    $maintenance_mode_page_url = get_permalink($maintenance_mode_page);
                    $current_page_url = g5plus_current_page_url();
                    if ($maintenance_mode_page_url != $current_page_url) {
                        wp_redirect($maintenance_mode_page_url);
                    }
                }
                break;
        }
    }
    add_action( 'get_header', 'g5plus_maintenance_mode' );
}

/*================================================
GET CURRENT PAGE URL
================================================== */
if (!function_exists('g5plus_current_page_url')) {
    function g5plus_current_page_url() {
        $pageURL = 'http';
        if ( isset( $_SERVER["HTTPS"] ) ) {
            if ( $_SERVER["HTTPS"] == "on" ) {
                $pageURL .= "s";
            }
        }
        $pageURL .= "://";
        if ( $_SERVER["SERVER_PORT"] != "80" ) {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }

        return $pageURL;
    }
}

