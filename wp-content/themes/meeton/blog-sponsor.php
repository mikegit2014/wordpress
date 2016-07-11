<div class="single-sponsors">
	<div class="row">
		<div class="col-lg-4 sponsors-image">
			<?php the_post_thumbnail('meeton_size4', array('class' => 'img-responsive'));?>
		</div>
		<div class="col-lg-8">
			<h2><?php the_title();?></h2>
			<p><?php echo get_the_excerpt();?></p>
			<a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php esc_html_e('Read More', 'meeton');?></a>
		</div>
	</div>
</div>                    