<?php $options = get_option(SH_NAME.'_theme_options');?>
<?php if(meeton_set($options, 'whole_footer')):?>
<!--Main Footer-->
<footer class="main-footer">
	<?php if(meeton_set($options, 'upper_footer')):?>
	
	<!--Footer Upper-->
	<div class="footer-upper">
		<div class="auto-container">
			<div class="row clearfix">
			
			<?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
			
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			
			<?php } ?>	
			
			</div>
		</div>
	</div>
	
	<?php endif;?>
	<?php if(meeton_set($options, 'lower_footer')):?>
	<!--Footer Lower-->
	<div class="footer-lower">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!--Footer Logo-->
				<div class="col-md-4 col-sm-4 col-xs-12 footer-logo">
				
					<?php if(meeton_set($options, 'footer_logo_image')):?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url(meeton_set($options, 'footer_logo_image'));?>" alt=""></a>
					<?php else:?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png');?>" alt=""></a>
					<?php endif;?>
				
				</div>
				
				<!--Footer Nav-->
				<div class="col-md-8 col-sm-8 col-xs-12 footer-nav">
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container_id' => 'navbar-collapse-1',
										'container_class'=>'navbar-collapse collapse navbar-right',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'items_wrap' => '%3$s', 
										'container'=>false, 
									) ); ?>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	<?php endif;?>
	
	<!--Footer Bottom-->
	<div class="footer-bottom">
		<div class="auto-container">
			<div class="row clearfix">
				<div class="col-md-12 col-sm-12 col-xs-12 footer-logo"><?php echo meeton_set($options, 'copy_right');?></div>
			</div>
		</div>
	</div>
	
</footer>

<?php endif;?>    

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"></div>

<?php wp_footer(); ?>

</body>

</html>