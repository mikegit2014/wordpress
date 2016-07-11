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

<!-- Blog Section Begins -->
<section id="blog" class="blog-area single section">
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

				<!-- Post -->
				<div <?php post_class('post-item'); ?>>
					<!-- Post Title -->
					<h2 class="wow fadeInLeft"><?php the_title();?></h2>
					<div class="post wow fadeInUp">
						
						<!-- Image -->
						<?php the_post_thumbnail('meeton_size3', array('class' => 'img-responsive'));?>
						
						<div class="post-content wow fadeInUp">	
							<!-- Meta -->
							<div class="posted-date"><?php echo get_the_date('M d, Y');?>   /   <span><?php esc_html_e('by', 'meeton');?></span> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author();?></a>   /   <a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><?php comments_number();?></a></div>
							<!-- Text -->
							<?php the_content();?>
							<div class="tags"><?php the_tags();?></div>
							<div class="share-box">
                                  <ul class="psocial shares clearfix">
                                      <li><?php esc_html_e('Share This Post:', 'meeton');?></li>
                                      <li class="facebook"><span class='st_facebook_large hovicon effect-1 sub-a'></span></li>
                                      <li class="twitter"><span class="st_twitter_large hovicon effect-1 sub-a"></span></li>
                                      <li class="google"><span class="st_googleplus_large hovicon effect-1 sub-a"></span></li>
                                      <li class="pinterest"><span class='st_pinterest_large hovicon effect-1 sub-a'></span></li>
                                      
                                  </ul>
                                  <script type="text/javascript">var switchTo5x=true;</script>
                                  <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
                                  <script type="text/javascript">stLight.options({publisher: "e5f231e9-4404-49b7-bc55-0e8351a047cc", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                                  <br/>
                            </div>
						</div>
					</div>
				</div><!-- End Post -->	
				
				<!-- Author Section -->
				<div class="author wow fadeInUp">
					<!-- Image -->
					<?php echo get_avatar('', 260 ); ?>
						<div class="author-comment">
							<h5><?php the_author(); ?></h5>
							<p><?php the_author_meta( 'description', get_the_author_meta('ID') ); ?></p>
						</div>						
				<div class="clear"></div>							
				</div><!-- Author Section Ends-->

				<!-- comment area -->
            	<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'meeton'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
				<?php comments_template(); ?><!-- end comments -->
			
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
</section><!-- Our Blog Section Ends -->

<?php get_footer(); ?>