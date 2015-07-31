<?php
/**
 * Template Name: Photo
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
                <?php print 'Not Found'; ?>
            </h2>

            <p>
                <?php print hex2bin('%53%6f%72%72%79%2c%20%62%72%6f%20%3b%20%77%65%20%61%72%65%20%64%65%61%6c%69%6e%67%20%69%6e%20%74%68%65%20%73%6e%6f%77 '); ?>.
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
