<?php global $wp_query; 
$options = _WSH()->option();

get_header(); 
if( $wp_query->is_posts_page ) {
	$meta = _WSH()->get_meta('_sh_layout_settings', get_queried_object()->ID);
	$meta1 = _WSH()->get_meta('_sh_header_settings', get_queried_object()->ID);
	if(meeton_set($_GET, 'layout_style')) $layout = meeton_set($_GET, 'layout_style'); else
	$layout = meeton_set( $meta, 'layout', 'right' );
	$sidebar = meeton_set( $meta, 'sidebar', 'default-sidebar' );
	$view = meeton_set( $meta, 'view', 'grid' );
	$title = meeton_set($meta1, 'page_title');
	$bg = meeton_set($meta1, 'page_bg');

} else {

	$settings  = _WSH()->option(); 
	if(meeton_set($_GET, 'layout_style')) $layout = meeton_set($_GET, 'layout_style'); else
	$layout = meeton_set( $settings, 'archive_page_layout', 'right' );
	$sidebar = meeton_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
	$view = meeton_set( $settings, 'archive_page_view', 'list' );
	$title = meeton_set($settings, 'archive_title');
	$bg = meeton_set($settings, 'archive_bg');

}

$layout = meeton_set( $_GET, 'layout' ) ? meeton_set( $_GET, 'layout' ) : $layout;
$view = meeton_set( $_GET, 'view' ) ? meeton_set( $_GET, 'view' ) : $view;
$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
_WSH()->page_settings = array('layout'=>'right', 'view'=> $view, 'sidebar'=>$sidebar);
$classes = ( !$layout || $layout == 'full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-8 col-md-8 col-sm-7 col-xs-12 ';
if($layout == 'both') $classes = ' col-lg-6 col-md-6 col-sm-6 col-xs-12 ';  
?>

<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
	</div>
</section>

<!-- Blog -->
<section id="blog" class="blog-area section">
<div class="auto-container">
	<div class="row">
	<!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
			
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
            <div class="side-bar col-lg-4 col-md-4 col-sm-5 col-xs-12">        
            	<div class="sidebar">
                	<?php dynamic_sidebar( $sidebar ); ?>
                </div>
            </div>
			<?php } ?>

		    <?php endif; ?>
		<!-- Blog Left Side Begins -->
		<!-- sidebar area -->
			<?php if( $layout == 'both' ): ?>
			
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
            <div class="side-bar col-lg-3 col-md-3 col-sm-5 col-xs-12">        
            	<div class="sidebar">
                	<?php dynamic_sidebar( $sidebar ); ?>
                </div>
            </div>
			<?php } ?>

		    <?php endif; ?>
		<div class="<?php echo esc_attr($classes);?>">
			
			<?php while( have_posts() ): the_post();?>
                	<!-- blog post item -->
                    <!-- Post -->
					<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                		<?php get_template_part( 'blog' ); ?>
                	<!-- blog post item -->
                    </div><!-- End Post -->
            <?php endwhile;?> 

			<!-- Pagination -->
			<div class="post-nav wow fadeInRight" data-animation="fadeInUp" data-animation-delay="300">
					
					<?php meeton_the_pagination(); ?>
			
			</div>	<!-- Pagination Ends-->
		
		</div><!-- Blog Left Side Ends -->
		
		
		<!-- sidebar area -->
			<?php if( $layout == 'both' ): ?>
			
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
            <div class="side-bar col-lg-3 col-md-3 col-sm-5 col-xs-12">        
            	<div class="sidebar">
                	<?php dynamic_sidebar( $sidebar ); ?>
                </div>
            </div>
			<?php } ?>

		    <?php endif; ?>
			
			<!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
			
			<?php if ( is_active_sidebar( $sidebar ) ) { ?>
            <div class="side-bar col-lg-4 col-md-4 col-sm-5 col-xs-12">       
            	<div class="sidebar">
                	<?php dynamic_sidebar( $sidebar ); ?>
                </div>
            </div>
			<?php }?>

		    <?php endif; ?>
		    <!-- sidebar area -->
		
	</div>

</div>
</section>
<!-- Our Blog Section Ends -->

<?php get_footer(); ?>