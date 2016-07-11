<?php /* Template Name: VC Page */
get_header() ;

$meta = _WSH()->get_meta('_sh_header_settings');

$title = meeton_set($meta, 'page_title');
$bg = meeton_set($meta, 'page_bg');

?>
<?php if(meeton_set($meta, 'breadcrumb')):?>

<!-- Page Banner -->
<section class="page-banner" <?php if($bg):?>style="background-image:url('<?php echo esc_url($bg);?>');"<?php endif;?>>
	<div class="auto-container">
		<h1><?php if($title) echo balanceTags($title); else wp_title('');?></h1>
	</div>
</section>

<?php endif;?>

<?php while( have_posts() ): the_post(); ?>
     <?php the_content(); ?>
<?php endwhile;  ?>

<?php get_footer() ; ?>