<?php
/**
* functions.php
* 
*/


// 1) Enqueue theme stylesheets and scripts
function themeslug_enqueue_style() {
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', false ); 
	wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.min.style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

function themeslug_enqueue_script() {
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

// 2) Enable navigation menus
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//3) add active class to current page
function active_nav_class($classes, $item){
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'active_nav_class', 10, 2);

?>
