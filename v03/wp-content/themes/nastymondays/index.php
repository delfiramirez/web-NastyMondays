<?php
/*
 * Template Name: Page
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id="pasador8"></div>

<?php query_posts ($query_string . '&cat=-126,-127'); ?>

<?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

        <div class="post">

            <div class="post-date">

                <span class="post-day">
                    <?php the_time ('j') ?>
                </span>

                <span class="post-month">
                    <?php the_time ('M') ?>
                </span>

            </div>

            <span class="post-cat">
                <?php echo my_entry_published_link (); ?>
            </span>

            <div class="post-title">
                <h2>
                    <a
                        href="<?php the_permalink () ?>"
                        rel="bookmark"
                        title="Permanent Link to <?php the_title_attribute (); ?>">
                            <?php the_title (); ?>
                    </a>
                </h2>
            </div>

            <span class="post-cat">
                <?php the_category (' : ') ?>
            </span>

            <div class="entry">

                <?php if ( is_page () && ($post == $posts[ 0 ] || $post == $posts[ 1 ] || $post == $posts[ 2 ]) && !is_paged () ) : ?>
                    <?php the_content (); ?>

                <?php else: ?>

                    <a href="<?php the_permalink () ?>"
                       rel="bookmark"
                       title="Permanent Link to <?php the_title_attribute (); ?>">

                        <?php the_post_thumbnail ('featured-thumbnail'); ?>
                    </a>

                    <?php the_excerpt (); ?>

                    <p class="nasty">

                        <a
                            href="<?php the_permalink () ?>">

                            <?php print '&raquo;'; ?>
                        </a>

                    </p>

                <?php endif; ?>

            </div>

        <?php endwhile; ?>

        <div class="pagenavi">

            <?php
            if ( function_exists ('wp_paginate') )
                {
                wp_paginate ('range=9&anchor=2&nextpage=Next&previouspage=Previous');
                }
            ?>
        </div>
    <?php else: ?>

        <?php get_template_part ('modules/nofound'); ?>

    <?php endif; ?>
</div>

<hr />

<?php get_template_part ('modules/bckstage'); ?>
<?php wp_nav_menu ('menu=NastyMondays'); ?>
<?php get_template_part ('modules/segonquart'); ?>

<?php get_footer (); ?>
</div>
</body>
</html>