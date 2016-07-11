<!-- Post -->
<div class="post-item wow" data-animation="fadeInUp" data-animation-delay="300">
	<!-- Post Title -->
	<h2 class="wow fadeInUp"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h2>
	<div class="post wow fadeInUp">
		<!-- Image -->
		<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
			<?php the_post_thumbnail('meeton_size3', array("class" => "img-responsive"));?>
		</a>
		<div class="post-content">	
			<!-- Text -->
			<p><?php echo get_the_excerpt();?></p>
			<!-- Meta -->
			<div class="posted-date"><?php echo get_the_date('M d, Y');?>   /   <span><?php esc_html_e('by', 'meeton');?></span> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author();?></a>   /   <a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments');?>"><?php comments_number();?></a></div>
		</div>
	</div>
</div><!-- End Post -->