<?php  

add_action( 'wp_enqueue_scripts', 'style_theme' );

function style_theme (){
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css');
}	


add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery' , get_template_directory_uri() . '/assets/js/jquery.min.js' , false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('poptrox' , get_template_directory_uri() . '/assets/js/jquery.poptrox.min.js', array('jquery'),null,true);
	wp_enqueue_script('skel' , get_template_directory_uri() . '/assets/js/skel.min.js' , array('jquery'),null,true);
	wp_enqueue_script('util',get_template_directory_uri() . '/assets/js/util.js',array('jquery'),null,true);
	wp_enqueue_script('main',get_template_directory_uri() . '/assets/js/main.js',array('jquery'),null,true);
}    


?>