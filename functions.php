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

function cml_customize_register( $wp_customize ) {


    $wp_customize->add_section(
        'social_media_section',
        array(
            'title' => 'Налаштування соцмереж Сайту',
            'description' => "Тут можно налаштувати кнопки соц мереж"
        )
    );

    $wp_customize->add_setting('behance_img', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'behance_img', array(
        'label'    => 'Behance',
        'section'  => 'social_media_section',
        'settings' => 'behance_img',
    )));

    $wp_customize->add_setting(
        'behance',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'behance',
        array(
            'type' => 'text',
            'label' => "Behance",
            'section' => 'social_media_section',
            'settings' => 'behance'
        )
    );

    $wp_customize->add_setting('instagram_img', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'instagram_img', array(
        'label'    => 'Instagram',
        'section'  => 'social_media_section',
        'settings' => 'instagram_img',
    )));

    $wp_customize->add_setting(
        'instagram',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'instagram',
        array(
            'type' => 'text',
            'label' => "Instagram",
            'section' => 'social_media_section',
            'settings' => 'instagram'
        )
    );

    $wp_customize->add_setting('facebook_img', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'facebook_img', array(
        'label'    => 'Facebook',
        'section'  => 'social_media_section',
        'settings' => 'facebook_img',
    )));

    $wp_customize->add_setting(
        'facebook',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'facebook',
        array(
            'type' => 'text',
            'label' => "Facebook",
            'section' => 'social_media_section',
            'settings' => 'facebook'
        )
    );

    // phone

    $wp_customize->add_section(
        'phone_section',
        array(
            'title' => 'Налаштування Номерів Телефону',
            'description' => "Тут можно налаштувати номери телефонів"
        )
    );

    $wp_customize->add_setting(
        'number1',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'number1',
        array(
            'type' => 'text',
            'label' => "Номер",
            'section' => 'phone_section',
            'settings' => 'number1'
        )
    );

    $wp_customize->add_setting(
        'number2',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'number2',
        array(
            'type' => 'text',
            'label' => "Номер в контактс та футері",
            'section' => 'phone_section',
            'settings' => 'number2'
        )
    );

    $wp_customize->add_setting(
        'number3',
        array(
            'default' => '',
            'type' => 'option'
        )
    );

    $wp_customize->add_control(
        'number3',
        array(
            'type' => 'text',
            'label' => "Номер",
            'section' => 'phone_section',
            'settings' => 'number3'
        )
    );

    // email

    $wp_customize->add_section(
        'email_section',
        array(
            'title' => 'Налаштування електронної пошти',
            'description' => "Тут можно налаштувати адресу скриньки"
        )
    );

    $wp_customize->add_setting( 'email' , array(

        'default'     => '',
        'type' => 'option'
    ) );

    $wp_customize->add_control( 'email', array(
        'type' => 'text',
        'label'        => 'Email',
        'section'    => 'email_section',
        'settings'   => 'email',
    ));

}

add_action( 'customize_register', 'cml_customize_register' );

