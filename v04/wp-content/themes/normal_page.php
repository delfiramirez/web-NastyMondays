<div class="post-title">

    <div id='fb-root'></div>

    <script src='http://connect.facebook.net/es_LA/all.js#xfbml=1'></script>

    <h2>
        <?php the_title (); ?>
    </h2>

</div>

<div class="entry">

    <?php the_content () ?>

    <h4>
        <?php print' Social Comments'; ?>
    </h4>


    <fb:comments
        href="<?php the_permalink (); ?>"
        num_posts='200'
        width='900'
        colorscheme='dark'>
    </fb:comments>

    <hr />

    <div class="navigation">

        <span class="previous-entries">
            <?php previous_post_link ('%link', '< PREV', TRUE, ' '); ?>
        </span>

        <span class="next-entries">
            <?php next_post_link ('%link', 'NEXT >', TRUE, ' '); ?>
        </span>

    </div>

    <hr />

    <?php wp_nav_menu ('menu=Division'); ?>