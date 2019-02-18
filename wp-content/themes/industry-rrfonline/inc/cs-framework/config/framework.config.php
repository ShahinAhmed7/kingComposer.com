<?php if ( ! defined( 'ABSPATH' ) ) { die; }

$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu',
  'menu_slug'       => 'nimbus-theme-options',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options',
);

$options        = array();


$options[]      = array(
  'name'        => 'general',
  'title'       => 'General Settings',
  'icon'        => 'fa fa-diamond',
  'fields'      => array(
    array(
      'id'    => 'consultation_btn',
      'type'  => 'text',
      'title' => 'Consultation button text',
      'default' => 'Free Consultation',
    ),
    array(
      'id'    => 'consultation_btn_link',
      'type'  => 'select',
      'title' => 'Consultation button link',
      'options' => 'page'
    ),
    array(
      'id'    => 'case_breadcrumb',
      'type'  => 'image',
      'title' => 'Case study breadcrumb image',
    ),
  ),
);


// Single page Sidebar
$options[]      = array(
  'name'        => 'single_page_sidebar',
  'title'       => 'Single page Settings',
  'icon'        => 'fa fa-diamond',
  'fields'      => array(
    array(
      'id'    => 'single_breadcrumb',
      'type'  => 'image',
      'title' => 'Single page breadcrumb image',
    ),
    array(
      'id'              => 'left_sidebar',
      'type'            => 'group',
      'title'           => 'Single sidebar item',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New item',
      'fields'          => array(
        array(
          'id'    => 'date_title',
          'type'  => 'text',
          'title' => 'Title',
        ),
        array(
          'id'    => 'date',
          'type'  => 'text',
          'title' => 'Text',
        ),
      ),
    ),
    array(
      'id'    => 'sidebar_btn_title',
      'type'  => 'text',
      'title' => 'Button title',
    ),
    array(
      'id'    => 'sidebar_btn',
      'type'  => 'text',
      'title' => 'Button text',
    ),
    array(
      'id'    => 'sidebar_btn_link',
      'type'  => 'select',
      'title' => 'Button link',
      'options' => 'page'
    ),
  ),
);

CSFramework::instance( $settings, $options );