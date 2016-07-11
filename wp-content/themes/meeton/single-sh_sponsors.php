<?php $options = _WSH()->option();
get_header(); 
$settings  = meeton_set(meeton_set(get_post_meta(get_the_ID(), 'sh_page_meta', true) , 'sh_page_options') , 0);
$meta = _WSH()->get_meta('_sh_layout_settings');
$meta1 = _WSH()->get_meta('_sh_header_settings');
$meta2 = _WSH()->get_meta();

_WSH()->page_settings = $meta;
if(meeton_set($_GET, 'layout_style')) $layout = meeton_set($_GET, 'layout_style'); else
$layout = meeton_set( $meta, 'layout', 'full' );
if( !$layout || $layout == 'full' || meeton_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
$sidebar = meeton_set( $meta, 'sidebar', 'blog-sidebar' );
$classes = ( !$layout || $layout == 'full' || meeton_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12';
if($layout == 'both') $classes = ' col-lg-6 col-md-6 col-sm-6 col-xs-12 ';  
/** Update the post views counter */
_WSH()->post_views( true );

$title = meeton_set($meta1, 'page_title');
$bg = meeton_set($meta1, 'page_bg');
?>


<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
	</div>
</section>

<!-- Blog -->
<section id="blog" class="blog-area section sponsors">
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

			<!-- Blog Left Side Begins -->
			<div class="<?php echo esc_attr($classes);?>">
				<?php while( have_posts() ): the_post(); 
					$post_meta = _WSH()->get_meta();
				?>
				<br><br>
				<div class="single-sponsors content">
					<div class="row">
						<div class="col-lg-3 sponsors-image">
							<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));?>
						</div>
						<div class="col-lg-6">
							<h2><?php the_title();?></h2>
							<?php the_content();?>
						</div>
						<div class="col-lg-3">
							<?php if(meeton_set($post_meta, 'type')):?>
							<p>
								<label><?php esc_html_e('Type:', 'meeton');?></label> <br>
								<?php echo meeton_set($post_meta, 'type');?>
							</p>
							<?php endif;?>
							<?php if(meeton_set($post_meta, 'website')):?>
							<p>
								<label><?php esc_html_e('Website:', 'meeton');?></label> <br>
								<a href="<?php echo esc_url(meeton_set($post_meta, 'website'));?>"><?php echo meeton_set($post_meta, 'website');?></a>
							</p>
							<?php endif;?>
							<?php if(meeton_set($post_meta, 'twitter_link')):?>
							<p>
								<label><?php esc_html_e('Twitter:', 'meeton');?></label> <br>
								<a href="<?php echo esc_url(meeton_set($post_meta, 'twitter_link'));?>"><?php esc_html_e('@twitter', 'meeton');?></a>
							</p>
							<?php endif;?>
							<?php if(meeton_set($post_meta, 'facebook_link')):?>
							<p>
								<label><?php esc_html_e('Facebook:', 'meeton');?></label> <br>
								<a href="<?php echo esc_url(meeton_set($post_meta, 'facebook_link'));?>"><?php esc_html_e('@Facebook', 'meeton');?></a>
							</p>
							<?php endif;?>
						</div>
					</div>
				</div>
				<?php endwhile;?>                
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