<?php
 
add_action('init', 'theme_kc_addon_name', 99 );
 
function theme_kc_addon_name() {
 
	if (function_exists('kc_add_map')) 
	{ 
	    kc_add_map(
	        array(
	        	// Section title addon
	            'section_title' => array(
	                'name' => 'Section Title',
	                'description' => __('Section title addons', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'My-Theme',
	                'params' => array(
	                    array(
	                        'name' => 'subtitle',
	                        'label' => 'Sub title',
	                        'type' => 'text',
	                        'description' => 'Type section subtitle here.',
	                    ),
	                    array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type section title here.',
	                    ),
	                    array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type section description here.',
	                    ),
	                )
	            ),  // End of elemnt kc_icon 
	        )
	    ); // End add map


	    kc_add_map(
	        array(
	        	// Service box adddon
	            'service_box' => array(
	                'name' => 'Service Box',
	                'description' => __('Service box addons', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'My-Theme',
	                'params' => array(
	                    array(
	                        'name' => 'icon_type',
	                        'label' => 'Icon type',
	                        'type' => 'select',
	                        'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'1' => 'Select icon',
								'2' => 'Upload Icon',
							),
							'description' => 'Select service box icon',
							'value' => 1
	                    ),
	                    array(
	                        'name' => 'fa_icon',
	                        'label' => 'Icon',
	                        'type' => 'icon_picker',
	                        'description' => 'Chose icon here.',
	                        'relation' => array(
						        'parent'    => 'icon_type',
						        'show_when' => '1'
						    )
	                    ),
	                    array(
	                        'name' => 'img_icon',
	                        'label' => 'Image icon',
	                        'type' => 'attach_image',
	                        'description' => 'Upload image icon.',
	                        'relation' => array(
						        'parent'    => 'icon_type',
						        'show_when' => '2'
						    )
	                    ),
	                    array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type text here.',
	                    ),
	                    array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type Details content here.',
	                    ),
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map


	    kc_add_map(
	        array(
	        	// Service box 2 adddon
	            'service_box2' => array(
	                'name' => 'Service Box 2',
	                'description' => __('Service box addons', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'My-Theme',
	                'params' => array(
	                    array(
	                        'name' => 'img',
	                        'label' => 'Upload Image',
	                        'type' => 'attach_image',
	                        'description' => 'Upload image here.',
	                    ),
	                    array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type text here.',
	                    ),
	                    array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type Details content here.',
	                    ),
	                    array(
	                        'name' => 'link',
	                        'label' => 'Link',
	                        'type' => 'link',
	                        'description' => ''
	                    ),
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map


	    kc_add_map(
	        array(
	        	// Call to action button adddon
	            'cta_' => array(
	                'name' => 'Call to action button',
	                'description' => __('Call to action addons', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'My-Theme',
	                'params' => array(
	                    array(
	                        'name' => 'link',
	                        'label' => 'Link',
	                        'type' => 'link',
	                        'description' => ''
	                    ),
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map

	    kc_add_map(
	        array(
        	// Slider adddon
            'slide_shortcode' => array(
                'name' => 'Slider',
                'description' => __('Slider addons', 'KingComposer'),
                'icon' => 'sl-paper-plane',
                'category' => 'My-Theme',
                'params' => array(
                    array(
                        'name' => 'count',
                        'label' => 'Slides count',
                        'type' => 'text',
						'description' => '',
						'value' => 3
                    ),
                    array(
                        'name' => 'height',
                        'label' => 'Slides height',
                        'type' => 'text',
						'description' => '',
						'value' => 600
                    ),
                    array(
                        'name' => 'loop',
                        'label' => 'Loop',
                        'type' => 'select',
						'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
							'true' => 'Yes',
							'false' => 'No',
							),
						'description' => '',
						'value' => 'true'
	                    ),
                    array(
                        'name' => 'nav',
                        'label' => 'Nav',
                        'type' => 'select',
						'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
							'true' => 'Yes',
							'false' => 'No',
							),
							'description' => '',
							'value' => 'true'
	                    ),
                    array(
                        'name' => 'autoplay',
                        'label' => 'Autoplay',
                        'type' => 'select',
						'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
							'true' => 'Yes',
							'false' => 'No',
							),
							'description' => '',
							'value' => 'true'
	                    ),
                    array(
                        'name' => 'autoPlayTimeout',
                        'label' => 'Slides count timeout',
                        'type' => 'text',
						'description' => 'Type slides in mili seconds',
						'value' => 5000,
						'relation' => array(
					        'parent'    => 'autoplay',
					        'show_when' => 'true'
					    ),
                    ),
                    array(
                        'name' => 'dots',
                        'label' => 'Dots',
                        'type' => 'select',
						'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
							'true' => 'Yes',
							'false' => 'No',
							),
							'description' => '',
							'value' => 'false'
	                    ),
                    ),
	            ),  // End of elemnt kc_icon 
	        )
	    ); // End add map
	
	} // End if

}  
 