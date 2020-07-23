<?php

// retait de la version php 
remove_action('wp_head', 'wp_generator');

// cache les errors wp login 
add_filter('login_errors', 'wpm_hide_errors');

function wpm_hide_errors() {
	// On retourne notre propre phrase d'erreur
	return "L'identifiant ou le mot de passe est incorrect";
}

// Ajout du changement du logos dans les parametre du identity site 
function logos() {
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','logos');

// Remove admin bar
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
	wp_enqueue_style( 'main', get_stylesheet_directory_uri().'/css/main.css', ['bootstrap'] );
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri().'/css/responsive.css', ['main'] );
}
add_action( 'wp_enqueue_scripts', 'effet' );

// WOOCOMMERCES
// remove des wrappers WooCommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// ajoute des wrappers WooCommerce Perso
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

// Ajout du support WooCommerces
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 250,
        'single_image_width'    => 300,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Declare support for selective refreshing of widgets
add_theme_support( 'customize-selective-refresh-widgets' );


// Déclaration CSS 
wp_enqueue_style( 
	'effect', 
	get_template_directory_uri() . '/css/main.css',
	array(), 
	'1.0'
);

wp_enqueue_style( 
	'resp', 
	get_template_directory_uri() . '/css/responsive.css',
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
