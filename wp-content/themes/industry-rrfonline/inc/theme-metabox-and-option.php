<?php 

require get_template_directory() . '/inc/cs-framework/cs-framework.php';

function theme_metabox($options) {
$options        = array();


$options[]    = array(
    'id'        => 'slide_metabox',
    'title'     => 'Slides Options',
    'post_type' => 'home-slider',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'theme_slides_metabox',
            'fields' => array(
                array(
                    'id'    => 'text_color',
                    'type'  => 'color_picker',
                    'title' => 'Slides text color',
                    'default' => '#333'
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
    'id'        => 'page_metabox',
    'title'     => 'page Options',
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'theme_page_metabox',
            'fields' => array(
                array(
                    'id'    => 'text_color',
                    'type'  => 'color_picker',
                    'title' => 'Slides text color',
                    'default' => '#333'
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



	return $options;
}
add_filter('cs_metabox_options', 'theme_metabox');