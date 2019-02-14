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
	
	} // End if

}  
 