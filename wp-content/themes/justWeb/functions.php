<?php
function justweb_scripts(){
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script("jsscript",get_template_directory_uri().'/scripts/functions.js');
  register_nav_menus(array('Main Menu' => __('Primary Menu'),'Social Menu' => __('Social Media')));
  }
add_action('init','justweb_scripts');
function justweb_register_nav_menus(){
}
//add_action('init','justweb_register_nav_menus');
?>
