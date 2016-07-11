<?php
$options = array();
$options[] = array(
	'id'          => '_sh_seo_settings',
	'types'       => array('post', 'page', 'product', 'sh_services', 'sh_team', 'sh_projects'),
	'title'       => __('SEO Settings', SH_NAME),
	'priority'    => 'low',
	'template'    => 
			array(
					
					array(
						'type' => 'toggle',
						'name' => 'seo_status',
						'label' => __('Enable SEO', SH_NAME),
						'description' => __('Enable / disable seo settings for this post', SH_NAME),
					),
					array(
						'type' => 'textbox',
						'name' => 'title',
						'label' => __('Meta Title', SH_NAME),
						'description' => __('Enter meta title or leave it empty to use default title', SH_NAME),
					),
					
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Meta Description', SH_NAME),
						'default' => '',
						'description' => __('Enter meta description', SH_NAME),
					),
					array(
						'type' => 'textarea',
						'name' => 'keywords',
						'label' => __('Meta Keywords', SH_NAME),
						'default' => '',
						'description' => __('Enter meta keywords', SH_NAME),
					),
				),
); /** SEO fields for custom posts and pages */
$options[] = array(
	'id'          => '_sh_layout_settings',
	'types'       => array('post', 'page', 'product', 'sh_services', 'sh_sponsors', ),
	'title'       => __('Layout Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', SH_NAME),
						'description' => __('Choose the layout for blog pages', SH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', SH_NAME),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', SH_NAME),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', SH_NAME),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/1col.png',
							),
							array(
								 'value' => 'both',
								'label' => __( 'Both Sidebars', SH_NAME ),
								'img' => get_template_directory_uri() . '/images/vafpress/3_col.png' 
							),
							
						),
					),
					
					array(
						'type' => 'select',
						'name' => 'sidebar',
						'label' => __('Sidebar', SH_NAME),
						'default' => '',
						'items' => sh_get_sidebars(true)	
					),
				),
);
$options[] = array(
	'id'          => '_sh_header_settings',
	'types'       => array('post' ,'page', 'sh_sponsors', 'sh_events'),
	'title'       => __('Header Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'textbox',
						'name' => 'page_title',
						'label' => __('Page Title', SH_NAME),
						'description' => __('Enter Page title or leave it empty to use default title', SH_NAME),
					),
					array(
						'type' => 'upload',
						'name' => 'page_bg',
						'label' => __('Page Background', SH_NAME),
						'description' => __('Enter banner background.', SH_NAME),
					),
					array(
						'type' => 'toggle',
						'name' => 'breadcrumb',
						'label' => __('Enable Breadcrumb', SH_NAME),
						'description' => __('Enable / disable breadcrumb area in header for vc template', SH_NAME),
					),
					
				),
);
/*$options[] =  array(
	'id'          => _WSH()->set_meta_key('post'),
	'types'       => array('post'),
	'title'       => __('Post Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(		
					array(
					'type' => 'select',
					'name' => 'arrow_view',
					'label' => __('Arrow Layout for "Top Blog Posts" shortcode', SH_NAME),
					'default' => 'img_left',
					'items' => array(
									array(
										'value' => 'img_left',
										'label' => __('Image Left', SH_NAME),
									),
									array(
										'value' => 'img_right',
										'label' => __('Image Right', SH_NAME),
									),
									array(
										'value' => 'img_top',
										'label' => __('Image Top', SH_NAME),
									),
								),
					),
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Post Description', SH_NAME),
						'default' => '',
						'description' => __('Enter the post description for detail page.', SH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'video',
						'label' => __('Video Embed Code', SH_NAME),
						'default' => '',
						'description' => __('If post format is video then this embed code will be used in content', SH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'audio',
						'label' => __('Audio Embed Code', SH_NAME),
						'default' => '',
						'description' => __('If post format is AUDIO then this embed code will be used in content', SH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'quote',
						'label' => __('Quote', SH_NAME),
						'default' => '',
						'description' => __('If post format is quote then the content in this textarea will be displayed', SH_NAME)
					),
							
					
			),
);*/
/* Page options */
/** Team Options*/
/** Services Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_services'),
	'types'       => array( 'sh_services' ),
	'title'       => __('Services Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				array(
					'type' => 'upload',
					'name' => 'small_image',
					'label' => __('Small image', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'ext_url',
					'label' => __('Read more link', SH_NAME),
					'default' => '',
				),
				
			),
);
/** Gallery Options**/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_schedule'),
	'types'       => array('sh_schedule'),
	'title'       => __('Schedule Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
			array(
					'type' => 'upload',
					'name' => 'schedule_pdf',
					'label' => __('Schedule PDF', SH_NAME),
					'default' => '',
				),
			array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'sh_columns',
					'title'     => __('Schedule Columns', SH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'column_title',
							'label' => __('Column Title', SH_NAME),
							'default' => '',
						),
						array(
							'type' => 'date',
							'name' => 'column_date',
							'label' => __('Column Date', SH_NAME),
							'format' => 'dd-M-yy',
							'default' => '',
						),
						array(
							'type' => 'sorter',
							'name' => 'sorting_events',
							'label' => __('Choose Events', SH_NAME),
							'description' => __('Choose Events to list in column', SH_NAME),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_events',
									),
								),
							),
						),
					),
				),
	),
);
/** Team Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_team'),
	'types'       => array('sh_team'),
	'title'       => __('Team Options', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
	
						
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_phone',
					'label' => __('Phone', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_email',
					'label' => __('Email', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'speaker_website',
					'label' => __('Website', SH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'sh_team_social',
					'title'     => __('Social Profile', SH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', SH_NAME),
							'default' => '',
						),
						
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', SH_NAME),
							'default' => '',
							
						),
						
						
					),
				),
				array(
					'type' => 'upload',
					'name' => 'speaker_schedule_pdf',
					'label' => __('Schedule PDF', SH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'sh_columns',
					'title'     => __('Schedule Columns', SH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'column_title',
							'label' => __('Column Title', SH_NAME),
							'default' => '',
						),
						array(
							'type' => 'date',
							'name' => 'column_date',
							'label' => __('Column Date', SH_NAME),
							'format' => 'dd-M-yy',
							'default' => '',
						),
						array(
							'type' => 'sorter',
							'name' => 'sorting_events',
							'label' => __('Choose Events', SH_NAME),
							'description' => __('Choose Events to list in column', SH_NAME),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_events',
									),
								),
							),
						),
					),
				),
				array(
					'type' => 'toggle',
					'name' => 'show_call_out',
					'label' => __( 'Show/Hide Call To Action', SH_NAME ),
					'default' => 0,
					'description' => __('Show/Hide Call To Action', SH_NAME)
					
				),
				array(
					'type' => 'group',
					'title' => __('Call to action Settings', SH_NAME),
					'name' => 'call_to_action_settings',
					'dependency' => array(
						'field' => 'show_call_out',
						'function' => 'vp_dep_boolean',
					),
					'fields' => array(
						array(
							'type' => 'textbox',
							'name' => 'call_title',
							'label' => __( 'Title', SH_NAME ),
							'description' => __( 'Enter the Title for call to action', SH_NAME ),
							'default' => '' 
						),
						array(
							'type' => 'textarea',
							'name' => 'call_text',
							'label' => __( 'Text', SH_NAME ),
							'description' => __( 'Enter text', SH_NAME ),
							'default' => '' 
						),
						array(
							'type' => 'textbox',
							'name' => 'btn_link',
							'label' => __('Button Link', SH_NAME),
							'description' => __('Enter the Link for Button', SH_NAME),
							'default' => '#'
						),
						array(
							'type' => 'textbox',
							'name' => 'btn_text',
							'label' => __('Button Text', SH_NAME),
							'description' => __('Enter the Button Text', SH_NAME),
							'default' => ''
						),
						array(
							'type' => 'upload',
							'name' => 'background_img',
							'label' => __('Background image', SH_NAME),
							'description' => __('Enter the Background image', SH_NAME),
							'default' => ''
						),
						
					),
				),
	),
);
/** Sponsors Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_sponsors'),
	'types'       => array('sh_sponsors'),
	'title'       => __('Sponsors Options', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'type',
					'label' => __('Sponsor Type', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'website',
					'label' => __('Sponsor Websit', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'twitter_link',
					'label' => __('Sponsor Twitter Profile', SH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'facebook_link',
					'label' => __('Sponsor Facebook Profile', SH_NAME),
					'default' => '',
				),
	),
);
/** Testimonial Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_testimonials'),
	'types'       => array('sh_testimonials'),
	'title'       => __('Testimonials Options', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', SH_NAME),
					'default' => 'Consultant',
				),
				array(
					'type' => 'textbox',
					'name' => 'company',
					'label' => __('Company', SH_NAME),
					'default' => '',
				)
	),
);
/** Events Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_events'),
	'types'       => array('sh_events'),
	'title'       => __('Events Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'date',
						'name' => 'event_date',
						'label' => __('Event Date', SH_NAME),
						'format' => 'dd-M-yy',
						'default' => '-1W',
					),
					array(
						'type' => 'textbox',
						'name' => 'start_time',
						'label' => __('Event Start Time', SH_NAME),
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'end_time',
						'label' => __('Event End Time', SH_NAME),
						'default' => '',
					),
					array(
						'type' => 'sorter',
						'name' => 'sorting_speakers',
						'label' => __('Choose Speakers', SH_NAME),
						'description' => __('Choose Speakers of event', SH_NAME),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_speakers',
								),
							),
						),
					),
					array(
						'type' => 'upload',
						'name' => 'pdf_link',
						'label' => __('PDF Document', SH_NAME),
						'default' => '',
					),
					array(
						'type' => 'toggle',
						'name' => 'show_call_out',
						'label' => __( 'Show/Hide Call To Action', SH_NAME ),
						'default' => 0,
						'description' => __('Show/Hide Call To Action', SH_NAME)
						
					),
					array(
						'type' => 'group',
						'title' => __('Call to action Settings', SH_NAME),
						'name' => 'call_to_action_settings',
						'dependency' => array(
							'field' => 'show_call_out',
							'function' => 'vp_dep_boolean',
						),
						'fields' => array(
							array(
								'type' => 'textbox',
								'name' => 'call_title',
								'label' => __( 'Title', SH_NAME ),
								'description' => __( 'Enter the Title for call to action', SH_NAME ),
								'default' => '' 
							),
							array(
								'type' => 'textarea',
								'name' => 'call_text',
								'label' => __( 'Text', SH_NAME ),
								'description' => __( 'Enter text', SH_NAME ),
								'default' => '' 
							),
							array(
								'type' => 'textbox',
								'name' => 'btn_link',
								'label' => __('Button Link', SH_NAME),
								'description' => __('Enter the Link for Button', SH_NAME),
								'default' => '#'
							),
							array(
								'type' => 'textbox',
								'name' => 'btn_text',
								'label' => __('Button Text', SH_NAME),
								'description' => __('Enter the Button Text', SH_NAME),
								'default' => ''
							),
							array(
								'type' => 'upload',
								'name' => 'background_img',
								'label' => __('Background image', SH_NAME),
								'description' => __('Enter the Background image', SH_NAME),
								'default' => ''
							),
							
						),
					),
					array(
							'type' => 'textbox',
							'name' => 'num_participants',
							'label' => __('Number of participents', SH_NAME),
							'description' => __('Enter the Number of participents', SH_NAME),
							'default' => '#'
						),
					
	),
);
/** Ticket Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_tickets'),
	'types'       => array('sh_tickets'),
	'title'       => __('Tickets Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => array(
					
					array(
						'type' => 'date',
						'name' => 'event_date',
						'label' => __('Event Date', SH_NAME),
						'format' => 'dd-M-yy',
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'event_place',
						'label' => __('Event Place', SH_NAME),
						'default' => '',
					),
					array(
						'type' => 'textbox',
						'name' => 'ticket_url',
						'label' => __('Book Button link', SH_NAME),
						'default' => '',
					),
						
									
	),
);
// faqs
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_faqs'),
	'types'       => array( 'sh_faqs' ),
	'title'       => __('FAQs Settings', SH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				array(
					'type' => 'textbox',
					'name' => 'faq_subtitle',
					'label' => __('FAQs subtitle', SH_NAME),
					'default' => '',
				),
				
			),
);
/**
 * EOF
 */
 
 
 return $options; 