<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>

<body <?php body_class('test');?>>

    <header>
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?php bloginfo('url')?>">
                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg " alt="logo" class="logo">
            </a>
            <?php wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'container' => 'nav'
            ) )?>


        </div>
    </header>