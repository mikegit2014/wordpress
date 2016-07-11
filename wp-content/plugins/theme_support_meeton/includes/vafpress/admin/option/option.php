<?php
return array(
    'title' => __( 'Meeton Theme Options', SH_NAME ),
    'logo' => get_template_directory_uri() . '/images/logo.png',
    'menus' => array(
        // General Settings
         array(
             'title' => __( 'General Settings', SH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-cogs',
            'menus' => array(
                 
				array(
                    'title' => __( 'general Settings', SH_NAME ),
                    'name' => 'general_sub_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        array(
                            'type' => 'toggle',
                            'name' => 'preloader',
                            'label' => __( 'Preloader', SH_NAME ),
							'default' => 1,
							'description' => __('show or hide Preloader', SH_NAME)
							
                        ),
					) 
                    
                ),
				/** Submenu for heading settings */
                array(
                     'title' => __( 'Header Settings', SH_NAME ),
                    'name' => 'header_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        array(
                             'type' => 'upload',
                            'name' => 'site_favicon',
                            'label' => __( 'Favicon', SH_NAME ),
                            'description' => __( 'Upload the favicon, should be 16x16', SH_NAME ),
                            'default' => '' 
                        ),
						array(
							'type' => 'upload',
							'name' => 'logo_image',
							'label' => __('Logo Image', SH_NAME),
							'description' => __('Inser the logo image', SH_NAME),
							'default' => get_template_directory_uri().'/images/logo.png'
						),
						/*array(
                            'type' => 'toggle',
                            'name' => 'topbar',
                            'label' => __( 'Show/Hide TopBar', SH_NAME ),
							'default' => 1,
							'description' => __('Show/Hide TopBar', SH_NAME)
							
                        ),
						array(
							'type' => 'section',
							'title' => __('Topbar Settings', SH_NAME),
							'name' => 'topbar_settings',
							'dependency' => array(
								'field' => 'topbar',
								'function' => 'vp_dep_boolean',
							),
							'fields' => array(
								array(
									'type' => 'textbox',
									'name' => 'phone',
									'label' => __( 'Phone', SH_NAME ),
									'description' => __( 'Enter the phone Number', SH_NAME ),
									'default' => ' +49 123 456 789' 
								),
								array(
									'type' => 'textbox',
									'name' => 'topbar_email',
									'label' => __( 'Topbar Email', SH_NAME ),
									'description' => __( 'Enter topbar Email', SH_NAME ),
									'default' => 'support@email.com' 
								),
								array(
									'type' => 'textbox',
									'name' => 'opening_hours',
									'label' => __('Opening Hours', SH_NAME),
									'description' => __('Enter the Opening Hours', SH_NAME),
									'default' => 'Monday to Saturday - 8am to 9pm'
								),
								array(
									'type' => 'textbox',
									'name' => 'contact_number',
									'label' => __('Contact Number', SH_NAME),
									'description' => __('Enter the Contact Numbers', SH_NAME),
									'default' => '+1-800-654-3210'
								),
								
							),
						),*/
						// Custom HEader Style End
                        array(
                             'type' => 'codeeditor',
                            'name' => 'header_css',
                            'label' => __( 'Header CSS', SH_NAME ),
                            'description' => __( 'Write your custom css to include in header.', SH_NAME ),
                            'theme' => 'github',
                            'mode' => 'css' 
                        ) 
                    ) 
                    
                ),
				                
                /** Submenu for footer area */
                array(
                     'title' => __( 'Footer Settings', SH_NAME ),
                    'name' => 'sub_footer_settings',
                    'icon' => 'font-awesome:fa fa-edit',
                    'controls' => array(
                        array(
                            'type' => 'toggle',
                            'name' => 'whole_footer',
                            'label' => __( 'Show/Hide Whole Footer', SH_NAME ),
							'default' => 1,
							'description' => __('Show/Hide whole footer', SH_NAME)
							
                        ),
						array(
                            'type' => 'toggle',
                            'name' => 'upper_footer',
                            'label' => __( 'Show/Hide Upper Footer', SH_NAME ),
							'default' => 1,
							'description' => __('Show/Hide upper footer', SH_NAME)
							
                        ),
						array(
                            'type' => 'toggle',
                            'name' => 'lower_footer',
                            'label' => __( 'Show/Hide Lower Footer', SH_NAME ),
							'default' => 1,
							'description' => __('Show/Hide Lower footer', SH_NAME)
							
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'footer_logo_image',
                            'label' => __( 'choose footer logo', SH_NAME ),
							'description' => __('choose footer logo', SH_NAME)
							
                        ),
						array(
							'type' => 'textarea',
							'name' => 'copy_right',
							'label' => __( 'Copy Right Text', SH_NAME ),
							'description' => __( 'Enter the Copy Right Text', SH_NAME ),
							'default' => 'Copryright 2015 by Meeton | All rights reserved'
						),
                        
                    ) 
                ), //End of submenu
				//twitter
				/*array(
                     'title' => __( 'Twitter Settings', SH_NAME ),
                    'name' => 'sub_twitter_settings',
                    'icon' => 'font-awesome:fa fa-twitter',
                    'controls' => array(
                        
                         array(
                             'type' => 'textbox',
                            'name' => 'twitter_api',
                            'label' => __( 'API', SH_NAME ),
                            'description' => __( 'Enter Twitter API key Here.', SH_NAME ),
                            'default' => 'EAVuZPOFDqh6YJRoIUn4danY8' 
                        ),
                        
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_api_secret',
                            'label' => __( 'API Secret', SH_NAME ),
                            'description' => __( 'Enter Twitter API Secret Here.', SH_NAME ),
                            'default' => 'HZ5lBxAooSWbLIyva9SioNbzLoPfzk9yKxLscMUGRwGt5XzIyv' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token',
                            'label' => __( 'Token', SH_NAME ),
                            'description' => __( 'Enter Twitter Token here.', SH_NAME ),
                            'default' => '2595337447-sQiBf41a0BYokzTyULmP6LDpC28MU6ajCtllgHq' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token_Secret',
                            'label' => __( 'Token Secret', SH_NAME ),
                            'description' => __( 'Enter Token Secret', SH_NAME ),
                            'default' => 'tjeQG0UiRZLJLua9phO0eVMv5ZpQRvx4Z0dS4b3dwEpk7' 
                        ) 
                    ) 
                ),*/ //End of submenu
                
            ) 
        ),
        
		// SEO General settings Settings
        array(
             'title' => __( 'SEO Settings', SH_NAME ),
            'name' => 'seo_settings',
            'icon' => 'font-awesome:fa fa-search',
			
			'controls' => array(
				
				array(
					 'type' => 'toggle',
					'name' => '_enable_seo',
					'label' => __( 'Enable SEO', SH_NAME ),
					'description' => __( 'Enable or disable seo settings', SH_NAME ),
					'default' => 1 
				),
				array( 
				 		'type' => 'section',
						'title' => __( 'Homepage Settings', SH_NAME ),
						'name' => '_seo_homepage_settings',
						'description' => __( 'homepage meta title, meta description and meta keywords', SH_NAME ),
						'fields' => array(
								array(
									 'type' => 'textbox',
									'name' => '_seo_home_meta_title',
									'label' => __( 'Meta Title', SH_NAME ),
									'description' => __( 'Enter the Title you want to show on home page', SH_NAME ),
									'default' => ''
								),
								array(
									'type' => 'textarea',
									'name' => '_seo_home_meta_description',
									'label' => __( 'Meta Description', SH_NAME ),
									'description' => __( 'Enter the meta description for homepage', SH_NAME ),
									'default' => ''
								),
								array(
									'type' => 'textarea',
									'name' => '_seo_home_meta_keywords',
									'label' => __( 'Meta Keywords', SH_NAME ),
									'description' => __( 'Enter the comma separated keywords for homepage', SH_NAME ),
									'default' => ''
								),
						),
				 ), /** End of homepage seo settings */
				 
				 array( 
				 		'type' => 'section',
						'title' => __( 'Archive Pages Settings', SH_NAME ),
						'name' => '_seo_archive_settings',
						'description' => __( 'archive pages meta title, meta description and meta keywords', SH_NAME ),
						'fields' => array(
								array(
									 'type' => 'textbox',
									'name' => '_seo_archive_meta_title',
									'label' => __( 'Meta Title', SH_NAME ),
									'description' => __( 'Enter the Title you want to show on home page', SH_NAME ),
									'default' => ''
								),
								array(
									'type' => 'textarea',
									'name' => '_seo_archive_meta_description',
									'label' => __( 'Meta Description', SH_NAME ),
									'description' => __( 'Enter the meta description for homepage', SH_NAME ),
									'default' => ''
								),
								array(
									'type' => 'textarea',
									'name' => '_seo_archive_meta_keywords',
									'label' => __( 'Meta Keywords', SH_NAME ),
									'description' => __( 'Enter the comma separated keywords for homepage', SH_NAME ),
									'default' => ''
								),
						),
				 ),/** End of archive page settings */
				
			), /** End of controls */
				
		), /** End of seo page settings */
		// Dynamic Clients Creator
        array(
             'title' => __( 'Clients', SH_NAME ),
            'name' => 'clients',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Clients', SH_NAME ),
                    'name' => 'clients',
                    'description' => __( 'This section is used to add Clients.', SH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the client.', SH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'client_link',
                            'label' => __( 'Link', SH_NAME ),
                            'description' => __( 'Enter the Link for client.', SH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'upload',
                            'name' => 'client_img',
                            'label' => __( 'Logo', SH_NAME ),
                            'description' => __( 'choose the brand logo.', SH_NAME ),
                            'default' => '',
							
                         ),  
                    ) 
                ) 
            ) 
        ),
		
		
		// Pages , Blog Pages Settings
        array(
             'title' => __( 'Page Settings', SH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-file',
            'menus' => array(
                
                // Search Page Settings 
                 array(
                     'title' => __( 'Search Page', SH_NAME ),
                    'name' => 'search_page_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        
						array(
                            'type' => 'textbox',
                            'name' => 'search_title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the page.', SH_NAME ), 
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'search_bg',
                            'label' => __( 'Background image', SH_NAME ),
                            'description' => __( 'Enter the Background image.', SH_NAME ), 
                        ),
						array(
                             'type' => 'select',
                            'name' => 'search_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'search_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/1col.png' 
                                ),
								array(
                                     'value' => 'both',
                                    'label' => __( 'Both Sidebars', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/3_col.png' 
                                ), 
                                
                            ) 
                        ),
                    ) 
                ), // End of submenu
                
                // Archive Page Settings 
                array(
                     'title' => __( 'Archive Page', SH_NAME ),
                    'name' => 'archive_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
						
						array(
                            'type' => 'textbox',
                            'name' => 'archive_title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the page.', SH_NAME ), 
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'archive_bg',
                            'label' => __( 'Background image', SH_NAME ),
                            'description' => __( 'Enter the Background image.', SH_NAME ), 
                        ),
                        array(
                             'type' => 'select',
                            'name' => 'archive_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'archive_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cl.png' 
                                ),
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/1col.png' 
                                ),
								array(
                                     'value' => 'both',
                                    'label' => __( 'Both Sidebars', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/3_col.png' 
                                ), 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                
                // Author Page Settings 
                array(
                     'title' => __( 'Author Page', SH_NAME ),
                    'name' => 'author_page_settings',
                    'icon' => 'font-awesome:fa fa-user',
                    'controls' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'author_title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the page.', SH_NAME ), 
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'author_bg',
                            'label' => __( 'Background image', SH_NAME ),
                            'description' => __( 'Enter the Background image.', SH_NAME ), 
                        ),
						array(
                             'type' => 'select',
                            'name' => 'author_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'author_page_layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/1col.png' 
                                ),
								array(
                                     'value' => 'both',
                                    'label' => __( 'Both Sidebars', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/images/vafpress/3_col.png' 
                                ), 
                                
                            ) 
                        ) 
                        
                    ) 
                ),
                
                // 404 Page Settings 
               /* array(
                     'title' => __( '404 Page Settings', SH_NAME ),
                    'name' => '404_page_settings',
                    'icon' => 'font-awesome:fa fa-exclamation-triangle',
                    'controls' => array(
                         array(
                             'type' => 'textbox',
                            'name' => '404_page_title',
                            'label' => __( 'Page Title', SH_NAME ),
                            'description' => __( 'Enter the Title you want to show on 404 page', SH_NAME ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => '404_page_heading',
                            'label' => __( 'Page Heading', SH_NAME ),
                            'description' => __( 'Enter the Heading you want to show on 404 page', SH_NAME ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => '404_page_tag_line',
                            'label' => __( 'Page Tagline', SH_NAME ),
                            'description' => __( 'Enter the Tagline you want to show on 404 page', SH_NAME ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textarea',
                            'name' => '404_page_text',
                            'label' => __( '404 Page Text', SH_NAME ),
                            'description' => __( 'Enter the Text you want to show on 404 page', SH_NAME ),
                            'default' => '' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => '404_page_sidebar',
                            'label' => __( 'Sidebar', SH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'layout',
                            'label' => __( 'Page Layout', SH_NAME ),
                            'description' => __( 'Choose the layout for blog pages', SH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', SH_NAME ),
                                    'img' => get_template_directory_uri() . '/includes/vafpress/public/img/1col.png' 
                                ) 
                                
                            ) 
                        ),
                        array(
                             'type' => 'upload',
                            'name' => '404_page_bg',
                            'label' => __( 'Background  Image', SH_NAME ),
                            'description' => __( 'Upload Image for 404 Page Background', SH_NAME ),
                            'default' => get_template_directory_uri() . '/images/logo.png' 
                        ) 
                    ) 
                ) */
            ) 
        ),
        
        // Sidebar Creator
        array(
             'title' => __( 'Sidebar Settings', SH_NAME ),
            'name' => 'sidebar-settings',
            'icon' => 'font-awesome:fa fa-bars',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Dynamic Sidebar', SH_NAME ),
                    'name' => 'dynamic_sidebar',
                    'description' => __( 'This section is used for theme color settings', SH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'sidebar_name',
                            'label' => __( 'Sidebar Name', SH_NAME ),
                            'description' => __( 'Choose the default color scheme for the theme.', SH_NAME ),
                            'default' => __( 'Dynamic Sidebar', SH_NAME ) 
                        ) 
                    ) 
                ) 
            ) 
        ),
        
        // Dynamic Social Media Creator
        array(
             'title' => __( 'Social Media ', SH_NAME ),
            'name' => 'social_media',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', SH_NAME ),
                    'name' => 'social_media',
                    'description' => __( 'This section is used to add Social Media.', SH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', SH_NAME ),
                            'description' => __( 'Enter the title of the social media.', SH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', SH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', SH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', SH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', SH_NAME ),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
                        )  
                    ) 
                ) 
            ) 
        ),
        
        
        /* Font settings */
        array(
             'title' => __( 'Font Settings', SH_NAME ),
            'name' => 'font_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                /** heading font settings */
                 array(
                     'title' => __( 'Heading Font', SH_NAME ),
                    'name' => 'heading_font_settings',
                    'icon' => 'font-awesome:fa fa-text-height',
                    
                    'controls' => array(
                        
                         array(
                             'type' => 'toggle',
                            'name' => 'use_custom_font',
                            'label' => __( 'Use Custom Font', SH_NAME ),
                            'description' => __( 'Use custom font or not', SH_NAME ),
                            'default' => 0 
                        ),
                        array(
                            'type' => 'section',
                            'title' => __( 'H1 Settings', SH_NAME ),
                            'name' => 'h1_settings',
                            'description' => __( 'heading 1 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h1_font_family',
                                    'description' => __( 'Select the font family to use for h1', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'h1_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H2 Settings', SH_NAME ),
                            'name' => 'h2_settings',
                            'description' => __( 'heading h2 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h2_font_family',
                                    'description' => __( 'Select the font family to use for h2', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h2_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H3 Settings', SH_NAME ),
                            'name' => 'h3_settings',
                            'description' => __( 'heading h3 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h3_font_family',
                                    'description' => __( 'Select the font family to use for h3', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h3_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h3', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H4 Settings', SH_NAME ),
                            'name' => 'h4_settings',
                            'description' => __( 'heading h4 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h4_font_family',
                                    'description' => __( 'Select the font family to use for h4', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h4_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h4', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H5 Settings', SH_NAME ),
                            'name' => 'h5_settings',
                            'description' => __( 'heading h5 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h5_font_family',
                                    'description' => __( 'Select the font family to use for h5', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h5_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h5', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H6 Settings', SH_NAME ),
                            'name' => 'h6_settings',
                            'description' => __( 'heading h6 font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'h6_font_family',
                                    'description' => __( 'Select the font family to use for h6', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h6_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading h6', SH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ) 
                    ) 
                ),
                
                /** body font settings */
                array(
                     'title' => __( 'Body Font', SH_NAME ),
                    'name' => 'body_font_settings',
                    'icon' => 'font-awesome:fa fa-text-width',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'body_custom_font',
                            'label' => __( 'Use Custom Font', SH_NAME ),
                            'description' => __( 'Use custom font or not', SH_NAME ),
                            'default' => 0 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'Body Font Settings', SH_NAME ),
                            'name' => 'body_font_settings1',
                            'description' => __( 'body font settings', SH_NAME ),
                            'dependency' => array(
                                 'field' => 'body_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', SH_NAME ),
                                    'name' => 'body_font_family',
                                    'description' => __( 'Select the font family to use for body', SH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'body_font_color',
                                    'label' => __( 'Font Color', SH_NAME ),
                                    'description' => __( 'Choose the font color for heading body', SH_NAME ),
                                    'default' => '#686868' 
                                ) 
                            ) 
                        ) 
                    ) 
                ) 
            ) 
        ), 
		
		
    ) 
);
/**
 *EOF
 */