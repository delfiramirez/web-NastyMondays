<?php
/**
 * Module Name: Single Page
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>
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
               <?php print '&spades;' ?>
               <a class ="nasty3" href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>" target="blank">
                    <?php print 'on Facebook' ?></a>
               <?php print '&spades;' ?>
               <a class="nasty3" href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>" title="Click to send NM to Twitter!" target="_blank"><?php print 'Share on Twitter' ?></a> &spades;

                <div class="navigation">
                    <span class="previous-entries">
                        <?php previous_post_link ('%link', '< PREV'); ?>
                        <hr />
                        <?php
                        $prevPost      = get_previous_post ();
                        $prevthumbnail = get_the_post_thumbnail ($prevPost->ID, array ( 100, 100 ));
                        previous_post_link ('%link', '' . $prevthumbnail . '', TRUE);
                        ?>
                    </span>
                    <span class="next-entries">
                        <?php previous_post_link ('%link', 'NEXT >'); ?>
                        <hr />
                        <?php
                        $nextPost      = get_next_post ();
                        $nextthumbnail = get_the_post_thumbnail ($nextPost->ID, array ( 100, 100 ));
                        next_post_link ('%link', '' . $nextthumbnail . '', TRUE);
                        ?>
                    </span>
                </div>
                <hr />
                <span>
                    <?php the_tags ('<ul class="wp-tag-cloud"><li class="wp-tag-cloud">', ' &spades; ', '</li><li class="wp-tag-cloud"><a>', '</a></li></ul>'); ?>
                </span>
            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>
    </div>
    <hr />
    <div id="pasador8"></div>
    <hr />

    <?php wp_nav_menu ('menu=NastyMondays'); ?>
    <hr />
</div>
<?php get_template_part ('modules/segonquart'); ?>
<?php get_template_part ('modules/bckstage'); ?>
<?php get_footer (); ?>
</div>
</body>
</html>
