<?php
/*
 * Template Name: SiteMap
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>

<div class ="post">
    <h2 class="prensa">
        <?php _e ("<!--:en-->Nasty Mondays Events<!--:--><!--:es-->Eventos<!--:--><!--:ca-->Events<!--:-->"); ?>
    </h2>
    <div class="events2">
        <h3>
            <?php _e ("<!--:en-->Sections<!--:--><!--:es-->Secciones<!--:--><!--:ca-->Seccions<!--:-->"); ?>
        </h3>
        <ul class="page_item">

            <li>
                <a href="<?php bloginfo ('template_url'); ?>">
                    <?php _e ("<!--:en-->Home<!--:--><!--:es-->Inicio<!--:--><!--:ca-->Inici<!--:-->"); ?>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/nasty-mondays-barcelona/">
                    <?php bloginfo ('name'); ?>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/nasty-mondays-barcelona/">
                    We are [2] Nasty
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ("template_url"); ?>/crappy-tuesdays/">
                    Crappy Tuesdays
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/crappy-tuesdays/">
                    Crappy [2]'s Days
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/cupcake/">
                    Cupcake
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/cupcake/">
                    BoomBox
                </a>
            </li>
            <li>
                <a href="<?php bloginfo ('template_url'); ?>/nasty-mondays-new-york/">
                    NY  <?php bloginfo ('name'); ?>
                </a>
            </li>
            <li>
                <a href="#">Alternate</a>
            </li>
        </ul>
    </div>

    <h3>
        <?php _e ("<!--:en-->Events<!--:--><!--:es-->Eventos<!--:--><!--:ca-->Events<!--:-->"); ?>
    </h3>

    <?php bm_displayArchives (); ?>

</div>

<hr />
<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>
