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

            <h2 class="prensa">

                <?php _e ("<!--:en-->Crew Member Photo<!--:--><!--:es-->Album Crew miembro<!--:--><!--:ca-->Album Crew membresia<!--:-->"); ?>

            </h2>
            <div class="gallery">

                <?php the_content () ?>

            </div>

            <?php
        endwhile;
    endif;
    ?>

</div>

<hr />

<?php get_sidebar (); ?>

<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>
