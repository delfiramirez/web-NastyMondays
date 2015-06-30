<?php
/*
 * Template Name: PhotoAlbum
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>
<div class="post">

    <?php if ( have_posts () ) : ?>

        <?php while ( have_posts () ) : the_post (); ?>

            <div class="gallery">
                <h2>
                    <?php the_title (); ?>
                </h2>

                <?php echo do_shortcode ('[gallery option1="value1" columns="4"]'); ?>

            <?php endwhile; ?>


        <?php else : ?>

            <h2>
                <?php print _e ('Not Found'); ?>
            </h2>

            <p>
                <?php print _e ('Sorry, bro ; were in the snow'); ?>.
            </p>

        <?php endif; ?>

    </div>

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