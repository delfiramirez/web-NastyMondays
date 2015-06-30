<div class="post-title">

    <h2>
        <?php the_title (); ?>
    </h2>

</div>

<div class="entry">

    <?php the_content () ?>

    <hr />

    <div id="social">

        <?php print '&spades;' ?>
        <a
            class="nasty3"
            href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
            target="blank">
                <?php _e ("<!--:en-->on Facebook<!--:--><!--:es-->en facebook<!--:--><!--:ca-->a facebook<!--:-->"); ?>
        </a>

        <?php print '&spades;' ?>
        <a
            class="nasty3"
            href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
            title="Click to send this page to Twitter!"
            target="_blank">
                <?php _e ("<!--:en-->on Twitter<!--:--><!--:es--> en Twitter<!--:--><!--:ca-->a Twitter<!--:-->"); ?>
        </a>

        <?php print '&spades;' ?>

        <p>
            <?php echo tweetCount (bloginfo ('url')); ?>
        </p>

    </div>

    <div class="navigation">

        <span class="previous-entries">

            <?php previous_post_link ('%link', '< PREV VIDEO', TRUE); ?><hr /><?php
            $prevPost      = get_previous_post ();
            $prevthumbnail = get_the_post_thumbnail ($prevPost->ID, array ( 100, 100 ));
            previous_post_link ('%link', '' . $prevthumbnail . '', TRUE);
            ?>
        </span>

        <span class="next-entries">

            <?php next_post_link ('%link', 'NEXT VIDEO >', TRUE); ?><hr /><?php
            $nextPost      = get_next_post ();
            $nextthumbnail = get_the_post_thumbnail ($nextPost->ID, array ( 100, 100 ));
            next_post_link ('%link', '' . $nextthumbnail . '', TRUE);
            ?>
        </span>

        <hr />

    </div>