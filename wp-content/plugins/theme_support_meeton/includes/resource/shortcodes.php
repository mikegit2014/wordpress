<?php
$sh_sc = array();
$sh_sc['sh_services']	=	array(
					"name" => __("Services (4 column)", SH_NAME),
					"base" => "sh_services",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter Sub-Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_event1']	=	array(
					"name" => __("Event with image", SH_NAME),
					"base" => "sh_event1",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Event with background image', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title Link', SH_NAME ),
						   "param_name" => "title_link",
						   "description" => __('Enter the Title link', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', SH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Button style", SH_NAME),
						   "param_name" => "btn_style",
						   'value' => array_flip(array('orange'=>__('orange', SH_NAME),'blue'=>__('blue', SH_NAME) ) ),			
						   "description" => __("Enter the Background Color.", SH_NAME)
						),
					)
				);
$sh_sc['sh_latest_events']	=	array(
					"name" => __("Latest Events (4 column)", SH_NAME),
					"base" => "sh_latest_events",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Latest Events.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image1', SH_NAME ),
						   "param_name" => "img1",
						   "description" => __('Enter Background image to show.', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image2', SH_NAME ),
						   "param_name" => "img2",
						   "description" => __('Enter Background image to show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of events to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'events_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_latest_events2']	=	array(
					"name" => __("Latest Events (list view)", SH_NAME),
					"base" => "sh_latest_events2",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Latest Events.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Side image', SH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter side image to show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter Sub-Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of events to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'events_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter Button Link to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter Button Text to Show.', SH_NAME )
						),
					)
				);				
$sh_sc['sh_team']	=	array(
					"name" => __("Our Speakers", SH_NAME),
					"base" => "sh_team",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Speakers.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Number of members to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter Text Limit to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of members to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Speaker Style", SH_NAME),
						   "param_name" => "speaker_style",
						   'value' => array_flip(array('1'=>__('Speaker Style One', SH_NAME),'2'=>__('Speaker Style Two ', SH_NAME),'3'=>__('Speaker Style Three ', SH_NAME),'4'=>__('Speaker Style Four ', SH_NAME),'5'=>__('Speaker Style Five ', SH_NAME) ) ),			
						   "description" => __("Enter the Display style.", SH_NAME)
						),
						
					)
				);
$sh_sc['sh_call_to_action']	=	array(
					"name" => __("Call to Action", SH_NAME),
					"base" => "sh_call_to_action",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show call to action', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', SH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Background image', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', SH_NAME )
						),
					)
				);
$sh_sc['sh_pricing_section']	=	array(
			"name" => __("Pricing Section", SH_NAME),
			"base" => "sh_pricing_section",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_pricing_table'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Number of pricing tables to your theme.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("SubTitle", SH_NAME),
				   "param_name" => "subtitle",
				   "description" => __("Enter the subtitle.", SH_NAME)
				),
			
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_pricing_table']	=	array(
			"name" => __("Pricing Table", SH_NAME),
			"base" => "sh_pricing_table",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_pricing_section'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Pricing Table.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title to show.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Currency", SH_NAME),
				   "param_name" => "currency",
				   "description" => __("Enter the currency to show", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Price", SH_NAME),
				   "param_name" => "price",
				   "description" => __("Enter the price to show", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Features", SH_NAME),
				   "param_name" => "feature_str",
				   "description" => __("Enter the features to show one per line.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Link", SH_NAME),
				   "param_name" => "btn_link",
				   "description" => __("Enter the button link to show", SH_NAME)
				),
			
			),
		);
		
$sh_sc['sh_about_event']	=	array(
					"name" => __("About Event", SH_NAME),
					"base" => "sh_about_event",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show About event', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Content', SH_NAME ),
						   "param_name" => "content",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Side Title', SH_NAME ),
						   "param_name" => "side_title",
						   "description" => __('Enter the Side Title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Participants', SH_NAME ),
						   "param_name" => "participent_str",
						   "description" => __('Enter who can participate one per line.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Display Style", SH_NAME),
						   "param_name" => "style",
						   'value' => array_flip(array('1'=>__('style 1', SH_NAME),'2'=>__('style 2', SH_NAME) ) ),			
						   "description" => __("Enter the display style.", SH_NAME)
						),
					)
				);
