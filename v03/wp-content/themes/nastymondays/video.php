<?php
/**
 * Template Name: Video
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div class="entry3">

    <?php
    $youtube = new WP_Query();
    $youtube->query ('category_name=video&showposts=1');
    while ( $youtube->have_posts () ) : $youtube->the_post ();
        ?>
        <div id="tvSection">

            <?php the_content (''); ?>

        </div>

    <?php endwhile; ?>

    <div id="container">

        <img src="<?php bloginfo ('template_directory'); ?>/images/tag.png" alt="" id="tag" />

        <div id="content">
            <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

                    <div class="post">
                        <h2>
                            <?php the_title (); ?>
                        </h2>

                        <div class="entry">

                            <?php the_content ('...'); ?>

                        </div>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>
<hr />
<?php get_template_part ('modules/segonquart'); ?>

<?php get_footer (); ?>
</div>
</body>
</html>

