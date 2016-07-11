<?php $options = _WSH()->option();
get_header();

$settings  = meeton_set(meeton_set(get_post_meta(get_the_ID(), 'sh_page_meta', true) , 'sh_page_options') , 0);

$meta = _WSH()->get_meta('_sh_layout_settings');
$meta1 = _WSH()->get_meta('_sh_header_settings');
if(meeton_set($_GET, 'layout_style')) $layout = meeton_set($_GET, 'layout_style'); else
$layout = meeton_set( $meta, 'layout', 'full' );
$sidebar = meeton_set( $meta, 'sidebar', 'blog-sidebar' );

$classes = ( !$layout || $layout == 'full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12';
if($layout == 'both') $classes = ' col-lg-6 col-md-6 col-sm-6 col-xs-12 ';  

$title = meeton_set($meta1, 'page_title');
$bg = meeton_set($meta1, 'page_bg');
?>

<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php if($title) echo balanceTags($title); else echo get_the_title();?></h1>
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
                	<div class="post-content">
					<!-- blog post item -->
                    	<?php the_content(); ?>
        			</div>    
				<!-- comment area -->
            	<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'meeton'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
				<?php comments_template(); ?><!-- end comments -->
				
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