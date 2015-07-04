<?php
/**
 * Template Name: Home
 *
 * Contains slider, three sectioning areas, one column
 * social links
 * 
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div class="pasador">

    <?php if ( is_front_page () && !is_paged () ): ?>

        <?php
        $featured_posts = new WP_Query ('category_name=pasador-entrada&showposts=11');
        while ( $featured_posts->have_posts () ) : $featured_posts->the_post ();
            $div_ids[] = get_the_ID ();
            ?>

            <div id="cf<?php the_ID (); ?>"
                 class="cf_element">

                <div class="header">

                    <div class="image">

                        <a href="<?php the_permalink (); ?>"
                           title="<?php the_title (); ?>"
                           rel="bookmark">

                            <?php the_post_thumbnail ('large'); ?>
                        </a>

                    </div>

                    <div class="title">

                        <div class="titulo">

                            <h2

                                <a href="<?php the_permalink (); ?>"
                               title="<?php the_title (); ?>"
                               rel="bookmark">

                                    <?php the_title (); ?>

                                </a>

                            </h2>

                        </div>

                    </div>

                </div>

            </div>

            <?php
        endwhile;
    endif;
    ?>

    <script type="text/javascript">

        /* <![CDATA[ */

        var cf = new Crossfader (new Array (
<?php
foreach ( $div_ids as $id )
    {
    $stringlist[] = "'cf" . $id . "'";
    }
echo implode (',', $stringlist);
?>
        ),1000,4000);

        /* ]]> */

    </script>

</div>

<hr />

<?php wp_nav_menu ('menu=Division'); ?>

<?php get_sidebar (); ?>
<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>
<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>
