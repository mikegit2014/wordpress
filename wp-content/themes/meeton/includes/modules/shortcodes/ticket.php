<?php  
ob_start() ;
?>

<div class="counter-section">
	<div class="row clearfix">
		<div class="col-md-5 col-sm-12 col-xs-12">
			<div class="countdown" id="countdown-timer">
				
			</div>
		</div>
		<div class="col-md-4 col-sm-12 col-xs-12 counter-text">
			<h3><?php echo balanceTags($title);?></h3>
			<p><?php echo balanceTags($subtitle);?></p>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12 text-right">
			<a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span> <?php echo balanceTags($btn_text);?></a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri().'/js/jquery.countdown.js');?>"></script>
<script type="text/javascript">
jQuery(document).on('ready', function($) {
	if(jQuery('#countdown-timer').length){                     
		jQuery('#countdown-timer').countdown('<?php echo esc_js($date);?>', function(event) {
			var $this = jQuery(this).html(event.strftime('' + '<div class="counter-column"><span class="count">%d</span><span class="colon">:</span><br>DAYS</div> ' + '<div class="counter-column"><span class="count">%H</span><span class="colon">:</span><br>HOURS</div>  ' + '<div class="counter-column"><span class="count">%M</span><span class="colon">:</span><br>MINUTES</div>  ' + '<div class="counter-column"><span class="count">%S</span><br>SECOND</div>'));
		});
	}
});	
</script>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   