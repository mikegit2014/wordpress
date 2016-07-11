<?php ob_start(); ?>

<!--Two Column-->
<section class="two-column with-fact-counter">
	<div class="auto-container">
		<div class="row clearfix">
			
			<!--Image Side-->
			<div class="col-md-6 col-sm-6 col-xs-12 pull-left image-side wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" <?php if($bg_img):?>style="background-image:url('<?php echo wp_get_attachment_url($bg_img, 'full');?>');"<?php endif;?>>
				<div class="fact-counter overlayed clearfix wow fadeIn" data-wow-delay="0ms" data-wow-duration="0ms">
					
					<?php echo do_shortcode( $contents );?>
					
				</div>
			</div>
			
			<!--Content Side-->
			<div class="col-md-6 col-sm-6 col-xs-12 pull-right content-side wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
				<div class="sec-title"><h2><?php echo balanceTags($title);?></h2></div>
				<div class="sec-text"><p><?php echo balanceTags($subtitle);?></p></div>
				
				<div class="check-listing listing">
					<ul>
						<?php $fearures = explode("\n",$feature_str);?>
						<?php foreach($fearures as $feature):?>
							<li><?php echo balanceTags($feature);?></li>
						<?php endforeach;?>
					</ul>
					
					<a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span><?php echo balanceTags($btn_text);?></a>
				</div>
				
			</div>
			
		</div>
	</div>
</section>
<?php return ob_get_clean(); ?>