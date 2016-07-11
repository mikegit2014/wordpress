<?php
$theme_option = get_option(SH_NAME.'_theme_options');  //printr($options);

$service_slug = sh_set($theme_option , 'service_permalink' , 'services') ;

$schedule_slug = sh_set($theme_option , 'schedule_permalink' , 'schedule') ;

$event_slug = sh_set($theme_option , 'event_permalink' , 'events') ;

$team_slug = sh_set($theme_option , 'team_permalink' , 'teams') ;

$sponsor_slug = sh_set($theme_option , 'sponsor_permalink' , 'sponsors') ;

$testimonial_slug = sh_set($theme_option , 'testimonial_permalink' , 'testimonials') ;

$faqs_slug = sh_set($theme_option , 'faqs_permalink' , 'faqs') ;

$ticket_slug = sh_set($theme_option , 'ticket_permalink' , 'tickets') ;

$gallery_slug = sh_set($theme_option , 'gallery_permalink' , 'gallery') ;




$options = array();

$options['sh_services'] = array(

								'labels' => array(__('Service', SH_NAME), __('Service', SH_NAME)),

								'slug' => $service_slug ,

								'label_args' => array('menu_name' => __('Services', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Service', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('services_category')

								)

							);
$options['sh_tickets'] = array(

								'labels' => array(__('Ticket', SH_NAME), __('Ticket', SH_NAME)),

								'slug' => $ticket_slug ,

								'label_args' => array('menu_name' => __('Tickets', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Ticket', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('tickets_category')

								)

							);
							

$options['sh_schedule'] = array(

								'labels' => array(__('Schedule', SH_NAME), __('Schedule', SH_NAME)),

								'slug' => $schedule_slug ,

								'label_args' => array('menu_name' => __('Schedule', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail'),

								'label' => __('Schedule', SH_NAME),

								'args'=>array(

											'menu_icon'=>'dashicons-admin-post' , 

											'taxonomies'=>array('schedule_category')

								)

							);							

$options['sh_events'] = array(

								'labels' => array(__('Event', SH_NAME), __('Event', SH_NAME)),

								'slug' => $event_slug ,

								'label_args' => array('menu_name' => __('Events', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Event', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('events_category')

								)

							);							

$options['sh_team'] = array(

								'labels' => array(__('Speaker', SH_NAME), __('Speaker', SH_NAME)),

								'slug' => $team_slug ,

								'label_args' => array('menu_name' => __('Speakers', SH_NAME)),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('Speaker', SH_NAME),

								'args'=>array(

											'menu_icon'=>'dashicons-admin-post' , 

											'taxonomies'=>array('team_category')

								)

							);
$options['sh_gallery'] = array(

								'labels' => array(__('Gallery', SH_NAME), __('Gallery', SH_NAME)),

								'slug' => $gallery_slug ,

								'label_args' => array('menu_name' => __('Gallaries', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Gallery', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('gallery_category')

								)

							);
							
$options['sh_sponsors'] = array(

								'labels' => array(__('Sponsor', SH_NAME), __('Sponsor', SH_NAME)),

								'slug' => $sponsor_slug ,

								'label_args' => array('menu_name' => __('Sponsors', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' , 'excerpt' ),

								'label' => __('Sponsor', SH_NAME),
								
								'public' => true,
								
								'has_archive' => true,

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('sponsors_category')

								)

							);

$options['sh_testimonials'] = array(

								'labels' => array(__('Testimonial', SH_NAME), __('Testimonial', SH_NAME)),

								'slug' => $testimonial_slug ,

								'label_args' => array('menu_name' => __('Testimonials', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Testimonial', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('testimonials_category')

								)

							);

$options['sh_faqs'] = array(

								'labels' => array(__('FAQ', SH_NAME), __('FAQ', SH_NAME)),

								'slug' => $faqs_slug ,

								'label_args' => array('menu_name' => __('FAQs', SH_NAME)),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('FAQ', SH_NAME),

								'args'=>array(

										'menu_icon'=>'dashicons-admin-post' , 

										'taxonomies'=>array('faqs_category')

								)

							);
