<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/css/all.css?v=<?=wp_get_theme()->get('Version')?>" />
    <script src="<?php bloginfo('template_url') ?>/js/respond.js"></script>
    <?php wp_head() ?>
</head>

<body>

<div class="center">

    <div class="header">

        <ul class="quick_links">
            <?php if (get_theme_mod('facebook')): ?>
                <li>
                    <a class="icon icon-facebook" href="<?=get_theme_mod('facebook')?>"></a>
                </li>
            <?php endif ?>
            <?php if (get_theme_mod('twitter')): ?>
                <li>
                    <a class="icon icon-twitter" href="<?=get_theme_mod('twitter')?>"></a>
                </li>
            <?php endif ?>
            <?php if (get_theme_mod('instagram')): ?>
                <li>
                    <a class="icon icon-instagram" href="<?=get_theme_mod('instagram')?>"></a>
                </li>
            <?php endif ?>
            <?php if (get_theme_mod('member_login')): ?>
                <li>
                    <a class="member_login" href="<?=get_theme_mod('member_login')?>">Member Login</a>
                </li>
            <?php endif ?>
        </ul>

        <?php if (get_theme_mod('logo')): ?>
            <a class="logo image" href="/">
                <div class="helper"></div>
                <img src="<?=get_theme_mod('logo')?>" alt="<?php bloginfo('blogname')?>">
            </a>
        <?php else: ?>
            <a class="logo text" href="/">
                <span><?php bloginfo('blogname')?></span>
            </a>
        <?php endif ?>

        <?=get_main_menu(2)?>

    </div>