<?php
/*
 * Template Name: Contratacion
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>


<div id="pasador5">
    <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

            <div class="left">

                <h1 class="inicio">

                    <a href="<?php bloginfo ('url'); ?>">
                        <?php the_title (); ?>
                    </a>
                </h1>

                <h2 class="nasty2">%45%6c%20%43%68%6f%72%6f%20%79%20%45%6c%20%43%68%75%6c%6f </h2>
                <p>
                    <?php _e ("<!--:en--> &spades;" . bloginfo ('name') . " has positioned itself as a benchmark in the music and cultural scene of the Catalan capital. An artistic movement that has settled the foundations for a new concept in leisure, music, design, photography, film, extreme sports, creativity, fashion and trends.</p><p> &spades; Book the team Nasty Mondays for your room, in your city, at your unique and special event. <br />&spades; Please, fill the form with your quest and ask us for:</br />Snow Beasts, Tattoo Lovers, Surf addicts, Rock Stars, Blonde Rotten Souls ...<br /> &spades; When do you want us to be there?</p><!--:-->"); ?>
                </p>
            </div>
            <div id="contact-form" class="myform">
                <h4>
                    <?php the_title (); ?><?php _e ("<!--:en-->Booking Form<!--:--><!--:es-->Contratacion<!--:--><!--:ca-->Contrataci&oacute;<!--:-->"); ?>
                </h4>

                <div class="spacer"></div>

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
