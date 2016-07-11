<?php $options = _WSH()->option();
Global $wp_query;
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
    <title><?php wp_title(''); ?></title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favcon -->
	<?php echo ( meeton_set( $options, 'site_favicon' ) ) ? '<link rel="shortcut icon" type="image/png" href="'.esc_url(meeton_set( $options, 'site_favicon' )).'">': '';?>
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri().'/images/favicon.ico'); ?>" type="image/x-icon"/>
	<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri().'/images/favicon.ico'); ?>" type="image/x-icon"/>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri().'/js/html5shiv.js');?>"></script>
        <script src="<?php echo esc_url(get_template_directory_uri().'/js/respond.min.js');?>"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target="#main_menu2" itemscope itemtype="http://schema.org/WebPage" <?php if( meeton_set($options, 'boxed') ) body_class('boxed'); else body_class(); ?>>
<!-- Your Body Content Start From Here -->
<div class="body_innerwrap">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--  Your Header Content Start From Here -->
        <header id="header" class="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="logo">
							<!-- logo -->
							<?php echo meeton_wp_get_site_logo(); ?>
						</div>
                        <!-- menu -->
						<nav class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu">
								<span class="sr-only"><?php esc_html_e('Toggle navigation', 'meeton');?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="main_menu">
							  <?php do_action( 'meeton_header_menus' ); ?>
                            </div><!-- /.navbar-collapse -->
						</nav>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </header>
        <!--  Your Header Content End Here -->