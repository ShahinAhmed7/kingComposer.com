<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
    'id'        => 'nimbus_page_options',
    'title'     => 'Custom Page Options',
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(
        array(
            'name'  => 'nimbus_page_section_1',
            'fields' => array(
                array(
                    'id'    => 'enable_title',
                    'type'  => 'switcher',
                    'title' => esc_html__( 'Enable page title with Breadcrumb?', 'nimbus' ),
                    'default'=> true,
                    'desc'  => esc_html__( 'Yes! Please switch on.', 'nimbus' ),
                ),
                array(
                    'id'    => 'custom_title',
                    'type'  => 'wysiwyg',
                    'title' => esc_html__( 'Custom title', 'nimbus' ),
                    'desc'  => esc_html__( 'Type custom title here', 'nimbus' ),
                    'dependency' => array('enable_title', '==', 'true'),
                ),               
            ),
        ),
    ),
);

$options[]    = array(
    'id'        => 'service_post_options',
    'title'     => 'Service post Options',
    'post_type' => 'service',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'service_post_options_meta',
            'fields' => array(
                array(
                    'id'    => 'service_btn',
                    'type'  => 'text',
                    'title' => 'Button text',
                ),               
            ),
        ),
    ),
);

$options[]    = array(
    'id'        => 'cst_post_options',
    'title'     => 'Case study post Options',
    'post_type' => 'cst',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'cst_post_options_meta',
            'fields' => array(
                array(
                    'id'    => 'cst_btn',
                    'type'  => 'text',
                    'title' => 'Button text',
                ),
                array(
                    'id'    => 'cst_btn_link',
                    'type'  => 'select',
                    'title' => 'Button link',
                    'options' => 'page'
                ),               
            ),
        ),
    ),
);

$options[]    = array(
    'id'        => 'cstudy_post_options',
    'title'     => 'Case study Post Options',
    'post_type' => 'post',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'  => 'cstudy_post_options_meta',
            'fields' => array(
                array(
                    'id'    => 'omera_bg_color',
                    'type'  => 'color_picker',
                    'title' => 'Each post background color',
                    'default' => '#1C7F7B'
                ),
                array(
                    'id'    => 'omera_btn',
                    'type'  => 'text',
                    'title' => 'Button text',
                    'default' => 'View Case Study'
                ),               
            ),
        ),
    ),
);

CSFramework_Metabox::instance( $options );
