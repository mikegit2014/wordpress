<?php  
ob_start() ;?>

<!--Two Column Fluid -->
<section class="two-column-fluid">
	<div class="clearfix">
		<article class="content-side wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" <?php if($left_img):?>style="background-image:url('<?php echo wp_get_attachment_url($left_img, 'full');?>');"<?php endif;?>>
			<div class="texture-layer" <?php if($left_img2):?>style="background-image:url('<?php echo wp_get_attachment_url($left_img2, 'full');?>');"<?php endif;?>></div>
			<div class="sec-title"><h2><?php echo balanceTags($left_title);?></h2></div>
			<div class="text">
				<p><?php echo balanceTags($left_text);?></p>
			</div>
		</article>
		<article class="image-side wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms" <?php if($right_img):?>style="background-image:url('<?php echo wp_get_attachment_url($right_img, 'full');?>');"<?php endif;?>>
			<a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><?php echo balanceTags($btn_text);?></a>
		</article>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   