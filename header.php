<?php $logoimg=get_header_image() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title>Best Value Web Development Services in India</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $logoimg;?>">
    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/feature.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <main class="page-wrapper">
        <header class="rainbow-header header-default header-left-align header-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6 col-4 position-static">
                        <div class="header-left d-flex">
                            <div class="logo">
                                <a href="<?php get_bloginfo('wpurl'); ?>">
                                    <img class="logo-light" src="<?php echo $logoimg;?>" alt="Corporate Logo">
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-4 col-4 position-static">
                        <div class="header-right d-flex">
                            <nav class="mainmenu-nav d-none d-lg-block">
                                <?php 
                                    wp_nav_menu(array('theme_location'=> 'primary-menu','menu_class'=>'nav'))
                                ?>
                            </nav>
                            <div class="p-3 mobilenumber">
                                <span class="color-white material-icons">
                                    call
                                </span>
                                <a href="#" class="color-white"style="font-size: 15px;">
                                    +917988291614
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>