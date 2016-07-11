<?php  
   $count = 0;
   $query_args = array('post_type' => 'sh_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   
   ob_start() ;?>
   
<?php if($query->have_posts()):  ?>   
<!--Two Column-->
<section class="two-column">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Image Side-->
            <div class="col-md-6 col-sm-6 col-xs-12 pull-left image-side wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms" style="background-image:url('<?php echo wp_get_attachment_url( $image, 'full' ); ?>');">
            
            </div>
            
            <!--Content Side-->
            <div class="col-md-6 col-sm-6 col-xs-12 pull-right content-side wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <h2><?php echo balanceTags($title);?></h2>
                
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$services_meta = _WSH()->get_meta();
				?>
                
                <article class="feature">
                    <figure class="icon"><img src="<?php echo esc_url(meeton_set($services_meta, 'small_image'));?>" alt="" title=""></figure>
                    <h3><?php the_title();?></h3>
                    <p><?php echo meeton_trim(get_the_excerpt(), $text_limit);?></p>
                </article>
                
                <?php endwhile;?>
                
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