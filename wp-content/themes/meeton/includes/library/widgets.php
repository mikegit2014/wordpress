<?php

/// Recent Posts 
class SH_Recent_Post_With_Image extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'SH_Recent_Post_With_Image', /* Name */esc_html__('meeton Recent Posts with image','meeton'), array( 'description' => esc_html__('Show the recent posts with images', 'meeton' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
		<div class="blog/popular-post wow fadeInUp">
        
		<?php echo balanceTags($before_title.$title.$after_title); ?>
		
		<?php $query_string = 'posts_per_page='.$instance['number'];
		if( $instance['cat'] ) $query_string .= '&cat='.$instance['cat'];
		query_posts( $query_string ); 
		
		$this->posts();
		wp_reset_query();
		?>
        
        </div> 
		
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Recently Added', 'meeton');
		$number = ( $instance ) ? esc_attr($instance['number']) : 5;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'meeton'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'meeton'), 'selected'=>$cat, 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts()
	{
		
		if( have_posts() ):?>
        
           	<!-- Title -->
				
                <ul class="popular-list list-unstyled">
				<?php while( have_posts() ): the_post(); ?>
                    
                    <!-- Item -->
                    <li>
                        <!-- Post Image -->
                        <a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_post_thumbnail('meeton_size6');?></a>
                        <!-- Details -->
                        <div class="content">
                            <h3><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php echo meeton_trim(get_the_title(), 4);?></a></h3>
                            <div class="posted-date"><?php echo get_the_date('F d, Y');?></div>
                        </div>
                    </li>
                <?php endwhile; ?>
                </ul>
            
        <?php endif;
    }
}

/// Contact info 
class SH_Contact_Info extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'SH_Conatct_Info', /* Name */esc_html__('Meeton Contact Info','meeton'), array( 'description' => esc_html__('Show the Contact Information', 'meeton' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
		<div class="footer-widget contact-widget">
			<?php echo balanceTags($before_title.$title.$after_title); ?>
			<div class="text"><?php echo balanceTags($instance['text']);?></div>
			<ul class="info">
				<li><strong><?php esc_html_e('Email', 'meeton');?></strong> <a href="<?php echo esc_url(sanitize_email($instance['email']));?>"><?php echo balanceTags($instance['email']);?></a></li>
				<li><strong><?php esc_html_e('Phone', 'meeton');?></strong> <a href="#"><?php echo balanceTags($instance['phone']);?></a></li>
				<li><strong><?php esc_html_e('Fax', 'meeton');?></strong> <?php echo balanceTags($instance['fax']);?></li>
				<li><strong><?php esc_html_e('Website', 'meeton');?></strong> <a href="<?php echo esc_url($instance['webiste']);?>"><?php echo esc_url($instance['webiste']);?></a></li>
			</ul>
		</div>
		
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['text'] = $new_instance['text'];
		$instance['email'] = $new_instance['email'];
		$instance['phone'] = $new_instance['phone'];
		$instance['fax'] = $new_instance['fax'];
		$instance['webiste'] = $new_instance['webiste'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Contact Us', 'meeton');
		$text = ( $instance ) ? esc_attr($instance['text']) : '';
		$email = ( $instance ) ? esc_attr($instance['email']) : '';
		$phone = ( $instance ) ? esc_attr($instance['phone']) : '';
		$fax = ( $instance ) ? esc_attr($instance['fax']) : '';
		$webiste = ( $instance ) ? esc_attr($instance['webiste']) : '';
		
		
		?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('About Text:', 'meeton'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('fax')); ?>"><?php esc_html_e('Fax:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('fax')); ?>" name="<?php echo esc_attr($this->get_field_name('fax')); ?>" type="text" value="<?php echo esc_attr( $fax ); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('webiste')); ?>"><?php esc_html_e('Website:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('webiste')); ?>" name="<?php echo esc_attr($this->get_field_name('webiste')); ?>" type="text" value="<?php echo esc_attr( $webiste ); ?>" />
        </p>
		    
		<?php 
	}
	
}

/// Services Posts 
class SH_Services_Posts extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'SH_Services_Posts', /* Name */esc_html__('meeton Services Posts','meeton'), array( 'description' => esc_html__('Show the recent posts of services', 'meeton' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
		<!-- Services -->
		<div class="footer-widget services-widget">
			
				<?php echo balanceTags($before_title.$title.$after_title); ?>
				
				<?php 
				$args = array('post_type' => 'sh_services', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'services_category','field' => 'id','terms' => (array)$instance['cat']));
				query_posts($args); 
					
					$this->posts();
					wp_reset_query();
				?>
		</div>
		
		
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Our Services', 'meeton');
		$number = ( $instance ) ? esc_attr($instance['number']) : 5;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'meeton'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'meeton'), 'selected'=>$cat, 'taxonomy' => 'services_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts()
	{
		
		if( have_posts() ):?>
        
           	<!-- Title -->
				
                <ul class="links">
				
				<?php while( have_posts() ): the_post(); 
					$services_meta = _WSH()->get_meta();
				?>
				
					<li><a href="<?php echo esc_url(meeton_set($services_meta, 'ext_url'));?>"><?php the_title();?></a></li>
				
				<?php endwhile; ?>
				</ul>
			
        <?php endif;
    }
}

/// FAQs Posts 
class SH_Faqs_Posts extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'SH_Faqs_Posts', /* Name */esc_html__('meeton Faqs Posts','meeton'), array( 'description' => esc_html__('Show the recent posts of faqs', 'meeton' )) );
	}
 

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget); ?>
		
		<!-- Services -->
		<div class="footer-widget services-widget">
			
				<?php echo balanceTags($before_title.$title.$after_title); ?>
				
				<?php 
				$args = array('post_type' => 'sh_faqs', 'showposts'=>$instance['number']);
				if( $instance['cat'] ) $args['tax_query'] = array(array('taxonomy' => 'faqs_category','field' => 'id','terms' => (array)$instance['cat']));
				query_posts($args); 
					
					$this->posts();
					wp_reset_query();
				?>
		</div>
		
		
		<?php echo balanceTags($after_widget);
	}
 
 
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['cat'] = $new_instance['cat'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ( $instance ) ? esc_attr($instance['title']) : esc_html__('Our Support', 'meeton');
		$number = ( $instance ) ? esc_attr($instance['number']) : 5;
		$cat = ( $instance ) ? esc_attr($instance['cat']) : '';?>
			
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title: ', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('No. of Posts:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
       
    	<p>
            <label for="<?php echo esc_attr($this->get_field_id('cat')); ?>"><?php esc_html_e('Category', 'meeton'); ?></label>
            <?php wp_dropdown_categories( array('show_option_all'=>esc_html__('All Categories', 'meeton'), 'selected'=>$cat, 'taxonomy' => 'faqs_category', 'class'=>'widefat', 'name'=>$this->get_field_name('cat')) ); ?>
        </p>
            
		<?php 
	}
	
	function posts()
	{
		
		if( have_posts() ):?>
        
           	<!-- Title -->
				
                <ul class="links">
				
				<?php while( have_posts() ): the_post(); 
					$services_meta = _WSH()->get_meta();
				?>
				
					<li><a href="<?php echo esc_url(meeton_set($services_meta, 'ext_url'));?>"><?php the_title();?></a></li>
				
				<?php endwhile; ?>
				</ul>
			
        <?php endif;
    }
}

