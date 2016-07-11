<?php  
ob_start() ;?>

<!--Contact Info-->
<div class="contact-info">
	<h3><?php echo balanceTags($title);?></h3>
	<div class="text"><?php echo balanceTags($text);?></div>
	<ul class="info">
		<?php if($email):?><li><strong><?php esc_html_e('Email', 'meeton');?></strong> <a href="<?php echo esc_url(sanatize_email($email));?>"><?php echo balanceTags($email);?></a></li><?php endif;?>
		<?php if($phone):?><li><strong><?php esc_html_e('Phone', 'meeton');?></strong> <a href="#"><?php echo balanceTags($phone);?></a></li><?php endif;?>
		<?php if($fax):?><li><strong><?php esc_html_e('Fax', 'meeton');?></strong> <?php echo balanceTags($fax);?></li><?php endif;?>
		<?php if($website):?><li><strong><?php esc_html_e('Website', 'meeton');?></strong> <a href="<?php echo esc_url($website);?>"><?php echo balanceTags($website);?></a></li><?php endif;?>
	</ul>
</div>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   