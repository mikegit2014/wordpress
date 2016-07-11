<?php  
   $count = 1;
   $query_args = array('post_type' => 'sh_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   

<!--Features Section / Style Two -->
<section class="features-section style-two">
    <div class="auto-container">
    
        <div class="sec-title wow fadeInup" data-wow-delay="200ms" data-wow-duration="1000ms"><h2><?php echo balanceTags($title);?></h2></div>
        <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms"><p><?php echo balanceTags($text);?> </p></div>
        
        <div class="row clearfix">
        	
            <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$services_meta = _WSH()->get_meta();
					if($count > 3) $count = 1;
			?>
            
            <article class="col-md-4 col-sm-6 col-xs-12 post wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner">
                    <div class="post-title">
                        <div class="icon"><img src="<?php echo esc_url(meeton_set($services_meta, 'small_image'));?>" alt="" title=""></div>
                        <h3><?php the_title();?></h3>
                    </div>
                    <div class="text"><p><?php echo meeton_trim(get_the_content(), $text_limit);?></p></div>
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