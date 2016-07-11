<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<div itemscope itemtype="http://schema.org/Comment" id="comments" class="post-comments comment-area clearfix">
	<?php if ( have_comments() ) : ?>
		<div class="title-head wow fadeInUp"><?php comments_number();?></div>
        <p><?php esc_html_e('You are not signed in. ', 'meeton');?><a href="<?php echo esc_url(home_url('/')); ?>/wp-login.php" title="sign in"><?php esc_html_e('Sign in', 'meeton');?></a><?php esc_html_e(' to post comments.', 'meeton');?></p>
		
        <!-- comments -->
		<div class="comment-list">
				<?php
					wp_list_comments( array(
						'style'       => 'ul',
						'short_ping'  => true,
						'avatar_size' => 74,
						'callback'=>'meeton_list_comments'
					) );
				?>
		</div>
		
		<?php
			
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'meeton' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'meeton' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'meeton' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>
		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'meeton' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>
		<!-- Add Your Comments -->
        <div class="comments-form wow fadeInUp">
            <!-- Heading -->
           <?php if ( comments_open()) : ?>
		    
			<div class="title-head"><?php esc_html_e('add your comment', 'meeton');?></div>
		   
		   <?php endif; ?>	
			
			<?php meeton_comment_form(); ?>
        </div>    
</div><!-- #comments -->
