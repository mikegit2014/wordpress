<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

<!-- Blog -->
<section id="blog" class="blog-area section testimonials_v1">
<div class="auto-container">
	<div class="row">
		<!-- .Testimonial-content -->
		<div class="testimonials_v1_content">
			<!-- article -->
			<article>
					<?php if($title):?>
					<div class="row">
						<div class="col-lg-12 testimonial_title">
							<h2><?php echo balanceTags($title);?></h2>
						</div>
					</div>
					<?php endif;?>
					
					<?php while($query->have_posts()): $query->the_post();
                            	global $post ; 
                            	$testimonials_meta = _WSH()->get_meta();
                    ?>
					
					<div class="row">
						<div class="col-lg-12">
							<div class="single_client">
								<div class="row">
									<div class="col-lg-3 single_client_left">
										<?php the_post_thumbnail('124x163', array('class' => 'img-responsive'));?>
										<h4><?php the_title();?></h4>
									</div>
									<div class="col-lg-9 single_client_right">
										<p> <i class="fa fa-quote-left"></i>   <?php echo meeton_trim(get_the_content(), $text_limit);?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php endwhile;?>
					
			</article> <!-- /article -->

		</div> <!-- /.Testimonials-V1 -->
		
	</div>

</div>
</section>
<!-- Our Blog Section Ends -->

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>