<?php  
   $count = 1;
   $column_count = 1;
   $query_args = array('post_type' => 'sh_schedule' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['schedule_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>
<?php while($query->have_posts()): $query->the_post();
	  global $post ; 
	  $schedule_meta = _WSH()->get_meta();
?>

<!--Schedule Section-->
<section class="schedule-section <?php if($style == 2) echo "style-two";?>">
	<div class="auto-container">
		
		<div class="row clearfix">
		
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
				<div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><p><?php echo balanceTags($contents);?></p></div>
			</div>
			
			<div class="col-md-4 col-sm-12 col-xs-12 text-right wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
				<a href="<?php echo esc_url(meeton_set($schedule_meta, 'schedule_pdf'));?>" class="download-btn theme-btn"><span class="fa fa-file-pdf-o"></span> <?php esc_html_e('DOWNLOAD .PDF schedule', 'meeton');?></a>
			</div>
			
		</div>
		
		<!--Schedule Box-->
		<div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
			
			<?php if($columns = meeton_set($schedule_meta, 'sh_columns')):?>
			<!--Tab Buttons-->
			<ul class="tab-buttons clearfix">
				<?php foreach($columns as $key => $value):?>
					<li class="tab-btn <?php if($count == 1) echo "active";?>" data-id="#<?php echo meeton_set($value, 'column_title');?>"><span class="day"><?php echo meeton_set($value, 'column_title');?></span><span class="date"><?php echo meeton_set($value, 'column_date');?></span><span class="curve"></span></li>
				<?php $count++; endforeach;?>
			</ul>
			<?php endif;?>
			
			<!--Tabs Box-->
			<div class="tabs-box">
				
				<?php if($days = meeton_set($schedule_meta, 'sh_columns')):?>
				<?php foreach($days as $key => $value):
					$hour_count = 1;
   				?>
				<!--Tab / Current / Monday-->
				<div class="tab <?php if($column_count == 1) echo "current";?>" id="<?php echo meeton_set($value, 'column_title');?>">
					
					<?php if($hours = meeton_set($value, 'sorting_events')): //meeton_printr($hours);?>
					<?php foreach($hours as $key => $hour):
						  $hour_meta = get_post_meta($hour, '_sh_sh_events_settings', true); //meeton_printr($hour_meta);
						  $content_post = get_post($hour);
						  $content = $content_post->post_content;
						  $content = apply_filters('the_content', $content);
						  $content = str_replace(']]>', ']]&gt;', $content);
						  
						  $speakers = meeton_set($hour_meta, 'sorting_speakers');
						  
					?>
					<div class="hour-box <?php if($hour_count == 1) echo "active-box";?>">
						<div class="hour"><?php echo meeton_set($hour_meta, 'start_time');?></div>
						<div class="img-circle circle"><span></span></div>
						<div class="toggle-btn <?php if($hour_count == 1) echo "active";?>"><h3><?php echo get_the_title($hour);?></h3></div>
						<div class="content-box <?php if($hour_count == 1) echo "collapsed";?>">
							<div class="content"><p><?php echo meeton_trim($content, $text_limit);?></p></div>
							<br>
							<div class="row professional clearfix">
							<?php if($speakers):
								foreach($speakers as $key => $speaker):
								$speaker_meta = get_post_meta($speaker, '_sh_sh_team_settings', true); //meeton_printr($hour_meta);
							?>
								<div class="col-md-5 col-sm-5 col-xs-12 info">
									<figure class="img-circle image">
										<?php echo get_the_post_thumbnail($speaker, 'meeton_size6', array('class' => 'img-responsive img-circle'));?>
									</figure>
									<h5 class="prof-title"><?php echo get_the_title($speaker);?></h5>
									<h6 class="prof-occup"><?php echo meeton_set($speaker_meta, 'designation');?></h6>
								</div>
								<?php endforeach; endif;?>
								
								<div class="col-md-7 col-sm-7 col-xs-12 text-right">
									
									<a href="<?php echo esc_url(get_permalink($hour));?>" class="theme-btn btn-style-one hvr-bounce-to-right dull"><?php echo meeton_set($hour_meta, 'start_time');?><?php if(meeton_set($hour_meta, 'end_time')) echo ' - '; echo meeton_set($hour_meta, 'end_time');?></a>
									<a href="<?php echo esc_url(get_permalink($hour));?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span><?php esc_html_e('DETAILS ABOUT THE EVENT', 'meeton');?></a>
								</div>
							</div>
						</div>
					</div>
					<?php $hour_count++; endforeach;?>
					<?php endif;?>
					
				</div>
				<?php $column_count++; endforeach;?>
				
				<?php endif;?>
			
			</div>
			<!--Tabs Box End-->
			
		</div>
		<!--Schedule Box End-->        
	</div>
</section>

<?php endwhile;?>

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>