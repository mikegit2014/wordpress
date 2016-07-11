<?php $options = _WSH()->option();
Global $wp_query;
$icon_href = (meeton_set( $options, 'site_favicon' )) ? meeton_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.png';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<head>
	 <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <!-- Favcon -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
		<link rel="shortcut icon" type="image/png" href="<?php echo esc_url($icon_href);?>">
	<?php endif;?>
	<!--[if lt IE 9]>
          <script src="<?php echo esc_url(get_template_directory_uri().'/js/html5shiv.js');?>"></script>
          <script src="<?php echo esc_url(get_template_directory_uri().'/js/respond.min.js');?>"></script>
        <![endif]-->
	
	<?php wp_head(); ?>
</head>
<body <?php if( meeton_set($options, 'boxed') ) body_class('boxed'); else body_class(); ?>>

<div class="page-wrapper">

<?php if(meeton_set($options, 'preloader')):?> 	
    
	<!-- Preloader -->
    <div class="preloader"></div>

<?php endif;?> 	

    <!-- Main Header -->
    <header class="main-header">
    	<div class="auto-container clearfix">
        	<!--Logo-->
            <div class="logo">
				
				<?php if(meeton_set($options, 'logo_image')):?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url(meeton_set($options, 'logo_image'));?>" alt=""></a>
				<?php else:?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri().'/images/logo.jpg');?>" alt=""></a>
				<?php endif;?>
				
			</div>
            
            <!--Main Menu-->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">                                                                                              
                    <ul class="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
										'container_class'=>'navbar-collapse collapse navbar-right',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'items_wrap' => '%3$s', 
										'container'=>false, 
									) ); ?>
                    
                    </ul>
                </div>
            </nav>
            <!--Main Menu End-->
            
        </div>
    </header>
    <!--End Main Header -->