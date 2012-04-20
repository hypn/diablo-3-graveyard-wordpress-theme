<?php

if (function_exists('register_sidebar')) {
	register_sidebar(array(
	'description' => 'The primary widget area', 'ideatree', 
	'before_widget' => '<ul class="widget"><li id="%1$s" class="widget-container %2$s">', 
	'after_widget' => '</li></ul>', 
	'before_title' => '<h2 class="widgettitle">', 
	'after_title' => '</h2>',)
	);
}

function notitle($menu){
	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}

add_filter('wp_page_menu', 'notitle');

add_theme_support('automatic-feed-links');

add_action('wp_enqueue_scripts', 'font_add_my_stylesheet');

function font_add_my_stylesheet() {
	wp_register_style( 'font-style', "http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic");
	wp_enqueue_style('font-style');
}
	
?>