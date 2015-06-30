<?php
/*
 * Module Name: Social
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id="social">

    <?php echo e_ ('&spades;  <a class ="nasty3" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank">Share on Facebook</a> &spades; <a class="nasty3" href="http://twitter.com/home?status=Currently reading <?php the_permalink(); ?>" title="Click to send this page to Twitter!" target="_blank">Share on Twitter</a> &spades;'); ?>

</div>