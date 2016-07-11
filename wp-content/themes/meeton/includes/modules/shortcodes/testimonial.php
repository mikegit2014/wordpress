<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

<!--Default Section-->
<section class="default-section with-testimonials">
	<div class="auto-container">
		<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
		
		<div class="row clearfix">
			
			<!--Testimonials-->
			<div class="col-xs-12 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
				
				<div class="testimonials-area">
					<div class="slider">
				
						<?php while($query->have_posts()): $query->the_post();
                            	global $post ; 
                            	$testimonials_meta = _WSH()->get_meta();
                        ?>
					
						<article class="slide-item">
							<div class="testimonial-content">
								<span class="curve"></span>
								<p><?php echo meeton_trim(get_the_content(), $text_limit);?></p>
							</div>
							<div class="testimonial-author">
								<figure class="image img-circle">
									<?php the_post_thumbnail('meeton_size5', array('class' => 'img-circle'));?>
								</figure>
								<h5 class="author-title"><?php the_title();?></h5>
								<p class="occupation"><?php echo balanceTags(meeton_set($testimonials_meta, 'designation'));?></p>
								<p class="company"><?php echo balanceTags(meeton_set($testimonials_meta, 'company'));?></p>
							</div>
						</article>
						
						<?php endwhile;?>
						
					</div>
				</div>
				
			</div>
			
			<!--Client Logos-->
			
		</div>
	</div>
</section>

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>