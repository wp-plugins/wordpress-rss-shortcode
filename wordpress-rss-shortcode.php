<?php
/*
Plugin Name: Wordpress RSS shortcode
Plugin URI: http://pepijndevos.nl/2010/06/wordpress-rss-widget-in-a-post-page/
Description: This plugin fetches an RSS feed as a shortcode
Author: Pepijn de Vos
Version: 1.1
Author URI: http://pepijndevos.nl
*/

function rsstag($atts) {
	$atts = shortcode_atts(array(
		'url' => get_bloginfo('rss2_url'),
		'show_author' => 0,
		'show_date' => 0,
		'show_summary' => 0
	), $atts);
	//var_dump($atts);
	ob_start();
	wp_widget_rss_output($atts['url'], $atts);
	$rss = ob_get_contents();
	ob_end_clean();
	return $rss;
}
add_shortcode('rsstag', 'rsstag');
?>
