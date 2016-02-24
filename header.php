<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right').bloginfo('name') ?></title>
    <meta name="description" content="<?php bloginfo('description')?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/css/all.css" />
    <script src="<?php bloginfo('template_url') ?>/js/respond.js"></script>
    <?php wp_head() ?>
</head>

<body>

<div class="center">

    <div class="header">

        <?php if (get_theme_mod('logo')): ?>
            <a class="logo image" href="/">
                <div class="helper"></div>
                <img src="<?=get_theme_mod('logo')?>" alt="<?php bloginfo('blogname')?>">
            </a>
        <?php else: ?>
            <a class="logo text" href="/">
                <?php bloginfo('blogname')?>
            </a>
        <?php endif ?>

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

        <?php wp_nav_menu([
            'theme_location' => 'main_menu',
            'depth' => 1,
            'menu_class' => 'menu',
            'container' => '',
        ]) ?>

    </div>

    <?php if (has_post_thumbnail($post->ID)): ?>
        <?php if (is_front_page()): ?>
            <div class="banner home">
                <?=get_the_post_thumbnail($post->ID, 'banner_large') ?>
                <div class="join_us">
                    <h2><span>Join us</span> <span>this Sunday</span></h2>
                    <ul>
                        <?php if (get_theme_mod('church_address')): ?>
                            <li class="church_address">
                                <div class="icon icon-location"></div>
                                We're located at <?=get_theme_mod('church_address')?>.
                            </li>
                        <?php endif ?>
                        <?php if (get_theme_mod('service_times')): ?>
                            <li class="service_times">
                                <div class="icon icon-clock"></div>
                                Service times are at <?=get_theme_mod('service_times')?>.
                            </li>
                        <?php endif ?>
                        <?php if (get_theme_mod('livestream')): ?>
                            <li class="livestream">
                                <div class="icon icon-video"></div>
                                Join us online via our <a href="<?=get_theme_mod('livestream')?>">livestream</a>.
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        <?php else: ?>
            <div class="banner">
                <?=get_the_post_thumbnail($post->ID, 'banner_small') ?>
            </div>
        <?php endif ?>
    <?php endif ?>

    <div class="content <?=get_sub_menu() ? 'with_sub_menu' : 'without_sub_menu'?>">

        <div class="heading">
            <div class="section">
                <?php if (get_sub_menu()): ?>
                    <?=get_section_name()?>
                <?php endif ?>
            </div>
            <h1 class="title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
        </div>

        <?=get_sub_menu()?>

        <div class="wysiwyg">