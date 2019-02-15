<?php  

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



//industry service box shortcode
function service_box_shortcode2($atts){
    extract( shortcode_atts( array(
        'img' => '',
        'title' => '',
        'description' => '',
        'link' => ''
    ), $atts) );


    $service_box2 ='<div class="service-box-markup2">';

        $service_image_array = wp_get_attachment_image_src($img, 'large' );
        $service_box2 .='<div class="service-box-image2">
            <img src="'.esc_url($service_image_array[0]).'" alt="'.esc_html($title).'">
        </div>';


    if(!empty($title)) {
         $service_box2 .= '<h2>'.esc_html($title).'</h2>';
    }

    if(!empty($description)) {
         $service_box2 .= ''.wpautop( esc_html($description) ).'';
    }

     if(!empty($link)) {
        $link_array = explode('|', $link);
         $service_box2 .= '<a class="boxed-btn" href="'.$link_array[0].'" targer="'.$link_array[2].'">'.$link_array[1].'</a>';
    }

    $service_box2 .= '</div>';

    return $service_box2;

}
add_shortcode('service_box2', 'service_box_shortcode2');  





//industry call to action shortcode
function call_to_action($atts){
    extract( shortcode_atts( array(
        'link' => ''
    ), $atts) );

    $cta_ ='<div class="call_to_action_btn">';
         if(!empty($link)) {
        $link_array = explode('|', $link);
         $cta_ .= '<a class="cta-btn" href="'.$link_array[0].'" targer="'.$link_array[2].'">'.$link_array[1].'</a>';
    }
    $cta_ .='</div>';

    return $cta_;
}
add_shortcode('cta_', 'call_to_action');  





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
        'count' => 3,
        'loop' => 'true',
        'nav' => 'true',
        'autoplay' => 'false',
        'dots' => 'false',
        'height' => '600',
        'autoPlayTimeout' => 6000,

    ), $atts) );
     

     $arg = array(
     	'post_type' => 'home-slider',
     	'posts_per_page' => $count
     );
    $get_post = new WP_Query($arg);


    $slider_random_number = rand(7564767, 5475647);

    $slide_shortcode = '
	<script>
		jQuery(window).load(function(){
			jQuery("#home-slide-markup-'.$slider_random_number.'").owlCarousel({
				items: 1,
				loop: '.$loop.',
				autoPlayTimeout:'.$autoPlayTimeout.',
				nav: '.$nav.',
				autoplay: '.$autoplay.',
				dots: '.$dots.',
				navText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"]
			});
		});

	</script>

    <div id="home-slide-markup-'.$slider_random_number.'" class="home-slide-markup">';
    	while($get_post->have_posts()) : $get_post->the_post();
    	$post_id = get_the_ID();
    	$slide_shortcode .='
			<div style="height:'.$height.'px;background-image:url('.get_the_post_thumbnail_url($post_id, 'large').')" class="single-slide">
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





















