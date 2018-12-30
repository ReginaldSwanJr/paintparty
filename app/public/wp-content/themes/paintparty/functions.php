<?php 
function ay_files() {
	wp_enqueue_style('ay_BSstyle', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style('ay_styles', get_stylesheet_uri());
	
    wp_enqueue_script('ay_BSscript', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') ,true);

}

function register_my_menu() {
  register_nav_menus( array(
  	'primary' => 'Main Menu',
  	'footer_Menu' => 'Footer Menu'
  ) );
}



add_action( 'init', 'register_my_menu' );
add_action('wp_enqueue_scripts', 'ay_files');
