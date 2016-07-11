<?php  
ob_start() ;?>

<article class="image-side wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full')?>');">
    
    <a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><?php echo balanceTags($btn_text);?></a>
    
</article>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   