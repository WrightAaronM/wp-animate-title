<?php
/**
 * @package Animate_Title
 * @version 1.0
 */
/*
Plugin Name: Animate Title
Plugin URI: https://github.com/WrightAaronM/wp-animate-title
Description: Uses Animate.css to animate the blog post title
Author: Aaron Wright
Version: 1.0
Author URI: http://aaronwright.net
*/

/*
 This is what adds the css file to the document, but it has to be called at a certain time.
 That's what add_action does below. When the wp_enqueue_scripts hook occurs, it runs this function
 and adds the css file to the document.
 The first parameter is a handle that must be unique. The second is the source, which can be
 something like a CDN like this one or a local file like the JS file below.
 There are other options too that I'm not using here, like if the file has a dependency
 to load first or something.
 https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function addCssFiles(){
  wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
}

function addScripts(){
  /* The correct way to get the URL is with the plugins_url() function, because
  * people can change where plugins are stored.
  */
  wp_enqueue_script('animate-title', plugins_url('animate-title.js', __FILE__));
}

/* Note that CSS and javascript are both enqued with the wp_enqueue_scripts event,
* but they have different functions for enqueuing each.
*/
add_action('wp_enqueue_scripts', 'addCssFiles');
add_action('wp_enqueue_scripts', 'addScripts');
