<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_events' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['events_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>

<!--Feaature Listing-->
<section class="feature-listing">
	<div class="auto-container">
		<div class="row clearfix">
			
			<!--Image Side-->
			<div class="col-md-5 col-sm-5 col-xs-12 pull-left image-side">
				<figure><img src="<?php echo esc_url(wp_get_attachment_url($img, 'full'));?>" alt="image" title="image"></figure>
			</div>
			
			<!--Content Side-->
			<div class="col-md-7 col-sm-7 col-xs-12 pull-right content-side">
				<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
				<div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><p><?php echo balanceTags($subtitle);?></p></div>
				
				<div class="check-listing listing">
					<ul>
						<?php while($query->have_posts()): $query->the_post();
							global $post ; 
							$events_meta = _WSH()->get_meta();
						?>
						
						<li><?php the_title();?></li>
						
						<?php endwhile;?>
						
					</ul>
					<br>
					<a href="<?php echo esc_url($btn_link);?>" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-play"></span><?php echo balanceTags($btn_text);?></a>
				</div>
				
			</div>
			
		</div>
	</div>
</section>

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>