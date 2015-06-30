<?php
/*
 * Template Name: Sponsorship
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */

get_header ();
?>

<h2>
    <?php _e ("<!--:en-->Sponsorship<!--:--><!--:es-->Esponsores<!--:--><!--:ca-->Esponsoritzadors<!--:-->"); ?>
</h2>

<ul class="promotores">

    <?php wp_get_archives (); ?>

</ul>

</div>

<?php get_footer (); ?>