<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <?php wp_nav_menu( array( 'theme_location' => 'main') ); ?>
    </nav>
