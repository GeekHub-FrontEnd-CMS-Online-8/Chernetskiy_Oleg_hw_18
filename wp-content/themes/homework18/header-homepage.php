<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>

<section class="homepage_history">
    <header class="header">
        <div class="header_box">
            <h2 class="header_box_title"><a href="#">akad.</a></h2>
            <div class="header_wrapper">
                <input class="header_checkbox" type="checkbox" id="check-menu">
                <label class="header_label" for="check-menu"></label>
                <div class="burger-line first"></div>
                <div class="burger-line second"></div>
                <div class="burger-line third"></div>
                <div class="burger-line fourth"></div>
                <nav class="main-menu header_links">
                    <?php
                    $massiv_vhodnih_parametrov = array(
                        'container' => false,
                        'echo' => false,
                        'items_wrap' => '%3$s',
                        'depth' => 0,
                    );
                    print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov), '<a>');
                    ?>
                </nav>
            </div>
        </div>
    </header>