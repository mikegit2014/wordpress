<?php
add_action('after_setup_theme', 'meeton_theme_setup');
function meeton_theme_setup()
{
	global $wp_version;
	if(!defined('SH_VERSION')) define('SH_VERSION', '1.0');
	if( !defined( 'SH_NAME' ) ) define( 'SH_NAME', 'wp_meeton' );
	if( !defined( 'SH_ROOT' ) ) define('SH_ROOT', get_template_directory().'/');
	if( !defined( 'SH_URL' ) ) define('SH_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	load_theme_textdomain('meeton', get_template_directory() . '/languages');
	add_editor_style();
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support('menus'); //Add menu support
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( 'woocommerce' );
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'meeton'),
				'footer_menu' => esc_html__('Footer Menu', 'meeton'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'meeton_size1', 270, 264, true ); //'270x264'
	add_image_size( 'meeton_size2', 270, 216, true ); //'270x216'
	add_image_size( 'meeton_size3', 850, 350, true ); //'850x350'
	add_image_size( 'meeton_size4', 154, 30, true ); //'154x30'
	add_image_size( 'meeton_size5', 94, 94, true ); //'94x94'
	add_image_size( 'meeton_size6', 82, 84, true ); //'82x84'
	add_image_size( 'meeton_size7', 370, 220, true );  //'370x220'
	
	
	
	
}
function meeton_widget_init()
{
	global $wp_registered_sidebars;
	$theme_options = _WSH()->option();
	if( class_exists( 'SH_Recent_Post_With_Image' ) )register_widget( 'SH_Recent_Post_With_Image' );
	if( class_exists( 'SH_Contact_Info' ) )register_widget( 'SH_Contact_Info' );
	if( class_exists( 'SH_Services_Posts' ) )register_widget( 'SH_Services_Posts' );
	if( class_exists( 'SH_Faqs_Posts' ) )register_widget( 'SH_Faqs_Posts' );
	if( class_exists( 'SH_feedburner' ) )register_widget( 'SH_feedburner' );
	
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'meeton' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'meeton' ),
	  'class'=>'',
	  'before_widget'=>'<aside id="%1$s" class="side-bar widget sidebar_widget wow fadeInUp anim-5-all %2$s">',
	  'after_widget'=>'</aside>',
	  'before_title' => '<h2 class="border-line-left">',
	  'after_title' => '</h2>'
	));
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'meeton' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'meeton' ),
	  'class'=>'',
	  'before_widget'=>'<article id="%1$s"  class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bottom_area_colum_1 wow fadeInUp %2$s">',
	  'after_widget'=>'</article>',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'meeton' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'meeton' ),
	  'class'=>'',
	  'before_widget'=>'<aside id="%1$s" class="side-bar widget sidebar_widget wow fadeInUp anim-5-all %2$s">',
	  'after_widget'=>'</aside>',
	  'before_title' => '<h2 class="border-line-left">',
	  'after_title' => '</h2>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = meeton_set(meeton_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(meeton_set($sidebar , 'topcopy')) continue ;
		
		$name = meeton_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = meeton_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  $slug ,
			'before_widget' => '<div id="%1$s" class="widget sidebar_widget wow fadeInUp %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="widget_title">',
			'after_title' => '</h2>',
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'meeton_widget_init' );
// Update items in cart via AJAX
add_filter('add_to_cart_fragments', 'meeton_woo_add_to_cart_ajax');
function meeton_woo_add_to_cart_ajax( $fragments ) {
    
	global $woocommerce;
    ob_start();
	
	include get_template_directory() . '/includes/modules/wc_cart.php';
	
	$fragments['li.wc-header-cart'] = ob_get_clean();
	
    return $fragments;
}
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
function meeton_animate_it( $atts, $contents = null )
{
	return include get_template_directory() . '/includes/modules/shortcodes/animate_it.php';
}
function meeton_load_head_scripts() {
    if ( !is_admin() ) {
    wp_register_script( 'map_api', 'http://maps.google.com/maps/api/js?sensor=true', '', '', false);
	wp_register_script( 'jquery-googlemap', get_template_directory_uri().'/js/googlemaps.js', '', '', false);
    wp_enqueue_script( 'map_api' );
	wp_enqueue_script( 'jquery-googlemap' );
    }
    }
    add_action( 'wp_enqueue_scripts', 'meeton_load_head_scripts' );
/*-------------------------------------------------------------*/
function meeton_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $droid = _x( 'on', 'Droid font: on or off', 'meeton' );
	$montserrat = _x( 'on', 'Montserrat font: on or off', 'meeton' );
	$lato = _x( 'on', 'Lato font: on or off', 'meeton' );
 
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $open_sans = _x( 'on', 'Open Sans font: on or off', 'meeton' );
 
    if ( 'off' !== $droid || 'off' !== $open_sans || 'off' !== $montserrat || 'off' !== $lato ) {
        $font_families = array();
 
        if ( 'off' !== $droid ) {
            $font_families[] = 'Droid Sans:400,700';
        }
		
		if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:400,700';
        }
		
		if ( 'off' !== $lato ) {
            $font_families[] = 'Lato:400,300italic,300,400italic';
        }
 
        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Open Sans:400,400italic,600,300italic,300';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}
function meeton_theme_slug_scripts_styles() {
    wp_enqueue_style( 'theme-slug-fonts', meeton_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'meeton_theme_slug_scripts_styles' );
//on comments of page by default
function meeton_default_comments_on( $data ) {
    if( $data['post_type'] == 'page' ) {
        $data['comment_status'] = 'open';
    }

    return $data;
}
add_filter( 'wp_insert_post_data', 'meeton_default_comments_on' );

//---custome-editor-style
function meeton_my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'meeton_my_theme_add_editor_styles' );
//-----admin css
add_action('admin_head', 'meeton_admin_custom_style');

function meeton_admin_custom_style() {
  echo '<style>
    #setting-error-tgmpa {
      display:block !important;
    } 
  </style>';
}