$sh_sc['sh_meeting_services']	=	array(
					"name" => __("Services (2 column)", SH_NAME),
					"base" => "sh_meeting_services",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", SH_NAME),
						   "param_name" => "image",
						   'value' => '',
						   "description" => __("Enter the Image url", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Services to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);				
$sh_sc['sh_clients']	=	array(
					"name" => __("Clients", SH_NAME),
					"base" => "sh_clients",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show clients', SH_NAME),
					"params" => array(
					   	array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Display Style", SH_NAME),
						   "param_name" => "style",
						   'value' => array_flip(array('1'=>__('Style 1', SH_NAME),'2'=>__('Style 2', SH_NAME) ) ),			
						   "description" => __("Enter the display style.", SH_NAME)
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Background image", SH_NAME),
						   "param_name" => "bg_img",
						   "description" => __("Enter the background image for style 2.", SH_NAME)
						),
						
					)
				);
$sh_sc['sh_pricing_section2']	=	array(
			"name" => __("Pricing Section2", SH_NAME),
			"base" => "sh_pricing_section2",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_pricing_table2'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Number of pricing tables to your theme.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("SubTitle", SH_NAME),
				   "param_name" => "subtitle",
				   "description" => __("Enter the subtitle.", SH_NAME)
				),
			
			),
			"js_view" => 'VcColumnView'
		);				
$sh_sc['sh_pricing_table2']	=	array(
			"name" => __("Pricing Table2", SH_NAME),
			"base" => "sh_pricing_table2",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_pricing_section2'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Pricing Table.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title to show.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Currency", SH_NAME),
				   "param_name" => "currency",
				   "description" => __("Enter the currency to show", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Price", SH_NAME),
				   "param_name" => "price",
				   "description" => __("Enter the price to show", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Features", SH_NAME),
				   "param_name" => "feature_str",
				   "description" => __("Enter the features to show one per line.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Link", SH_NAME),
				   "param_name" => "btn_link",
				   "description" => __("Enter the button link to show", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Text", SH_NAME),
				   "param_name" => "btn_text",
				   "description" => __("Enter the button text to show", SH_NAME)
				),
			
			),
		);
$sh_sc['sh_login']	=	array(
					"name" => __("Login", SH_NAME),
					"base" => "sh_login",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show login', SH_NAME),
					"params" => array(
					   	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_schedule']	=	array(
					"name" => __("Schedule", SH_NAME),
					"base" => "sh_schedule",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show schedule.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Content', SH_NAME ),
						   "param_name" => "content",
						   "description" => __('Enter Content to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Schedule to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'schedule_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Display Style", SH_NAME),
						   "param_name" => "style",
						   'value' => array_flip(array('1'=>__('Style 1', SH_NAME),'2'=>__('Style 2', SH_NAME) ) ),			
						   "description" => __("choose the display style.", SH_NAME)
						),
					)
				);
$sh_sc['sh_faqs']	=	array(
					"name" => __("FAQs", SH_NAME),
					"base" => "sh_faqs",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show FAQs.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title of faqs to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of faqs to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'faqs_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_help']	=	array(
					"name" => __("Help Search", SH_NAME),
					"base" => "sh_help",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Help Search.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title of help to Show.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text of help to Show.', SH_NAME )
						),
					)
				);
