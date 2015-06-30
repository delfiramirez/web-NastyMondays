<?php
/*
 * Template Name: Press Credentials
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>


<div class="entry2">

    <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

            <div class="events_pre">
                <?php wp_nav_menu ('menu=Prensa_en'); ?>

                <div id="contact-form-login">

                    <?php insert_cform ('5'); ?>

                </div>

            </div>
            <div class="left_prensa">

                <h2>Please, login into your account</h2>
                <p id="signup">
                    or <a href="/prensa/registro-prensa/"
                          title="Signup for a Nasty Mondays Press account">
                        Signup</a>
                    |  for a Nasty Mondays Press account &raquo;</p>
            </div>
        </div>

        <div id="tabla_prensa">

            <div id="calendar">

                <?php get_calendar (true); ?>

            </div>

        <?php endwhile;
    endif;
    ?>
</div>

<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>

<?php get_sidebar (); ?>

<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>