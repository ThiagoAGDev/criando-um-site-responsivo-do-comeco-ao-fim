<?php
	// ativando suporte a imagem destacada
	add_theme_support('post-thumbnails');

	// ativando menus dinamicos
	function register_my_menus() {
		register_nav_menus(
		array(
				'header-menu' => __('Menu do Topo')
			)
		);
	}
	add_action('init', 'register_my_menus');

	// Meus posts types
	function meus_posts_types() {
		// Habilidades
		register_post_type('habilidades',
			array(
				'labels'			=> array(
					'name'			=> __('Habilidades'),
					'singular_name' =>	__('Habilidade')
					),
				'public'			=> true,
				'has_archive'		=> true,
				'menu_icon'			=> 'dashicons-welcome-learn-more',
				'supports'			=>	array('title', 'thumbnail', 'page-attributes'),
				)

		);
	}
	add_action('init', 'meus_posts_types');