$sh_sc['sh_gallery_3_column']	=	array(
					"name" => __("Gallery (3 column)", SH_NAME),
					"base" => "sh_gallery_3_column",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Gallery in 3 column.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Gallery images to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Excluded Category IDs', SH_NAME ),
						   "param_name" => "exclude_cats",
						   "description" => __('Enter excluded cats ids to remove.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_gallery_4_column']	=	array(
					"name" => __("Gallery (4 column)", SH_NAME),
					"base" => "sh_gallery_4_column",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Gallery in 4 column.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Gallery images to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Excluded Category IDs', SH_NAME ),
						   "param_name" => "exclude_cats",
						   "description" => __('Enter excluded cats ids to remove.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);														
$sh_sc['sh_testimonial_v1']	=	array(
					"name" => __("Testimonial v1", SH_NAME),
					"base" => "sh_testimonial_v1",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials version 1.', SH_NAME),
					"params" => array(
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_testimonial_v2']	=	array(
					"name" => __("Testimonial v2", SH_NAME),
					"base" => "sh_testimonial_v2",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials version 2.', SH_NAME),
					"params" => array(
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
				
$sh_sc['sh_ticket']	=	array(
					"name" => __("Ticket", SH_NAME),
					"base" => "sh_ticket",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Ticket count down', SH_NAME),
					"params" => array(
					   	
					 	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter the Sub-Title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Date', SH_NAME ),
						   "param_name" => "date",
						   "description" => __('Enter date e.g(2015/10/13)', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', SH_NAME )
						),
					)
				);
$sh_sc['sh_events_world']	=	array(
					"name" => __("Events World", SH_NAME),
					"base" => "sh_events_world",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Events World', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', SH_NAME ),
						   "param_name" => "left_img",
						   "description" => __('Enter the Left Background image', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Background image', SH_NAME ),
						   "param_name" => "left_img2",
						   "description" => __('Enter the Left Background image', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Left Title', SH_NAME ),
						   "param_name" => "left_title",
						   "description" => __('Enter the Left Title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Left Text', SH_NAME ),
						   "param_name" => "left_text",
						   "description" => __('Enter Left side section content', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Right Background image', SH_NAME ),
						   "param_name" => "right_img",
						   "description" => __('Enter the Right Background image', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', SH_NAME )
						),
					)
				);
$sh_sc['sh_testimonial']	=	array(
					"name" => __("Testimonial slider", SH_NAME),
					"base" => "sh_testimonial",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials slider', SH_NAME),
					"params" => array(
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_brand_facts']	=	array(
			"name" => __("Brands and Partners", SH_NAME),
			"base" => "sh_brand_facts",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_brand_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Brands and partners', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Self Description", SH_NAME),
				   "param_name" => "desc",
				   "description" => __("Enter the self description.", SH_NAME)
				),
				
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_brand_fact']	=	array(
			"name" => __("Brands", SH_NAME),
			"base" => "sh_brand_fact",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_brand_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Brands images', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("image Link", SH_NAME),
				   "param_name" => "img_link",
				   "description" => __("Enter the image link to show", SH_NAME)
				),
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("brand image", SH_NAME),
				   "param_name" => "img",
				   "description" => __("Enter the Brand image", SH_NAME)
				),
			),
		);
$sh_sc['sh_experience_facts']	=	array(
			"name" => __("Experience Facts", SH_NAME),
			"base" => "sh_experience_facts",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_experience_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Experiences', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title.", SH_NAME)
				),
				
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_experience_fact']	=	array(
			"name" => __("Experience", SH_NAME),
			"base" => "sh_experience_fact",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_experience_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Brands images', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Experience title", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number %", SH_NAME),
				   "param_name" => "num",
				   "description" => __("Enter the percentage number", SH_NAME)
				),
			),
		);
$sh_sc['sh_services3']	=	array(
					"name" => __("Services 3", SH_NAME),
					"base" => "sh_services3",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_company_facts']	=	array(
			"name" => __("Company Facts", SH_NAME),
			"base" => "sh_company_facts",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_company_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Company staistics', SH_NAME),
			"params" => array(
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Background image", SH_NAME),
				   "param_name" => "bg_img",
				   "description" => __("Enter the Background image.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the title.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Sub-Title", SH_NAME),
				   "param_name" => "subtitle",
				   "description" => __("Enter the subtitle.", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Features", SH_NAME),
				   "param_name" => "feature_str",
				   "description" => __("Enter the features one per line.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Link", SH_NAME),
				   "param_name" => "btn_link",
				   "description" => __("Enter the Button Link.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Button Text", SH_NAME),
				   "param_name" => "btn_text",
				   "description" => __("Enter the Button Text.", SH_NAME)
				),
				
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_company_fact']	=	array(
			"name" => __("Statistics", SH_NAME),
			"base" => "sh_company_fact",
			"class" => "",
			"category" => __('Meeton', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_company_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Company Statistics', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number Stop", SH_NAME),
				   "param_name" => "num_stop",
				   "description" => __("Enter the stoping number", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Word", SH_NAME),
				   "param_name" => "word",
				   "description" => __("Enter the word", SH_NAME)
				),
			),
		);		
$sh_sc['sh_map']	=	array(
					"name" => __("Google map", SH_NAME),
					"base" => "sh_map",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Google map.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Lattitude', SH_NAME ),
						   "param_name" => "lat",
						   "description" => __('Enter Lattitude for map', SH_NAME ),
						   "default" => '-37.817085',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Longitude', SH_NAME ),
						   "param_name" => "long",
						   "description" => __('Enter Longitude for map', SH_NAME ),
						   "default" => '144.955631',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Lattitude', SH_NAME ),
						   "param_name" => "mark_lat",
						   "description" => __('Enter Mark Lattitude for map', SH_NAME ),
						   "default" => '-37.817085',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Longitude', SH_NAME ),
						   "param_name" => "mark_long",
						   "description" => __('Enter Mark Longitude for map', SH_NAME ),
						   "default" => '144.955631',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Title', SH_NAME ),
						   "param_name" => "mark_title",
						   "description" => __('Enter Mark Title for map', SH_NAME ),
						   "default" => 'Envato',
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Mark Address', SH_NAME ),
						   "param_name" => "mark_address",
						   "description" => __('Enter Mark Address for map', SH_NAME ),
						   "default" => ' Melbourne VIC 3000, Australia',
						),
					)
				);
