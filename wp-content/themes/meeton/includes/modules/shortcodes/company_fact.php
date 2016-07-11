<?php ob_start(); ?>

<div class="col-md-4 col-sm-6 col-xs-12 counter-column">
	<div class="count-outer"><div class="count-text" data-speed="1500" data-stop="<?php echo esc_attr($num_stop);?>">0</div></div>
	<div class="counter-title"><?php echo balanceTags($word);?></div>
</div>

<?php return ob_get_clean(); 