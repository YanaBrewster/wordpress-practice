<?php

// load stylesheets
function load_css(){
//Bootstrap
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

//our own css at bottom so it's not overwritten
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
}

// hook
add_action('wp_enqueue_scripts','load_css');


// load scripts
function load_js(){
  wp_enqueue_script('jquery');
  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
  wp_enqueue_script('bootstrap');
}

// hook
add_action('wp_enqueue_scripts', 'load_js');


//theme support
//add menus
add_theme_support('menus');
//add thumbnails
add_theme_support('post_thumbnails');




// Where menus should appear
// register_nav_menus(
//   array(
//   'theme_location' => 'top-menu',
//   'menu' => 'top-bar',
//
//   )
//   )
//  add section above in header.php