$sh_sc['sh_contact_info']	=	array(
					"name" => __("Contact info", SH_NAME),
					"base" => "sh_contact_info",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show contact info', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Email', SH_NAME ),
						   "param_name" => "email",
						   "description" => __('Enter the email', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Phone', SH_NAME ),
						   "param_name" => "phone",
						   "description" => __('Enter the phone', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Fax', SH_NAME ),
						   "param_name" => "fax",
						   "description" => __('Enter the fax', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Website', SH_NAME ),
						   "param_name" => "website",
						   "description" => __('Enter the website', SH_NAME )
						),
					)
				);
$sh_sc['sh_contact_form']	=	array(
					"name" => __("Contact form", SH_NAME),
					"base" => "sh_contact_form",
					"class" => "",
					"category" => __('Meeton', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show contact form', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Self Description', SH_NAME ),
						   "param_name" => "desc",
						   "description" => __('Enter the Description for self help', SH_NAME )
						),
					)
				);
				

/*----------------------------------------------------------------*/
$sh_sc['sh_doctors_works']	=	array(
			"name" => __("Doctors Works", SH_NAME),
			"base" => "sh_doctors_works",
			"class" => "",
			"category" => __('Medicon', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_doctor_work'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Doctors works to theme', SH_NAME),
			"params" => array(
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", SH_NAME),
						   "param_name" => "image",
						   'value' => '',
						   "description" => __("Enter the Image url", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Title", SH_NAME),
						   "param_name" => "title",
						   "description" => __("Enter the Title.", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Sub Title", SH_NAME),
						   "param_name" => "subtitle",
						   "description" => __("Enter the Sub Title.", SH_NAME)
						),
			
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_doctor_work']	=	array(
			"name" => __("Doctor Work", SH_NAME),
			"base" => "sh_doctor_work",
			"class" => "",
			"category" => __('Medicon', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_doctors_works'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Doctor work.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number", SH_NAME),
				   "param_name" => "number",
				   "description" => __("Enter the Number to show.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Title to show.", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Text", SH_NAME),
				   "param_name" => "text",
				   "description" => __("Enter the Text to show.", SH_NAME)
				),
				
			),
		);
$sh_sc['sh_awesome_features']	=	array(
					"name" => __("Awesome Features", SH_NAME),
					"base" => "sh_awesome_features",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_opening_hours']	=	array(
					"name" => __("Opening Hours", SH_NAME),
					"base" => "sh_opening_hours",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Opening Hours', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Hours for Monday', SH_NAME ),
						   "param_name" => "monday",
						   "description" => __('Enter the Hours for monday', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Hours for Tuesday', SH_NAME ),
						   "param_name" => "tuesday",
						   "description" => __('Enter the Hours for tuesday', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Hours for Wednesday', SH_NAME ),
						   "param_name" => "wednesday",
						   "description" => __('Enter the Hours for wednesday', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Hours for Thursday', SH_NAME ),
						   "param_name" => "thursday",
						   "description" => __('Enter the Hours for thursday', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Hours for Friday', SH_NAME ),
						   "param_name" => "friday",
						   "description" => __('Enter the Hours for friday', SH_NAME )
						),
					)
				);

				
$sh_sc['sh_why_choose']	=	array(
					"name" => __("Why Choose Accordian", SH_NAME),
					"base" => "sh_why_choose",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show why choose accordian', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_blog']	=	array(
					"name" => __("Blog Posts", SH_NAME),
					"base" => "sh_blog",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Blog Posts.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of posts to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter text limit for posts to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_quote']	=	array(
					"name" => __("Quote", SH_NAME),
					"base" => "sh_quote",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show the quote.', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Quote', SH_NAME ),
						   "param_name" => "quote",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Link', SH_NAME ),
						   "param_name" => "btn_link",
						   "description" => __('Enter the button link', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button Text', SH_NAME ),
						   "param_name" => "btn_text",
						   "description" => __('Enter the Button text', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", SH_NAME),
						   "param_name" => "img",
						   'value' => '',
						   "description" => __("Enter the Image url", SH_NAME)
						),
					)
				);

$sh_sc['sh_services2']	=	array(
					"name" => __("Services 2", SH_NAME),
					"base" => "sh_services2",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_service_list']	=	array(
					"name" => __("Services List", SH_NAME),
					"base" => "sh_service_list",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_testimonial2']	=	array(
					"name" => __("Testimonial 2", SH_NAME),
					"base" => "sh_testimonial2",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show testimonials.', SH_NAME),
					"params" => array(
					
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter Sub-Title of testimonials to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", SH_NAME),
						   "param_name" => "img",
						   'value' => '',
						   "description" => __("Enter the Image url", SH_NAME)
						),
			
					)
				);

$sh_sc['sh_departments']	=	array(
					"name" => __("Our Departments", SH_NAME),
					"base" => "sh_departments",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Our Departments', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						
					)
				);

