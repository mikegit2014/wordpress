<?php ob_start(); ?>
<div class="col-md-6 col-sm-6 col-xs-6 logo-column"><a href="<?php echo esc_url($img_link);?>"><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt="" title=""></a></div>
<?php return ob_get_clean(); 