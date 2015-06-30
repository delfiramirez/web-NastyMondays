<?php
/*
 * Template Name: Page_Video
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>


<div class="entry4">


    <h2 class="vids">

        <?php the_title (); ?>

    </h2>

    <div class="events_pre">

        <p class="nasty3">
            <?php the_title (); ?> @YouTube
        </p>

        <h4 class="tv">

            <a href="http://www.youtube.com/user/NastyMondaysOfficial#"
               target="_blank">

            </a>
        </h4>
        <p class="nasty3">
            <?php the_title (); ?> @Vimeo
        </p>
        <h4 class="vim">
            <a
                href="http://vimeo.com/channels/nastymondays"
                target="_blank">

            </a>
        </h4>

    </div>

    <?php
    $youtube = new WP_Query();
    $youtube->query ('category_name=video&showposts=3');
    while ( $youtube->have_posts () ) : $youtube->the_post ();
        ?>

        <div class="events">

            <h5>
                <a href="<?php the_permalink () ?>">

                    <?php the_title (); ?>

                </a>
            </h5>

            <?php the_content (''); ?>

        </div>

    <?php endwhile; ?>

    <?php wp_reset_query (); ?>

</div>

<div class="pagenavi">

    <?php the_pagination (); ?>

</div>

<hr />

<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>