$sh_sc['sh_tabs']	=	array(
					"name" => __("Tabs", SH_NAME),
					"base" => "sh_tabs",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Tabs', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter the num', SH_NAME )
						),
						
					)
				);

$sh_sc['sh_contact']	=	array(
					"name" => __("Contact", SH_NAME),
					"base" => "sh_contact",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Contact Form', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the Title', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Title Alignment", SH_NAME),
						   "param_name" => "align",
						   'value' => array_flip(array('left'=>__('Align Left', SH_NAME),'center'=>__('Align Center', SH_NAME) ) ),			
						   "description" => __("Enter the Alignment for title", SH_NAME),
						   "default" => 'center',
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter the Text', SH_NAME )
						),
						
					)
				);
$sh_sc['sh_our_service_list']	=	array(
					"name" => __("Our Services List", SH_NAME),
					"base" => "sh_our_service_list",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button1 Link', SH_NAME ),
						   "param_name" => "btn1_link",
						   "description" => __('Enter Button1 Link to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button1 Text', SH_NAME ),
						   "param_name" => "btn1_text",
						   "description" => __('Enter Button1 Text to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button2 Link', SH_NAME ),
						   "param_name" => "btn2_link",
						   "description" => __('Enter Button2 Link to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Button2 Text', SH_NAME ),
						   "param_name" => "btn2_text",
						   "description" => __('Enter Button2 Text to Show.', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Image", SH_NAME),
						   "param_name" => "img",
						   'value' => '',
						   "description" => __("Enter the Image 1 url", SH_NAME)
						),
					)
				);
