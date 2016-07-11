<?php
	$count = 1;
   $query_args = array('post_type' => 'sh_events' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['events_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>

 <!--Latest Events-->
    <section class="latest-posts" style="background-image:url('<?php echo wp_get_attachment_url($img1, 'full')?>');">
    	<div class="texture-layer" style="background-image:url('<?php echo wp_get_attachment_url($img2, 'full')?>');"></div>
        
    	<div class="auto-container">
        	<div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
            
            <div class="row clearfix">
            	
                <!--Post-->
				
				<?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$events_meta = _WSH()->get_meta();
				?>
				
                <article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 post">
                	<div class="inner">
                    	<div class="upper">
                        	<header class="post-title"><h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h3></header>
                            <div class="desc">
                            	<div class="text"><?php echo meeton_trim(get_the_content(), $text_limit);?></div>
                                <a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="more hvr-bounce-to-right"><span class="fa fa-play"></span></a>
                                <br>
                                <div class="info"><?php echo get_the_date('d F, y');?> / <?php echo meeton_set($events_meta, 'num_participants');?></div>
                            </div>
                        </div>
                        <figure class="post-image">
                        	<?php the_post_thumbnail('meeton_size1', array('class' => 'img-responsive'));?>
							<div class="overlay"><div class="overlay-content"><p><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-style-one hvr-bounce-to-right"><?php esc_html_e('READ DETAILS', 'meeton');?></a></p></div></div>
                        </figure>
                    </div>
                </article>
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