<?php  
ob_start() ;?>

<!--Column-->
<article class="column" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full')?>');">
	<div class="link"><a href="<?php echo esc_url($btn_link);?>" class="default-btn hvr-bounce-to-left <?php echo esc_attr($btn_style);?>"><?php echo balanceTags($btn_text);?></a></div>
	<h4><a href="<?php echo esc_url($title_link);?>"><?php echo balanceTags($title);?><span class="arrow">&rarr;</span></a></h4>
	<div class="text"><p><?php echo balanceTags($text);?></p></div>
</article>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   