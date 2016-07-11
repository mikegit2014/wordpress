<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_faqs' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['faqs_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>

<!-- Blog Section Begins -->
<section id="blog1" class="blog-area single section faq">
<div class="auto-container">
	<div class="row">
		<!-- .faq-content -->
		<div class="faq-content">
			<!-- article -->
			<article>
					<div class="row">
						<div class="col-lg-12">
							<div class="general-question">
							 <?php if($title):?><div class="popular-question"><h2><?php echo balanceTags($title);?></h2></div><?php endif;?>
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								  <?php while($query->have_posts()): $query->the_post();
										global $post ; 
										$faqs_meta = _WSH()->get_meta();
								  ?>
									
									<div class="panel panel-default">
									<div class="panel-heading headback" role="tab" id="headingOne">
									  <h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo get_the_id();?>" aria-expanded="true" aria-controls="collapseOne<?php echo get_the_id();?>">
										  <?php the_title();?>
										</a>
									  </h4>
									</div>
									<div id="collapseOne<?php echo get_the_id();?>" class="panel-collapse collapse <?php if($count == 1) echo "in";?>" role="tabpanel" aria-labelledby="headingOne">
									  <div class="panel-body">
										<div class="panel_body_up">
											<h2><?php echo meeton_set($faqs_meta, 'faq_subtitle');?></h2>
										</div>
										<div class="panel_body_down">
										   <?php the_content();?>
										</div>
									  </div>
									</div>
								  </div>
								  
								  <?php $count++; endwhile;?>
								  
								</div>
							</div>
						</div>
					</div>

			</article> <!-- /article -->


		</div> <!-- /.Testimonials-V1 -->
		
		
	</div>

</div>
</section><!-- Our Blog Section Ends -->

<?php endif; ?>

<?php 
	wp_reset_postdata();
   $output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>