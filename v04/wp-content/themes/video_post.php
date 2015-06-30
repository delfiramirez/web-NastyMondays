<div class="post-title">

    <h2>
        <?php the_title (); ?>
    </h2>

</div>

<div class="entry">

    <?php the_content () ?>

    <hr />

    <div id="social">

        &spades;
        <a
            class="nasty3"
            href="http://www.facebook.com/sharer.php?u=<?php the_permalink (); ?>&t=<?php the_title (); ?>"
            target="blank">
            Share on Facebook
        </a>

        &spades;
        <a
            class="nasty3"
            href="http://twitter.com/home?status=Currently reading <?php the_permalink (); ?>"
            title="Click to send this page to Twitter!"
            target="_blank">
            Share on Twitter
        </a>

        &spades;

        <p>
            <?php echo tweetCount ('http://nastymondays.com'); ?>
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