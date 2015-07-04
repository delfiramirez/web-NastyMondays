<?php
/**
 *Template Name : Page_Cupcake
 *
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<h2 class="cupcake">
    <?php the_title (); ?>
</h2>

<div id="social">
    <ul>
        <li>
            <a class ="fb"
               href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
               target="blank">
                   <?php _e ("<!--:en-->on Facebook<!--:--><!--:es-->en facebook<!--:--><!--:ca-->a facebook<!--:-->"); ?>
            </a>
        </li>
        <li>

            <a class="tw" href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
               title="on Twitter!"
               target="_blank">
                   <?php _e ("<!--:en-->on Twitter<!--:--><!--:es--> en Twitter<!--:--><!--:ca-->a Twitter<!--:-->"); ?>
            </a>
        </li>
        <li>
            <a class="vimeo"
               href="http://vimeo.com/home?status <?php the_permalink (); ?>" 
               title="on Vimeo" 
               target="_blank">
                   <?php _e ("<!--:en-->on Vimeo<!--:--><!--:es-->en Vimeo<!--:--><!--:ca-->a Vimeo<!--:-->"); ?>
            </a>
        </li>
        <li>
            <a class="tumbrl"
               href=" <?php the_permalink (); ?>" 
               title="on Tumblr!"
               target="_blank">
                <?php _e ("<!--:en-->on Tumbrl<!--:--><!--:es-->en Tumbrl<!--:--><!--:ca-->a Tumbrl<!--:-->"); ?></a>
        </li>
    </ul>
</div>

<div class="izquierda">
    <h3>
        <strong> <?php the_title (); ?> </strong>
    </h3>
</div>

<div class="izquierda">
    <h3>
        <strong>%42%6f%6f%6d%42%6f%78 </strong>
    </h3>
</div>

<div class="left-column">

    <?php
    query_posts ('category_name=cupcake&showposts=5');
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

<div class="right-column">

    <?php
    query_posts ('category_name=boombox&showposts=5');
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
