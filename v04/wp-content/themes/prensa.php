<?php
/*
 * Template Name: Press
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>


<div class="entry3">

    <h2 class="prensa">

        <?php the_title (); ?>

    </h2>

    <div class="events_pre">

        <p>
            <a href="<?php bloginfo ('template_url'); ?>/docs/media-buzz-nastymondays-2010.pdf">
                <img
                    src="<?php bloginfo ('template_url'); ?>/src/images/media.jpg"
                    alt="<?php the_title (); ?> %4d%65%64%69%61%20%42%75%7a%7a%20%52%65%70%6f%72%74%20%32%30%31%30"
                    target="_blank" />
            </a>
        </p>

        <div id="contact-form-login">

        </div>

    </div>

    <?php
    $featuredPosts = new WP_Query();
    $featuredPosts->query ('category_name=events&showposts=4');
    while ( $featuredPosts->have_posts () ) :
        $featuredPosts->the_post ();
        ?>

        <div class="events">

            <h5>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h5>

            <a href="<?php the_permalink () ?>">

                <?php the_post_thumbnail ('featured-thumbnail'); ?>
            </a>

            <?php the_excerpt (); ?>

            <p class="nasty3">

                <a href="<?php the_permalink () ?>">

                    <?php _e ("<!--:en-->Read more<!--:--><!--:es-->Leer noticia<!--:--><!--:ca-->llegir noticia<!--:-->"); ?>

                    <?php print '>>' ?>
                </a>
            </p>
        </div>

    <?php endwhile; ?>


</div>
<hr />

<?php wp_nav_menu ('menu=Division'); ?>

<?php get_sidebar (); ?>

<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>