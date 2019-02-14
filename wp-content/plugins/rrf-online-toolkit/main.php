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




//our shortcode
function rrfonline_shortcode_query($atts){
    extract( shortcode_atts( array(
        'count' => 2,
        'type' => 'page',
    ), $atts) );
     

     $arg = array(
     	'post_type' => $type,
     	'posts_per_page' => $count
     );
    $get_post = new WP_Query($arg);



    $plist_markup = '<ul>';
    	while($get_post->have_posts()) : $get_post->the_post();
    	$post_id = get_the_ID();
    	$plist_markup .='<li>'.get_the_title($post_id).'</li>';
    endwhile;

	$plist_markup .='</ul>';

	wp_reset_query();



	return $plist_markup;

}
add_shortcode('p_list', 'rrfonline_shortcode_query');  



//industry section title shortcode
function section_title_shortcode($atts){
    extract( shortcode_atts( array(
        'subtitle' => '',
        'title' => '',
        'description' => ''
    ), $atts) );
     

    $section_title = '<div class="section-title">';
    if(!empty($subtitle)) {
    	 $section_title .= '<h4>'.esc_html($subtitle).'</h4>';
    }

    if(!empty($title)) {
    	 $section_title .= '<h2>'.esc_html($title).'</h2>';
    }

    if(!empty($description)) {
    	 $section_title .= ''.wpautop( esc_html($description) ).'';
    }

    $section_title .= '</div>';
   

	return $section_title;

}
add_shortcode('section_title', 'section_title_shortcode');  



//industry service box shortcode
function service_box_shortcode($atts){
    extract( shortcode_atts( array(
        'icon_type' => 1,
        'fa_icon' => 'fa fa-star',
        'img_icon' => '',
        'title' => '',
        'description' => ''
    ), $atts) );


    $service_box ='<div class="service-box-markup">';

    if($icon_type == 1) {
    	$service_box .='<div class="service-icon">
			<i class="'.esc_attr($fa_icon).'"></i>
    	</div>';
    } else{

    	$service_image_array = wp_get_attachment_image_src($img_icon, 'thumbnail' );
    	$service_box .='<div class="service-box-image">
			<img src="'.esc_url($service_image_array[0]).'" alt="'.esc_html($title).'">
    	</div>';
    }

    if(!empty($title)) {
    	 $service_box .= '<h2>'.esc_html($title).'</h2>';
    }

    if(!empty($description)) {
    	 $service_box .= ''.wpautop( esc_html($description) ).'';
    }

    $service_box .= '</div>';

    return $service_box;

}
add_shortcode('service_box', 'service_box_shortcode');  



// slider custom post register

function custom_post_slide() {
    register_post_type( 'home-slider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
}

add_action( 'init', 'custom_post_slide' );


// slider shortcode
function main_slider_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 2,
        'type' => 'page',
    ), $atts) );
     

     $arg = array(
     	'post_type' => 'home-slider',
     	'posts_per_page' => -1
     );
    $get_post = new WP_Query($arg);


    $slider_random_number = rand(7564767, 5475647);

    $slide_shortcode = '
	<script>
		jQuery(window).load(function(){
			jQuery("#home-slide-markup-'.$slider_random_number.'").owlCarousel({
				items: 1,
				loop: true,
				nav: true,
				autoplay: false,
				dots: false,
				navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"]
			});
		});

	</script>



    <div id="home-slide-markup-'.$slider_random_number.'" class="home-slide-markup">';
    	while($get_post->have_posts()) : $get_post->the_post();
    	$post_id = get_the_ID();
    	$slide_shortcode .='
			<div style="background-image:url('.get_the_post_thumbnail_url($post_id, 'large').')" class="single-slide">
				<div class="single-slide-table">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2>'.get_the_title($post_id).'</h2>
								'.get_the_content($post_id).'
							</div>
						</div>
					</div>
				</div>
			</div>

    	';
    endwhile;

	$slide_shortcode .='</div>';

	wp_reset_query();



	return $slide_shortcode;

}
add_shortcode('slide_shortcode', 'main_slider_shortcode');  




//industry section title shortcode
function call_to_action_shortcode($atts){
    extract( shortcode_atts( array(
        'cta_title' => '',
    ), $atts) );
     

    $cta_shortcore = '<div class="cta-area">';
    $cta_shortcore .= '<h2>'.esc_html($cta_title).'</h2>';
    $cta_shortcore .= '</div>';
   

    return $cta_shortcore;

}
add_shortcode('cta_shortcore', 'call_to_action_shortcode');  





jhbjhj




















