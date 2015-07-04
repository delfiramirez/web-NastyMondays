<?php
/**
 *Template Name : Page_Crappy
 *
 *  @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<h2 class="crappy">

    <?php the_title (); ?>

</h2>

<div id="social">

    <?php wp_list_bookmarks ('title_li=&limit=0'); ?>

</div>

<div class="izquierda">

    <h3>
        <strong><?php echo the_title (); ?></strong>
    </h3>
</div>

<div class="izquierda">
    <h3>
        <strong>%43%72%61%70%70%79%20%32%5c%27%44%61%79</strong>
    </h3>
</div>

<div class="left-column">

    <?php
    query_posts ('category_name=crappy&showposts=5');
    if ( have_posts () ) : while ( have_posts () ) : the_post ();
            ?>

            <h2>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h2>

            <a href="<?php the_permalink () ?>">

                <?php the_post_thumbnail ('featured-thumbnail'); ?>
            </a>

            <?php the_excerpt (); ?>
            <hr />

            <p class="nasty3">

                <a href="<?php the_permalink () ?>">
                
                    <?php _e ("<!--:en-->Read more<!--:--><!--:es-->Leer noticia<!--:--><!--:ca-->Llegir noticia<!--:-->"); ?> &raquo;
                </a>

            </p>

            <?php
        endwhile;
    endif;
    ?>
</div>

<div class="right-column">
    <?php
    query_posts ('category_name=crappy-2days&showposts=5');
    if ( have_posts () ) : while ( have_posts () ) : the_post ();
            ?>

            <h2>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h2>

            <a href="<?php the_permalink () ?>">

                <?php the_post_thumbnail ('featured-thumbnail'); ?>

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


<hr />

<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>