$sh_sc['sh_services4']	=	array(
					"name" => __("Services 4", SH_NAME),
					"base" => "sh_services4",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_services5']	=	array(
					"name" => __("Services 5", SH_NAME),
					"base" => "sh_services5",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show services.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Slides to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text Limit', SH_NAME ),
						   "param_name" => "text_limit",
						   "description" => __('Enter the text limit to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);

$sh_sc['sh_skill_facts']	=	array(
			"name" => __("Skill Facts", SH_NAME),
			"base" => "sh_skill_facts",
			"class" => "",
			"category" => __('Medicon', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_skill_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add clinical skill', SH_NAME),
			"params" => array(
						
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Title", SH_NAME),
						   "param_name" => "title",
						   "description" => __("Enter the Title.", SH_NAME)
						),
						
			
			),
			"js_view" => 'VcColumnView'
		);
$sh_sc['sh_skill_fact']	=	array(
			"name" => __("Skill Fact", SH_NAME),
			"base" => "sh_skill_fact",
			"class" => "",
			"category" => __('Medicon', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_skill_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add clinical skill.', SH_NAME),
			"params" => array(
				
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Title to show.", SH_NAME)
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Number %age", SH_NAME),
				   "param_name" => "num",
				   "description" => __("Enter the Number %age to show.", SH_NAME)
				),
				array(
				   "type" => "textarea",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Text", SH_NAME),
				   "param_name" => "text",
				   "description" => __("Enter the Text to show.", SH_NAME)
				),
				
			),
		);

$sh_sc['sh_about']	=	array(
					"name" => __("About Us", SH_NAME),
					"base" => "sh_about",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show about us', SH_NAME),
					"params" => array(
					   	
					 	array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter the title', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Sub-Title', SH_NAME ),
						   "param_name" => "subtitle",
						   "description" => __('Enter the Sub-title', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter section content', SH_NAME )
						),
						array(
						   "type" => "attach_image",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Image', SH_NAME ),
						   "param_name" => "img",
						   "description" => __('Enter the Image', SH_NAME )
						),
					)
				);

$sh_sc['sh_q_and_a']	=	array(
					"name" => __("Q & A", SH_NAME),
					"base" => "sh_q_and_a",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show Q & A', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textarea",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Text', SH_NAME ),
						   "param_name" => "text",
						   "description" => __('Enter Text to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of Q $ A to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'faqs_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
$sh_sc['sh_gallery']	=	array(
					"name" => __("Gallery", SH_NAME),
					"base" => "sh_gallery",
					"class" => "",
					"category" => __('Medicon', SH_NAME),
					"icon" => 'fa-briefcase' ,
					'description' => __('Show gallery images.', SH_NAME),
					"params" => array(
					   	
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Title', SH_NAME ),
						   "param_name" => "title",
						   "description" => __('Enter Title to Show.', SH_NAME )
						),
						array(
						   "type" => "textfield",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __('Number', SH_NAME ),
						   "param_name" => "num",
						   "description" => __('Enter Number of images to Show.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __( 'Category', SH_NAME ),
						   "param_name" => "cat",
						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'gallery_category', 'hide_empty' => FALSE ), true ) ),
						   "description" => __( 'Choose Category.', SH_NAME )
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order By", SH_NAME),
						   "param_name" => "sort",
						   'value' => array_flip( array('date'=>__('Date', SH_NAME),'title'=>__('Title', SH_NAME) ,'name'=>__('Name', SH_NAME) ,'author'=>__('Author', SH_NAME),'comment_count' =>__('Comment Count', SH_NAME),'random' =>__('Random', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Order", SH_NAME),
						   "param_name" => "order",
						   'value' => array_flip(array('ASC'=>__('Ascending', SH_NAME),'DESC'=>__('Descending', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
						array(
						   "type" => "dropdown",
						   "holder" => "div",
						   "class" => "",
						   "heading" => __("Gallery Type", SH_NAME),
						   "param_name" => "gallery_type",
						   'value' => array_flip(array('2_col'=>__('Gallery Two Col', SH_NAME),'3_col'=>__('Gallery Three Col', SH_NAME),'4_col'=>__('Gallery Four Col', SH_NAME),'6_col'=>__('Gallery Six Col', SH_NAME) ) ),			
						   "description" => __("Enter the sorting order.", SH_NAME)
						),
					)
				);
				
				
				
		
/*----------------------------------------------------------------------------*/
$sh_sc = apply_filters( '_sh_shortcodes_array', $sh_sc );
	
return $sh_sc;