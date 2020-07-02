<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!-- META -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

    <nav class="navbar navbar-light" style="background-color: #00FF7F;">
        <div class="container">
            <ul class="navbar-nav mr-auto">
            <?php 
                $custom_logo_id = get_theme_mod('custom_logo');
                $image = wp_get_attachment_image_src($custom_logo_id , 'full');
            ?>
            <img src="<?php echo $image[0]; ?>" alt="">
            <?php wp_nav_menu( array( 
                'container'  => '',
                'items_wrap' => '%3$s',
                )); ?>
            <ul>
        </div>
    </nav>
