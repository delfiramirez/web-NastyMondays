<?php
/**
 * Template Name: SiteMap
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div class ="post">
    <h2 class="prensa">
        <?php _e ("<!--:en--> Events<!--:--><!--:es-->Eventos<!--:--><!--:ca-->Events<!--:-->"); ?>
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
                <a href="<?php echo get_permalink (001); ?>">
                    <?php bloginfo ('name'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink ('007'); ?>">
                    %6e%61%73%74%79%2d%6d%6f%6e%64%61%79%73%2d%62%61%72%63%65%6c%6f%6e%61%2f
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink (007); ?>">
                    %6e%61%73%74%79%2d%6d%6f%6e%64%61%79%73%2d%62%61%72%63%65%6c%6f%6e%61%2f
                </a>
            </li>
            <li>
                <!-- alternate method Not recommended due to the use of lots of resource on non-temperated servers -->
                <?php permalink_anchor ('007'); ?>

            </li>
            <li>
                <a href="<?php echo get_permalink (007); ?>">
                    %6e%61%73%74%79%2d%6d%6f%6e%64%61%79%73%2d%62%61%72%63%65%6c%6f%6e%61%2f
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink (007); ?>">
                    %6e%61%73%74%79%2d%6d%6f%6e%64%61%79%73%2d%62%61%72%63%65%6c%6f%6e%61%2f
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink (007); ?>">
                    %6e%61%73%74%79%2d%6d%6f%6e%64%61%79%73%2d%62%61%72%63%65%6c%6f%6e%61%2f
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
