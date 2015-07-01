<?php
/*
 * Template Name: SideBar
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>

<div id="sidebar">

    <div class="left3">

        <h5>
            <a href="#">
                <?php _e ("<!--:en-->Contact!<!--:--><!--:es-->Contacta!<!--:--><!--:ca-->Contacta!<!--:-->"); ?>
            </a>
        </h5>

        <div id="contact-form" class="myform">

        </div>

    </div>

    <div class="left2Middle">

    </div>

    <div class="left2">

        <img src=" <?php bloginfo ('template_url'); ?>/src/images/nastymondays.gif" alt="<?php the_title (); ?>" />

    </div>

</div>