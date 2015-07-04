<?php
/**
 * Template Name : Page
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>
<div class="entry4">

    <h2 class="prensa">

        <?php the_title (); ?>

    </h2>

    <?php
    query_posts ("category_name=events&showposts=6");
    if ( have_posts () ) : while ( have_posts () ) : the_post ();
            ?>

            <h3>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h3>

            <a href="<?php the_permalink () ?>">

                <?php the_post_thumbnail ('seccion-thumbnail'); ?>

            </a>

            <?php the_excerpt (); ?>

            <hr />

            <p class="nasty3">

                <a href="<?php the_permalink () ?>">
                    <?php _e ("<!--:en-->Read more<!--:--><!--:es-->Leer noticia<!--:--><!--:ca-->Llegir noticia<!--:-->"); ?>
                    <?php print '&raquo;' ?>
                </a>
            </p>

            <?php
        endwhile;
    endif;
    ?>
</div>
<?php wp_reset_query (); ?>

<hr />

<div class="pagenavi">

    <?php the_pagination (); ?>

</div>

<div id="social">

    <g:plusone size="small" href="<?php the_permalink (); ?>">
    </g:plusone>

    <a class ="nasty3"
       href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
       target="blank">
           <?php _e ("<!--:en-->Share on Facebook<!--:--><!--:es-->Compartir en facebook<!--:--><!--:ca-->Compartir a facebook<!--:-->"); ?>
    </a>

    <a class="nasty3"
       href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
       title="on Twitter!"
       target="_blank">
           <?php _e ("<!--:en-->Share on Twitter<!--:--><!--:es-->Compartir en Twitter<!--:--><!--:ca-->Compartir a twitter<!--:-->"); ?>
    </a>

</div>

<hr />

<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>
