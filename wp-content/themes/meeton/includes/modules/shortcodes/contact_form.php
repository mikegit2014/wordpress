<?php
   ob_start();
   ?>

<!--Contact Form Area-->
<div class="row clearfix">
<div class="col-sm-12 col-xs-12 contact-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
		<div id="message"></div>
		<!--Contact Form-->
		<form id="contact_form" method="post" action="<?php echo admin_url( 'admin-ajax.php?action=_sh_ajax_callback&amp;subaction=contact_form_submit'); ?>">
			<div class="row clearfix">
				
				<div class="col-md-5 col-sm-6 col-xs-12">
					
					<div class="form-group">
						<label class="form-label"><?php esc_html_e('Name', 'meeton');?></label>
						<input type="text" name="contact_name" id="contact_name" value="" placeholder="<?php esc_html_e('Enter Your Name', 'meeton');?>">
					</div>
					
					<div class="form-group">
						<label class="form-label"><?php esc_html_e('Email', 'meeton');?></label>
						<input type="email" name="contact_email" id="contact_email" value="" placeholder="<?php esc_html_e('Enter Your Email Address', 'meeton');?>">
					</div>
					
					<div class="clearfix"></div>
					
					<div class="form-group">
						<label class="form-label"><?php esc_html_e('Subject', 'meeton');?></label>
						<input type="text" name="contact_subject" id="contact_subject" value="" placeholder="<?php esc_html_e('Enter a Subject', 'meeton');?>">
					</div>
					
				</div>
				
				<div class="col-md-7 col-sm-6 col-xs-12">
					
					<div class="form-group">
						<label class="form-label"><?php esc_html_e('Message', 'meeton');?></label>
						<textarea name="contact_message" id="contact_message" placeholder="<?php esc_html_e('Type Your Message Here', 'meeton');?>"></textarea>
					</div>
					
				</div>
				
			</div>
			
			<div class="form-group text-right">
				<button type="submit" name="submit-form" class="theme-btn btn-style-one hvr-bounce-to-right"><span class="fa fa-envelope"></span> <?php esc_html_e('Send Message', 'meeton');?></button>
			</div>
			
		</form>
		
	</div>
</div>

<?php return ob_get_clean();?>		