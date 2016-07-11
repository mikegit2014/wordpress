<?php  
ob_start() ;?>

<div class="faq-content">
<?php if($title):?>
<div class="row">
<div class="col-lg-12 faq-title">
	<h2><?php echo balanceTags($title);?></h2>
</div>
</div>
<?php endif;?>
<?php if($text):?>
<div class="row">
<div class="col-lg-12">
	<div class="faq-text">
		<p><?php echo balanceTags($text);?></p>
	</div>
</div>
</div>
<?php endif;?>
<div class="row">
<div class="col-lg-12">
	<div class="faq-search">
		<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
			<input type="text" name="s" value="" placeholder="<?php esc_html_e('Enter Search keywords', 'meeton');?>">
			<input type="button" name="" value="<?php esc_html_e('search', 'meeton');?>">
		</form>
	</div>
</div>
</div>
</div>
<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   