<?php
/**
 *Plugin Name: Shortcode plugin
 *Description: This is a shortcode designed by Athul.
 */

function example_shortcode_for_ideaproio()
{
    $content='<h2> About Athul Rajagopal <h2>';
	$content.='<img src="http://localhost/wordpress/wp-content/uploads/2021/09/pexels-mentatdgt-937481.jpg" width="300px" height="200px" />';
	$content.='<p>This shortcode is designed and created by Athul. Contact me if any issue arises.</p>';
	return $content;
}

add_shortcode('myshortcode','example_shortcode_for_ideaproio');



?>