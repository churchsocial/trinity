<?php get_header() ?>

    <?php while (have_posts()) : the_post(); ?>

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

            <div class="headings">
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

            <div class="sub_menu">
                <?=get_sub_menu()?>
            </div>

            <div class="wysiwyg">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile ?>

<?php get_footer() ?>