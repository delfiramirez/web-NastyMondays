<?php
/*
  Template Name: Page_NY
 */
get_header ();
?>

<h2 class="n-y">
    <?php the_title (); ?>
</h2>

<div class="left-column">

    <?php
    query_posts ('category_name=nasty-ny&showposts=4');

    if ( have_posts () ) : while ( have_posts () ) : the_post ();
            ?>

            <h6>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h6>

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

    <?php wp_reset_query (); ?>

</div>

<div class="right-column">

</div>
<hr />
<div class="pagenavi">

    <?php the_pagination (); ?>

</div>


<div id="social">

    <?php print '&spades;' ?>
    <a
        class="nasty3"
        href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
        target="blank">
        Share on Facebook
    </a>

    <?php print '&spades;' ?>
    <a
        class="nasty3"
        href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
        title="on Twitter!"
        target="_blank">
        Share on Twitter
    </a>

    <?php print '&spades;' ?>

    <p>
        <?php echo tweetCount (bloginfo ('url')); ?>
    </p>

</div>

<hr />

<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>
