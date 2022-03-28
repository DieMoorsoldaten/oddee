<?php

add_action( 'wp_enqueue_scripts', 'my_scripts_method');

function my_scripts_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
} 

add_action( "wp_enqueue_scripts", "oddee_scripts" );

function oddee_scripts() {
    wp_enqueue_style( "bootstrap_css" , "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" );
    wp_enqueue_style( "style_css", get_stylesheet_uri() );

    wp_enqueue_script("script_js", get_template_directory_uri() . "/js/scripts.js", array(), false, true);
    wp_enqueue_script("bootstrap_js" , "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js", array(), false, true);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'align-wide' );

require_once "assets/functions/shortcode.php";
require_once "assets/functions/custom_post_types.php";
require_once "assets/functions/customizer.php";

add_action( "nav_menu_link_attributes", "filter_nav_menu_link_attributes", 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu) {
        $atts['class'] = 'nav-link';

        if($item->current) {
            $atts['class'] = 'nav-link' . ' active';
        }
        
    }
    return $atts;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_link', 10, 4 );
function filter_nav_menu_link( $classes, $item, $args, $depth ){
		$classes[] = 'nav-item';
	return $classes;
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
