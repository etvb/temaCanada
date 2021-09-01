<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title>Document</title>
</head>
<body <?php body_class();?> > 
    
<div id="page">

    <heaer id="masthead" class="site-header" role="banner">
        <div class="container">
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/'));?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg" alt="logo toronto">
                </a>
            </h1>
            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </div>
    </heaer>
    <div id="contenido" class="container">

    