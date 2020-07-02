<?php

// retait de la version php 
remove_action('wp_head', 'wp_generator');

// cache les errors wp login 
add_filter('login_errors', 'wpm_hide_errors');

function wpm_hide_errors() {
	// On retourne notre propre phrase d'erreur
	return "L'identifiant ou le mot de passe est incorrect";
}

// remove admin bar
add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// add Menus
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

function effet() {
    // chargement de la feuille de style du thème
    wp_enqueue_style( 'bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", [] );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri().'css/main.css', ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'effet' );

// Déclaration CSS 
wp_enqueue_style( 
	'effect', 
	get_template_directory_uri() . '/css/main.css',
	array(), 
	'1.0'
);

// Déclarer style.css à la racine du thème
wp_enqueue_style( 
	'effect',
	get_stylesheet_uri(), 
	array(), 
	'1.0'
);

