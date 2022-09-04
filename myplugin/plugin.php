<?php 

/* 
Plugin Name: MyPlugin
Author: Test

*/ 
function libload()
{
    wp_enqueue_style('style_file' , plugin_dir_url(__FILE__).'/css/style.css');
    wp_enqueue_script('js_file',  plugin_dir_url(__FILE__).'/js/scripts.js', array(), null, true);
}

add_action('wp_enqueue_scripts','libload');