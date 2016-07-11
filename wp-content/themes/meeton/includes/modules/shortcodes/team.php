<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['team_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>

<!--Our Team-->
<section class="team-section">
	<div class="auto-container">
		
		<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
		
		<div class="row clearfix">
			
			<?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$teams_meta = _WSH()->get_meta();
			?>
            	
			<?php if($speaker_style == 2):?>
				<!--Team Member-->
				<article class="col-lg-6 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp">
					<div class="inner">
						<?php if($socials = meeton_set($teams_meta, 'sh_team_social')):?>
						<div class="social-links">
							<?php foreach($socials as $key => $value):?>
							<a class="hvr-bounce-to-top" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						<figure class="member-image">
							<?php the_post_thumbnail('meeton_size2', array('class' => 'img-responsive'));?>
						</figure>
						<div class="lower">
							<div class="member-title">
								<h5><?php the_title();?></h5>
								<span class="occupation"><?php echo meeton_set($teams_meta, 'designation')?></span>
							</div>
							<div class="desc"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
							
							<div class="text-right"><a class="read-more" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('View Profile', 'meeton');?></a></div>
						</div>
						
					</div>
				</article>
			<?php elseif($speaker_style == 3):?>
				<!--Team Member-->
				<article class="col-lg-6 col-md-4 col-sm-6 col-xs-12 team-member speakers-2-col-styled wow fadeInUp">
					<div class="inner">
						<?php if($socials = meeton_set($teams_meta, 'sh_team_social')):?>
						<div class="social-links">
							<?php foreach($socials as $key => $value):?>
							<a class="hvr-bounce-to-top" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						<figure class="member-image">
							<?php the_post_thumbnail('meeton_size2', array('class' => 'img-responsive'));?>
						</figure>
						<div class="lower">
							<div class="member-title">
								<h5><?php the_title();?></h5>
								<span class="occupation"><?php echo meeton_set($teams_meta, 'designation')?></span>
							</div>
							<div class="desc"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
							
							<div class="text-right"><a class="read-more" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('View Profile', 'meeton');?></a></div>
						</div>
						
					</div>
				</article>
			
			<?php elseif($speaker_style == 4):?>
				<!--Team Member-->
				<article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp">
					<div class="inner">
						<?php if($socials = meeton_set($teams_meta, 'sh_team_social')):?>
						<div class="social-links">
							<?php foreach($socials as $key => $value):?>
							<a class="hvr-bounce-to-top" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						<figure class="member-image">
							<?php the_post_thumbnail('meeton_size2', array('class' => 'img-responsive'));?>
						</figure>
						<div class="lower">
							<div class="member-title">
								<h5><?php the_title();?></h5>
								<span class="occupation"><?php echo meeton_set($teams_meta, 'designation')?></span>
							</div>
							<div class="desc"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
							
							<div class="text-right"><a class="read-more" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('View Profile', 'meeton');?></a></div>
						</div>
						
					</div>
				</article>
			<?php elseif($speaker_style == 5):?>
				<!--Team Member-->
				<article class="col-lg-4 col-md-4 col-sm-6 col-xs-12 team-member speakers-3-col-styled wow fadeInUp">
					<div class="inner">
						<?php if($socials = meeton_set($teams_meta, 'sh_team_social')):?>
						<div class="social-links">
							<?php foreach($socials as $key => $value):?>
							<a class="hvr-bounce-to-top" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
							<?php endforeach;?>
						</div>
						<?php endif;?>
						<figure class="member-image">
							<?php the_post_thumbnail('meeton_size2', array('class' => 'img-responsive'));?>
						</figure>
						<div class="lower">
							<div class="member-title">
								<h5><?php the_title();?></h5>
								<span class="occupation"><?php echo meeton_set($teams_meta, 'designation')?></span>
							</div>
							<div class="desc"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
							
							<div class="text-right"><a class="read-more" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('View Profile', 'meeton');?></a></div>
						</div>
						
					</div>
				</article>
	
	
			
			<?php else:?>
			
			<!--Team Member-->
			<article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member">
				<div class="inner">
					<?php if($socials = meeton_set($teams_meta, 'sh_team_social')):?>
					<div class="social-links">
						<?php foreach($socials as $key => $value):?>
						<a class="hvr-bounce-to-top" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
						<?php endforeach;?>
					</div>
					<?php endif;?>
					<figure class="member-image">
						<?php the_post_thumbnail('meeton_size2', array('class' => 'img-responsive'));?>
					</figure>
					<div class="lower">
						<div class="member-title">
							<h5><?php the_title();?></h5>
							<span class="occupation"><?php echo meeton_set($teams_meta, 'designation')?></span>
						</div>
						<div class="desc"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
						
						<div class="text-right"><a class="read-more" href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('View Profile', 'meeton');?></a></div>
					</div>
					
				</div>
			</article>
			
			<?php endif;?>
			
			<?php endwhile;?>
			
		</div>
		
	</div>
</section>

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>