<?php  
ob_start() ;?>

<!--Intro Section-->
<section class="intro-section" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full');?>');">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-md-8 col-sm-8 col-xs-12 text-content">
				<h2><?php echo balanceTags($title);?></h2>
				<div class="text"><?php echo balanceTags($text);?></div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 text-right">
				<a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span><?php echo balanceTags($btn_text);?></a>
			</div>
		</div>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   