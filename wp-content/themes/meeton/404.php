<?php
$options = _WSH()->option();

get_header(); 
?>

<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php esc_html_e('Page Not Found', 'meeton');?></h1>
	</div>
</section>
<!--  Your Blog Content Start From Here -->
<section id="blog_area" class="blog_area">
    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- blog post area -->
            <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_post_area">
            	<div class="message-welcome text-center">
                    <h1><?php esc_html_e('Not Found ', 'meeton');?></h1>
                    <p class="lead"><?php esc_html_e('Look like something went wrong! The page you were looking for is not here. ', 'meeton');?></p>
                    <a href="<?php echo esc_url(home_url('/'));?>" title="" class="btn btn-primary btn-lg"><?php esc_html_e('BACK TOP HOME', 'meeton');?></a>
                </div><!-- end message -->
			</div>
            <!-- blog post area -->
		
        </div>
    </div>
    <!-- container -->
</section>
<!--  Your Blog Content End Here -->  		
<?php get_footer(); ?>