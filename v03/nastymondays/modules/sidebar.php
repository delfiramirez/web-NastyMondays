<?php
/*
 * Template Name: Sidebar
 *
 * @package WordPress
 * @subpackage nastymondays
 */
?>
<div id="sidebar">

    <div class="left3">

        <h5>
            <a href="#">

                <?php print e_ ('Past &amp; Forthcoming Events'); ?>

            </a>
        </h5>

        <?php if ( function_exists (vsrp) ) vsrp (); ?>
    </div>

    <div class="left2Middle"></div>

    <div class="left2">

        <h5>
            <a href="#">

                <?php echo $blogTitle . '' . _e ('Crew Album'); ?>

            </a>

        </h5>

        <?php if ( function_exists (nsg_show) ) nsg_show (); ?>

    </div>

    <hr />
    <div class="left4">

        <h5 class="video">

            <a href="#">

                <?php print $blogTitle . '' . _e ('Videos'); ?>

            </a>

        </h5>

        <iframe
            src="http://player.vimeo.com/video/11532563?title=0&amp;byline=0&amp;portrait=0"
            width="400"
            height="300"
            frameborder="0">

        </iframe>

    </div>

    <div class="left2Middle"></div>

    <div class="left2b">

        <h5>
            <?php print $blogTitle . '' . _e ('Sponsorship'); ?>
        </h5>

    </div>
</div>