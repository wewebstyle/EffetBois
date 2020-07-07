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
<body id="fond">

    <nav class="navbar navbar-light" style="background-color: #98FB98;">
    <?php 
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id , 'full');
    ?>
    <img class="effect_logos" data-src="" src="<?php echo $image[0];?>" alt="logos">
        <div class="container">
            <div class="menu" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <ul href="#wrap" id="open" class="navbar-nav mr-auto">
            <?php wp_nav_menu( array( 
                'container'  => '',
                'items_wrap' => '%3$s',
                )); ?>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <ul>
            </div>
            <script>
            function myFunction(x) {
            x.classList.toggle("change");
            }
            </script>
        </div>
    </nav>
