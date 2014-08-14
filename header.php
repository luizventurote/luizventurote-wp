<!doctype html>
<html lang="pt-br">
    <head>

        <meta charset="UTF-8">
        <title>Luiz Venturote // Front-End Developer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icons -->
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">

        <!-- Modernizr -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.6.2.min.js"></script>

        <?php wp_head(); ?>

    </head>
    <body>

        <header>

            <menu class="menu main-menu row" id="main-menu">          
                <nav class="container">
                    <ul class="col-sm-12">
                        <li><a href="#"><?php _e( 'About', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Blog', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Talks', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Portfolio', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Github', 'swp' ) ?></a></li>
                    </ul>
                </nav>
            </menu>

            <div class="main-header row">

                <div class="container">

                    <div class="col-sm-12 header-container">

                        <div class="menu menu-btn" id="touch-menu"><span></span></div>

                        <a href="#" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Luiz Venturote // Front-End Developer">
                            <h1>Luiz Venturote // Front-End Developer</h1>
                        </a>

                    </div>

                </div>

            </div>
            
        </header>

        <main class="row">

            <section class="container">