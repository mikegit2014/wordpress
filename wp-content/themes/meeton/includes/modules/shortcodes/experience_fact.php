<?php ob_start(); ?>

<div class="exp-block">
	<div class="exp-header">
		<h3><?php echo balanceTags($title);?></h3>
	</div>
	<div class="exp-meter" data-value="<?php echo esc_attr($num);?>%"><div class="exp-count"><?php echo balanceTags($num);?>%</div></div>
</div>

<?php return ob_get_clean(); 