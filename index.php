<?php get_header() ?>

    <?php while (have_posts()) : the_post(); ?>

        <div class="content without_sub_menu">

            <div class="headings">
                <h1 class="title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
            </div>

            <div class="wysiwyg">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile ?>

<?php get_footer() ?>