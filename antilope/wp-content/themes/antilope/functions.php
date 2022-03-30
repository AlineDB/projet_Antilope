<?php

// Lancer la sessions PHP pour pouvoir passer des variables de page en page
add_action('init', 'dw_start_session', 1);

function dw_start_session()
{
	if (! session_id()) {
		session_start();
	}
}

// désactive l'éditeur Gutenberg dans wordpress
add_filter('use_block_editor_for_post', '__return_false');

//activer les img sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un seul custom post-type pour "Dispositifs"
register_post_type('Dispositifs', [
	'label' => 'Dispositifs',
	'labels' => [
		'name' => 'Dispositifs',
		'singular_name' => 'Dispositif',
	],
	'description' => 'Tous les dispositifs',
	'public' => true,
	'menu_position' => 5,
	'menu_icon' => 'dashicons-category',
	'supports' => ['title','editor','thumbnail'],
	'rewrite' => ['slug' => 'dispositifs'],
]);

// Récupérer les dispositifs via une requête Wordpress
function dw_get_projects($count = 20)
{
	// 1. on instancie l'objet WP_Query
	$dispositifs = new WP_Query([
		'post_type' => 'Dispositifs',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $count,
	]);

	// 2. on retourne l'objet WP_Query
	return $dispositifs;
}