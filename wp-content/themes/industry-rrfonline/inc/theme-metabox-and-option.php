<?php 

require get_template_directory() . '/inc/cs-framework/cs-framework.php';

function theme_metabox($options) {
$options        = array();


$options[]    = array(
    'id'        => 'theme_slide_meta',
    'title'     => 'Slides Options',
    'post_type' => 'home-slider',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'theme_slides_metabox',
            'fields' => array(

            	array(
					  'id'               => 'buttons',
					  'type'             => 'group',
					  'title'            => 'Sliders Button',
					  'button_title'     => 'Add new',
					  'accordion-title'  => 'Add new button',
					  'fields'    => array(
					    array(
					      'id'    => 'type',
					      'type'  => 'select',
					      'title' => 'Button Type',
					      'options' =>	array(
					      	'bordered' => 'Bordered button',
					      	'filled' => 'Filled button',
					      	),
					    ),
					    array(
					      'id'    => 'text',
					      'type'  => 'text',
					      'title' => 'Button text',
					      'default' => 'Slide button',
					    ),
					    array(
					      'id'    => 'link_type',
					      'type'  => 'select',
					      'title' => 'Link type',
					      'options' => array(
					      	'1' => 'WordPress page',
					      	'2' => 'External link',
					      ),
					    ),
					    array(
					      'id'    => 'link_to_page',
					      'type'  => 'select',
					      'title' => 'Link to page',
					      'options' => 'page',
					      'dependency' => array('link_type', '==', '1')
					    ),
					    array(
					      'id'    => 'external_link',
					      'type'  => 'text',
					      'title' => 'External link',
					      'dependency' => array('link_type', '==', '2')
					    ),
					  ),
					),

                array(
                    'id'    => 'text_color',
                    'type'  => 'color_picker',
                    'title' => 'Slides text color',
                    'default' => '#333'
                ), 
                array(
                    'id'    => 'overlay_color',
                    'type'  => 'color_picker',
                    'title' => 'Slides overlay color',
                    'default' => '#333',
                    'dependency' => array('enable_overlay', '==', 'true')
                ), 
                array(
                    'id'    => 'enable_overlay',
                    'type'  => 'switcher',
                    'title' => 'Enable overlay',
                    'default' => false
                ), 
                array(
                    'id'    => 'overlay_opacity',
                    'type'  => 'number',
                    'title' => 'Overlay opacity',
                    'desc' => 'Type a number of overlay opacity. 1 - 100. Number only.',
                    'default' => 70,
                    'dependency' => array('enable_overlay', '==', 'true'),
                ),               
            ),
        ),
    ),
);


$options[]    = array(
    'id'        => 'theme_page_meta_option',
    'title'     => 'page Options',
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'theme__metabox',
            'fields' => array(
                array(
                    'id'    => 'enable_title',
                    'type'  => 'switcher',
                    'title' => 'Enable page title',
                    'default' => true
                ),               
            ),
        ),
    ),
);



	return $options;
}
add_filter('cs_metabox_options', 'theme_metabox');