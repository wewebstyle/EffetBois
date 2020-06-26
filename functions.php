<?php

// retait de la version php 
remove_action('wp_head', 'wp_generator');

// cache les errors wp login 
add_filter('login_errors', 'wpm_hide_errors');

function wpm_hide_errors() {
	// On retourne notre propre phrase d'erreur
	return "L'identifiant ou le mot de passe est incorrect";
}

//