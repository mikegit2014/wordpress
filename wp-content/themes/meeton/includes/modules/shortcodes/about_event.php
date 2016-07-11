<?php  
ob_start() ;?>
<?php if($style == 2):?>
<article class="col-md-8 col-sm-7 col-xs-12 text-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
	<div class="inner">
		<h2><?php echo balanceTags($title);?></h2>
		<div class="text">
			<?php echo balanceTags($contents);?>
		</div>
		<br>
		<div class="text-right"><a href="<?php echo esc_url($btn_link);?>" class="read-more"><?php esc_html_e('READ MORE', 'meeton');?></a></div>
	</div>
</article>

<article class="col-md-4 col-sm-5 col-xs-12 listing-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
	<div class="inner">
		<h3><?php echo balanceTags($side_title);?></h3>
		<div class="check-listing">
			<?php if($participents = explode("\n", $participent_str)):?>
			<ul>
				<?php foreach($participents as $participent):?>
					<li><?php echo balanceTags($participent);?></li>
				<?php endforeach;?>
			</ul>
			<?php endif;?>
		</div>
	</div>
</article>

<?php else:?>
<article class="col-md-9 col-sm-7 col-xs-12 text-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
	<div class="inner">
		<h2><?php echo balanceTags($title);?></h2>
		<div class="text">
			<?php echo balanceTags($contents);?>
		</div>
		<br>
		<div class="text-right"><a href="<?php echo esc_url($btn_link);?>" class="read-more"><?php esc_html_e('READ MORE', 'meeton');?></a></div>
	</div>
</article>

<article class="col-md-3 col-sm-5 col-xs-12 listing-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
	<div class="inner">
		<h3><?php echo balanceTags($side_title);?></h3>
		<div class="check-listing">
			<?php if($participents = explode("\n", $participent_str)):?>
			<ul>
				<?php foreach($participents as $participent):?>
					<li><?php echo balanceTags($participent);?></li>
				<?php endforeach;?>
			</ul>
			<?php endif;?>
		</div>
	</div>
</article>
<?php endif;?>
<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>   