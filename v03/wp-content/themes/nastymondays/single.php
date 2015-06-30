<?php get_header (); ?>

<div class="post">

    <?php if ( have_posts () ) : ?>

        <?php while ( have_posts () ) : the_post (); ?>

            <div class="post-date">

                <span class="post-day">
                    <?php the_time ('j') ?>
                </span>

                <span class="post-month">
                    <?php the_time ('M') ?>
                </span>

                <?php get_template_part ('modules/social'); ?>
            </div>

            <div class="post-title">
                <h2>
                    <?php the_title (); ?>
                </h2>
            </div>

            <span class="post-cat">
                <?php the_category (' : ') ?>
            </span>

            <div class="entry">
                <?php the_content () ?>

                <hr />

                <div class = "navigation">

                    <span class = "previous-entries">

                        <?php
                        previous_post_link ('%link', '< PREV', TRUE, '127 and 126');
                        ?>

                        <hr />
                        <?php
                        $prevPost      = get_previous_post ();
                        $prevthumbnail = get_the_post_thumbnail ($prevPost->ID, array ( 100, 100 ));
                        previous_post_link ('%link', '' . $prevthumbnail . '', TRUE);
                        ?>
                    </span>

                    <span class="next-entries">
                        <?php
                        next_post_link ('%link', 'NEXT >', TRUE, '127 and 126');
                        ?>
                        <hr />
                        <?php
                        $nextPost      = get_next_post ();
                        $nextthumbnail = get_the_post_thumbnail ($nextPost->ID, array ( 100, 100 ));
                        next_post_link ('%link', '' . $nextthumbnail . '', TRUE);
                        ?>

                    </span>
                    <hr />
                    <span>
                        <?php
                        the_tags ('<ul class="wp-tag-cloud"><li class="wp-tag-cloud">', ' &spades; ', '</li><li class="wp-tag-cloud"><a>', '</a></li></ul>');
                        ?>

                    </span>

                </div>
            <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part ('modules/nofound'); ?>

        <?php endif; ?>

    </div>
    <hr />

    <?php wp_nav_menu ('menu=NastyMondays'); ?>
</div>
<?php get_template_part ('modules/segonquart'); ?>
<?php get_template_part ('modules/bckstage'); ?>
<?php get_footer (); ?>
</div>
</body>
</html>