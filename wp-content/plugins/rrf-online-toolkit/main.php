<?php 

/*
Plugin Name: Toolkit
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Shahin Ahmed
Version: 1.0
Author URI: http://ma.tt/
*/


// Enqueue plugin css
function toolkit_include_files(){
	wp_enqueue_style('toolkit-css', plugins_url('/assets/css/toolkit.css', __FILE__) );
	wp_enqueue_style('owlcarousel-css', plugins_url('/assets/css/owl.carousel.css', __FILE__) );



	wp_enqueue_script('owlcarousel-js', plugins_url('/assets/js/owl.carousel.min.js', __FILE__), 'jquery', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'toolkit_include_files' );



// include shortcode and addon

include_once('theme-shortcode.php');
include_once('kc-addon.php');



//  page list
function crazy_toolkit_get_page_as_list(){
    $args = wp_parse_args( array(
            'post_type' => 'page',
            'numberposts' => '-1'
     ));

    $posts = get_posts( $args);

    $post_options = array(esc_html__('-- selest page--', 'crazy-toolkit')=>'');
    if( $posts ) {
        foreach ($posts as $post){
            $post_options[$post->post_title] = $post->ID;
        }
    }
    return  $post_options;
}















