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

//enregistrer les zones de menus
register_nav_menu('primary','Navigation principale (haut de page)');
register_nav_menu('footer','Navigation principale (pied de page)');

//fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objet
function dw_get_menu_items($location){
	$items = [];
	//récupérer le menu WP pour $location
	$locations = get_nav_menu_locations();
	if(!($locations[$location] ?? null)){//si dans locations il y a une clé location (si n'existe pas = null)
		return $items;
	}
	//récupérer tous les éléments du menu récupéré
	$menu = $locations[$location];
	$posts = wp_get_nav_menu_items($menu);

	//formater chaque élément dans une instance de classe personnalisée. Boucler sur chaque post pour transformer le WP_post en une instance
	//de notre classe perso et on va l'ajouter à $items sauf si sous menu à l'item parent
	foreach($posts as $post){
		$item = new PrimaryMenuItem($post);
		//retourner un tableau d'éléments du menu formaté
		$items[] = $item;
	}
	return $items;
}
