<?php  
   $count = 0;
   $query_args = array('post_type' => 'sh_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

 <!-- #Testimonial-V2 -->
<section id="blog-post" class="testimonials_v2">
<div class="container">
	<div class="row">
		<!-- .Testimonial-content -->
		<div class="col-lg-12 testimonials_v2_content">
			<h2><?php echo balanceTags($title);?></h2>
			<!-- article -->
			<article>
			   <div class="row">
			   
			   <?php while($query->have_posts()): $query->the_post();
                            	global $post ; 
                            	$testimonials_meta = _WSH()->get_meta();
                ?>
				<?php if(($count%2) == 0 && $count != 0):?>
					</div><div class="row">
				<?php endif; ?>
				
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-12">
							<div class="single_client">
								<div class="row">
									<div class="col-lg-3 single_client_left">
										<?php the_post_thumbnail('124x163', array('class' => 'img-responsive'));?>
										<h4><?php the_title();?></h4>
									</div>
									<div class="col-lg-9 single_client_right">
										<p> <i class="fa fa-quote-left"></i>   
										<?php echo meeton_trim(get_the_content(), $text_limit);?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $count++; endwhile;?>
				
			   </div>
			   
			</article> <!-- /article -->

		</div> <!-- /.Testimonial-V2 -->

	</div>
</div>
</section> <!-- /#Testimonial-V2 -->

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>