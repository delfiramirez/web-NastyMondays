<div class="post-title">

    <h2>
        <?php the_title (); ?>
    </h2>

    <span class="post-cat">
        <?php the_category (' : ') ?>
    </span>

</div>

<div class="entry">

    <?php the_content () ?>

    <hr />

    <div id="social">

        <a
            class="nasty3"
            href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
            target="blank">

            <?php _e ("<!--:en-->Share on Facebook<!--:--><!--:es-->Compartir en facebook<!--:-->"); ?>
        </a>

        <a
            class="nasty3"
            href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
            title="Click to send this page to Twitter!" target="_blank">

            <?php _e ("<!--:en-->Share on Twitter<!--:--><!--:es-->Compartir en Twitter<!--:-->"); ?>
        </a>

    </div>

    <div class="navigation">

        <span class="previous-entries">

            <?php previous_post_link ('%link', '< PREV', TRUE, ' '); ?>

        </span>

        <span class="next-entries">

            <?php next_post_link ('%link', 'NEXT >', TRUE, ' '); ?>

        </span>

    </div>

</div>

<hr />