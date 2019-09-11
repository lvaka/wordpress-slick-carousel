<?php
/**
* Plugin Name: Custom Slick Carousel
* Plugin URI: ''
* Description: Shortcode to create Slick Carousel
* Version: 1.1
* Author: L_Vaka
* Author URI: https://ericjshin.com
*/

if ( !function_exists('slick_carousel') ){
	function slick_carousel($atts, $content = null) {

		//Attributes
		extract(shortcode_atts(
			array(
				"class" => 'slick-slider',
				"images" => '',
				"slidestoshow" => '7',
				"slidestoscroll" => '1',
				"arrows" => 'false',
				"dots" => 'true',
				"infinite" => 'true',
				"autoplay" => 'true',
				"autoplayspeed" => '2000',
				"speed" => '300',				
				"responsive" => '',
				"variablewidth" => 'false',
			),
			$atts
		));
		$responsive = str_replace('`','',$responsive);
		wp_enqueue_style ('slick_carousel_style', plugin_dir_url( __FILE__ ) . '/assets/slick.css');
		wp_enqueue_style ('slick_carousel_style', plugin_dir_url( __FILE__ ) . '/assets/slick-theme.css');
        wp_enqueue_script ('slick_carousel_script', plugin_dir_url( __FILE__ ) . '/assets/slick.min.js');

        $imageList = explode(',', $images);

        $newCarousel = '<div class="'.$class.'">';
        foreach($imageList as $imageID){
        	$newCarousel .= '<div>'.wp_get_attachment_image($imageID, 'small').'</div>';
        }
        $newCarousel .= '</div>';
        $newCarousel .= '<script>jQuery(document).ready(function(){
							  jQuery(".'.$class.'").slick({
							    slidesToShow:'.$slidestoshow.',
							    slidesToScroll:'.$slidestoscroll.',
							    arrows:'.$arrows.',
							    infinite:'.$infinite.',
							    autoplaySpeed:'.$autoplayspeed.',
							    autoplay:'.$autoplay.',
							    dots:'.$dots.',
							    responsive:['.$responsive.'],
							    variableWidth: '.$variablewidth.',
							  });
							});
						</script>';

		return $newCarousel;
	}
	add_shortcode('slick_carousel', 'slick_carousel');
}
