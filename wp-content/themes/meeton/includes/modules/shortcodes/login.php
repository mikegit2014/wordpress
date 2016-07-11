<?php ob_start(); ?>

<?php if( !is_user_logged_in() ): ?>
<div class="form-container">
<h4><?php echo balanceTags($title);?></h4>
<form action="<?php echo esc_url(home_url('/')); ?>/wp-login.php" method="post" id="loginform" class="form form-register">
	<div class="form-group clearfix">
	
		<div class="col-md-6 col-sm-12 col-sx-12">
			<input class="email-addr" required type="email" name="log" value="" placeholder="<?php esc_html_e('Enter your Email address', 'meeton'); ?>">
		</div>
		
		<div class="col-md-6 col-sm-12 col-sx-12">
			<input class="password" type="password" name="pwd" value="" placeholder="<?php esc_html_e('Enter your Password', 'meeton');?>" required>
		</div>
		
	</div>
	
	<button type="submit" name="wp-submit"><span class="fa fa-angle-right"></span></button>
</form>
</div>
<?php endif; ?>

<?php $output = ob_get_contents();

ob_end_clean();

return $output;