<?php ob_start(); ?>

<!--Price Plans-->
<section class="price-plans">
	<div class="auto-container">
		
		<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
		<div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><p><?php echo balanceTags($subtitle);?></p></div>
		
		
		<div class="row clearfix">
			
			<?php echo do_shortcode( $contents );?>
			
		</div>
		
	</div>
</section>

<?php return ob_get_clean(); ?>