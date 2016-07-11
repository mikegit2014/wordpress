<?php 
wp_enqueue_script('jquery-mixitup');
global $wp_query;
$paged = get_query_var('paged');
$args = array('post_type' => 'sh_gallery', 'showposts'=>$num, 'orderby'=>$sort, 'order'=>$order, 'paged'=>$paged);
if($exclude_cats) $args['tax_query'] = array(array('taxonomy' => 'gallery_category','field' => 'id','terms' => array($exclude_cats),'operator' => 'NOT IN',));
$query = new WP_Query($args);
//query_posts($args);
//wp_enqueue_script( array( 'jquery-prettyphoto', 'cubeportfolio', 'main-script','jquery-isotope','portfolio' ) );

$t = $GLOBALS['_sh_base'];
$paged = get_query_var('paged');

$data_filtration = '';
$data_posts = '';
?>


<?php if( $query->have_posts() ):
	
ob_start();?>

	<?php $count = 0; 
	$fliteration = array();?>
	<?php while( $query->have_posts() ): $query->the_post();
		global  $post;
		$meta = get_post_meta( get_the_id(), '_sh_portfolio_meta', true );//meeton_printr($meta);
		$post_terms = get_the_terms( get_the_id(), 'gallery_category');// meeton_printr($post_terms); exit();
		foreach( (array)$post_terms as $pos_term ) $fliteration[$pos_term->term_id] = $pos_term;
		$temp_category = get_the_term_list(get_the_id(), 'gallery_category', '', ', ');
	?>
		<?php $post_terms = wp_get_post_terms( get_the_id(), 'gallery_category'); 
		$term_slug = '';
		if( $post_terms ) foreach( $post_terms as $p_term ) $term_slug .= $p_term->slug.' ';?>		
           
		   <?php 
			$post_thumbnail_id = get_post_thumbnail_id($post->ID);
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		   ?>     
		   
		   <div class="col-lg-3 col-sm-6 col-xs-12 mix <?php echo esc_attr($term_slug); ?>">
				<div class="img-wrap">
					<?php the_post_thumbnail('meeton_size7', array('class' => 'img-responsive'));?>
					
					<?php 
						$post_thumbnail_id = get_post_thumbnail_id($post->ID);
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
					?>
					
					<a class="fancybox" href="<?php echo esc_url($post_thumbnail_url);?>"><div class="content-wrap hvr-rectangle-out">
						<div class="border">
							<div class="content">
								<h4><?php the_title();?></h4>
								<?php /* for categories without anchor*/ $term_list = wp_get_post_terms(get_the_id(), 'gallery_category', array("fields" => "names")); ?>
								<span><?php echo implode( ', ', (array)$term_list );?></span>
							</div>
						</div>
					</div></a>
				</div>
			</div>
		   
<?php endwhile;?>
  
<?php wp_reset_postdata();
$data_posts = ob_get_contents();
ob_end_clean();

endif; 

ob_start();?>	 

<?php $terms = get_terms(array('gallery_category')); ?>

<section id="project-version-two">
	<div class="container-fluid">
		<?php if( $terms ): ?>
		<div class="row">
			<div class="col-lg-12">
				<ul class="gallery-filter">
					<li data-filter="all">
						<span><?php esc_html_e('All', 'meeton');?></span>
					</li>
					<?php foreach( $fliteration as $t ): ?>
					<li data-filter=".<?php echo meeton_set( $t, 'slug' ); ?>">
						<span><?php echo meeton_set( $t, 'name'); ?></span>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
		<?php endif;?>
		<div class="row nor4al-gallery" id="image-gallery-mix">
			
			<?php echo balanceTags($data_posts); ?>
			
		</div>
	</div>
</section>

<?php $output = ob_get_contents();
ob_end_clean(); 
return $output;?>