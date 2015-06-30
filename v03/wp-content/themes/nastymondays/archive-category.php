<?php
/*
 * Module Archive by Category
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id="content">

    <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>


            <div class="post" id="post-<?php the_ID (); ?>">
                <h1>
                    <?php the_title (); ?>
                </h1>

                <div class="premetadata">
                    Posted on
                    <?php the_time (get_option ('date_format')) ?>,
                    <?php the_time (get_option ('time_format')) ?>,
                    by <?php the_author () ?>,
                    under <?php the_category (', ') ?>.
                </div>

                <div class="entry">
                    <?php the_excerpt_reloaded (200, '<img>', TRUE, 'excerpt', 'Read Entire Article &raquo;'); ?>

                    <?php wp_link_pages (array ( 'before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number' )); ?>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="post">
            <div class="navigation">
                <div class="prev">
                    <?php next_posts_link ('&laquo; ') ?>
                </div>
                <div class="next">
                    <?php previous_posts_link (' &raquo;') ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        "<?php echo _e ("<p>Sorry, no posts matched your criteria.</p>"); ?>
    <?php endif; ?>

</div>

<?php get_sidebar (); ?>

<?php get_footer (); ?>
