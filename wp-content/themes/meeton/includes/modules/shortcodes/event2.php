<?php  
ob_start() ;?>

<article class="content-side wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url('<?php echo wp_get_attachment_url($img, 'full')?>');">
    <div class="texture-layer" style="background-image:url('<?php echo wp_get_attachment_url($img2, 'full')?>');"></div>
    <div class="sec-title"><h2><?php echo balanceTags($title);?></h2></div>
    
    <div class="text">
        <p><?php echo balanceTags($text);?></p>
    </div>
    
</article>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   