// Subscribe to our mailing list
class SH_feedburner extends WP_Widget
{
	/** constructor */
	function __construct()
	{
		parent::__construct( /* Base ID */'SH_subscribe_mail_list', /* Name */esc_html__('meeton Subscribe to Mailing List','meeton'), array( 'description' => esc_html__('create account on http://feedburner.com and allow users to subscribe', 'meeton' )) );
	}

	/** @see WP_Widget::widget */
	function widget($args, $instance)
	{
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		
		echo balanceTags($before_widget);?>
        
        <div class="footer-widget newsletter-widget">
			<?php echo balanceTags($before_title . $title . $after_title) ; ?>
			<div class="text"><?php echo balanceTags($instance['text']); ?></div>
			
			<div class="form">
				<form target="popupwindow" method="post" id="subscribe" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8" class="newsletter_form">
					<div class="form-group">
						<input type="email" name="email" value="" id="email" placeholder="<?php esc_html_e('Enter your email address', 'meeton');?>" required autocomplete="off">
						<input type="hidden" id="uri" name="uri" value="<?php echo esc_attr($instance['ID']); ?>">
						<input type="hidden" value="en_US" name="loc">
						<button type="submit" name="submit" class="hvr-bounce-to-right"><span class="fa fa-paper-plane"></span></button>
					</div>
				</form>
			</div>
			<?php $theme_option = get_option(SH_NAME.'_theme_options');?>
			<?php if($instance['show_socials']):?>
			<?php if($socials = meeton_set(meeton_set($theme_option, 'social_media'), 'social_media')):?>
			<div class="social-links wow fadeInRight" data-wow-delay="1000ms" data-wow-duration="1500ms">
			
				<?php foreach($socials as $key => $value):
					  if(meeton_set($value, 'tocopy')) continue;
				?>
					<a title="<?php echo esc_attr(meeton_set($value, 'social_title'));?>" href="<?php echo esc_url(meeton_set($value, 'social_link'));?>"><span class="fa <?php echo meeton_set($value, 'social_icon');?>"></span></a>
				<?php endforeach;?>
				
			</div>
			<?php endif;?>
			<?php endif;?>
			
		</div>
		
		<?php
		
		echo balanceTags($after_widget);
	}
	
	
	/** @see WP_Widget::update */
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['text'] = $new_instance['text'];
		$instance['ID'] = $new_instance['ID'];
		$instance['show_socials'] = $new_instance['show_socials'];
		
		return $instance;
	}

	/** @see WP_Widget::form */
	function form($instance)
	{
		$title = ($instance) ? esc_attr($instance['title']) : esc_html__('Newsletter', 'meeton');
		$text = ($instance) ? esc_attr($instance['text']) : '';
		$ID = ($instance) ? esc_attr($instance['ID']) : 'themeforest';
		$show_socials = ( $instance ) ? esc_attr($instance['show_socials']) : '';
		
		?>
        
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('text')); ?>"><?php esc_html_e('Text:', 'meeton'); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text"><?php echo esc_attr($text); ?></textarea>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('ID')); ?>"><?php esc_html_e('Feedburner ID:', 'meeton'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('ID')); ?>" name="<?php echo esc_attr($this->get_field_name('ID')); ?>" type="text" value="<?php echo esc_attr($ID); ?>" />
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('show_socials')); ?>"><?php esc_html_e('Show Social Icons:', 'meeton'); ?></label>
			<?php $selected = ( $show_socials ) ? ' checked="checked"' : ''; ?>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('show_socials')); ?>"<?php echo balanceTags($selected); ?> name="<?php echo esc_attr($this->get_field_name('show_socials')); ?>" type="checkbox" value="true" />
        </p>
		<?php 
	}
}









/*--------------------------------------------------------------------*/





