<?php
add_action( 'init', 'register_post_types' );
function register_post_types() {
  register_post_type('realestate', [
	'labels' => [
	  'name'               => 'Недвижимость', 
	  'singular_name'      => 'Недвижимость', 
	  'add_new'            => 'Добавить недвижимость', 
	  'add_new_item'       => 'Добавление недвижимости', 
	  'edit_item'          => 'Редактирование недвижимости', 
	  'new_item'           => 'Новый обьект недвижимости', 
	  'view_item'          => 'Смотреть недвижимость', 
	  'search_items'       => 'Искать недвижимость', 
	  'not_found'          => 'Не найдено', 
	  'not_found_in_trash' => 'Не найдено в корзине', 
	  'menu_name'          => 'Недвижимость', 
	],
		'menu_icon'          => 'dashicons-admin-multisite',
		'public'             => true,
		'menu_position'      => 5,
		'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
		'has_archive'        => true,
  
   ] );

   register_taxonomy('realestate-categories', 'realestate', [
	  'labels'        => [
	  'name'                        => 'Тип недвижимости',
	  'singular_name'               => 'Тип недвижимости',
	  'search_items'                => 'Искать недвижимость',
	  'popular_items'               => 'Популярный тип недвижимости',
	  'all_items'                   => 'Все типы недвижимости',
	  'edit_item'                   => 'Изменить тип недвижимости',
	  'update_item'                 => 'Обновить тип недвижимости',
	  'add_new_item'                => 'Добавить новый тип недвижимости',
	  'new_item_name'               => 'Новое название категории',
	  'separate_items_with_commas'  => 'Отделить категории запятыми',
	  'add_or_remove_items'         => 'Добавить или удалить категорию',
	  'choose_from_most_used'       => 'Выбрать самую популярную категорию',
	  'menu_name'                   => 'Тип недвижимости',
	],
	'hierarchical'  => true,

  ]);

  register_post_type('agency', [
	'labels' => [
	  'name'               => 'Агенство', 
	  'singular_name'      => 'Агенство', 
	  'add_new'            => 'Добавить Агенство', 
	  'add_new_item'       => 'Добавление Агенства', 
	  'edit_item'          => 'Редактирование Агенства', 
	  'new_item'           => 'Новое Агенство', 
	  'view_item'          => 'Смотреть Агенство', 
	  'search_items'       => 'Искать Агенство', 
	  'not_found'          => 'Не найдено', 
	  'not_found_in_trash' => 'Не найдено в корзине', 
	  'menu_name'          => 'Агенство', 
	],
		'menu_icon'          => 'dashicons-admin-network',
		'public'             => true,
		'menu_position'      => 6,
		'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
		'has_archive'        => true,

   ] );
};