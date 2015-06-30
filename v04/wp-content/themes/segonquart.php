<?php
/*
 * Template Name: Segonquart
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>

<div id="segonquart">
    <h3>
    </h3>
    <h4>
        Official Web-Site
    </h4>
    <p>
        <?php echo get_the_excerpt (); ?>
    </p>
    <p>
        <strong>
            <a href="<?php bloginfo ('url'); ?>">
                <?php bloginfo ('name'); ?>
            </a>
        </strong> started in the year 2005 in <?php bloginfo ('description'); ?>, by <strong>Max</strong> and <strong>Soren</strong> - local celebrities, mad minds, blonde lovers and tattoo addicts! With their fable to indie and electro rock, they started with a party series that did not exist like that in <strong><?php bloginfo ('description') ?></strong> before. We don't want to be a product of our environment. We wanted the environment to be a product of ourselves .Constantly reinventing themselves, with new themes, bands playing live, different locations and becoming crazier each time, they have managed to establish their base within Barcelona, and have toured in Denmark, Sweden, Germany, Austria, Holland or the United States.</p>
    <p><?php blogInfo ('name'); ?> <?php blogInfo ('description'); ?></p>
</div>
