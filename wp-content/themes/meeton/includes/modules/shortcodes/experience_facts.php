<?php ob_start(); ?>

<!--Our Experience-->

<div class="sec-title"><h2><?php echo balanceTags($title);?></h2></div>
<div class="our-experience">
	<?php echo do_shortcode( $contents );?>	
</div>

<?php return ob_get_clean(); ?>