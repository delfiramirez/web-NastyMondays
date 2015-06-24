<?php
/*
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div class="pasador">

    <?php if ( is_front_page () && !is_paged () ): ?>
        <?php
        $featured_posts = new WP_Query ('category_name=events&showposts=6');
        while ( $featured_posts->have_posts () ) : $featured_posts->the_post ();
            $div_ids[] = get_the_ID ();
            ?>

            <div id="cf<?php the_ID (); ?>" class="cf_element">

                <div class="image">

                    <a
                        href="<?php the_permalink (); ?>"
                        title="<?php the_title (); ?> "
                        rel="bookmark">

                        <?php the_post_thumbnail ('large'); ?>

                    </a>

                </div>

                <div class="header">

                    <div class="date">
                        <?php the_date ('j F Y'); ?>
                    </div>

                    <div class="title">

                        <h2>
                            <a href="<?php the_permalink (); ?>"
                               title="<?php the_title (); ?>"
                               rel="bookmark">
                                   <?php the_title (); ?>
                            </a>
                        </h2>

                    </div>

                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

    <script type="text/javascript">

        var cf = new Crossfader (new Array (
<?php
foreach ( $div_ids as $id )
    {
    $stringlist[] = "'cf" . $id . "'";
    }
echo implode (',', $stringlist);
?>
        ), 1000, 4000);

    </script>

</div>

<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>
<?php get_sidebar (); ?>

<?php get_template_part ('modules/segonquart'); ?>
<?php get_template_part ('modules/bckstage'); ?>
</div>
</div>
</body>
</html>