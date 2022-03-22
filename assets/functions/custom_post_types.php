<?php

add_action( 'init', 'register_post_types_footer' );
function register_post_types_footer(){
	register_post_type( 'footer', [
		'label'  => null,
		'labels' => [
			'name'               => 'Футер',
			'singular_name'      => 'Футер',
			'add_new'            => 'Добавити Футер',
			'add_new_item'       => 'Добавити Футер',
			'edit_item'          => 'Редагування Футера',
			'new_item'           => 'Новий Футер',
			'view_item'          => 'Дивитися Футер',
			'search_items'       => 'Шукати Футер',
			'not_found'          => 'Не знайдено',
			'not_found_in_trash' => 'Не знайдено в корзині',
			'parent_item_colon'  => '',
			'menu_name'          => 'Футер',
		],
		'description'         => '',
		'public'              => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-welcome-learn-more',
        'show_in_rest'        => true,
		'hierarchical'        => false,
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
        'supports'            => array( 'title', 'editor', 'thumbnail'),
	] );
}

// add_action( 'init', 'register_post_types_main_head' );
// function register_post_types_main_head(){
// 	register_post_type( 'main_head', [
// 		'label'  => null,
// 		'labels' => [
// 			'name'               => 'Шапка',
// 			'singular_name'      => 'Шапка',
// 			'add_new'            => 'Добавити Шапку',
// 			'add_new_item'       => 'Добавити Шапку',
// 			'edit_item'          => 'Редагування Шапки',
// 			'new_item'           => 'Нова Шапка',
// 			'view_item'          => 'Дивитися Шапку',
// 			'search_items'       => 'Шукати Шапку',
// 			'not_found'          => 'Не знайдено',
// 			'not_found_in_trash' => 'Не знайдено в корзині',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Main Шапка',
// 		],
// 		'description'         => '',
// 		'public'              => true,
// 		'menu_position'       => 5,
// 		'menu_icon'           => 'dashicons-welcome-learn-more',
//         'show_in_rest'        => true,
// 		'hierarchical'        => false,
// 		'taxonomies'          => [],
// 		'has_archive'         => false,
// 		'rewrite'             => true,
// 		'query_var'           => true,
//         'supports'            => array( 'title', 'editor', 'thumbnail'),
// 	] );
// }
