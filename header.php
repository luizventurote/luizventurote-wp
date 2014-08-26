<!doctype html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=10" />
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- Icons -->
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">

        <!-- Style -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">

        <!-- Modernizr -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.6.2.min.js"></script>

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

        <header>

            <menu class="menu main-menu row" id="main-menu">          
                <nav class="container">
                    <ul class="col-sm-12">
                        <li><a href="#"><?php _e( 'About', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Blog', 'swp' ) ?></a></li>
                        <li><a href="#"><?php _e( 'Talks', 'swp' ) ?></a></li>
                        <li><a href="https://www.behance.net/luizventurote"><?php _e( 'Portfolio', 'swp' ) ?></a></li>
                        <li><a href="https://github.com/luizventurote"><?php _e( 'Github', 'swp' ) ?></a></li>
                    </ul>
                </nav>
            </menu>

            <div class="main-header row">

                <div class="container">

                    <div class="col-sm-12 header-container">

                        <div class="menu menu-btn" id="touch-menu"><span></span></div>

                        <a href="<?= home_url() ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Luiz Venturote // Front-End Developer">
                            <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                        </a>


                        

                    </div>

                </div>

            </div>
            
        </header>

        <main class="row">

            <section class="container">