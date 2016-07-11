<?php ob_start(); ?>

<div class="client-logos">
<div class="row clearfix">
	<?php echo do_shortcode( $contents );?>
</div>
</div>

<?php return ob_get_clean(); ?>