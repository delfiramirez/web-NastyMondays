<?php get_header (); ?>

<div id='fb-root'></div>

<script src='http://connect.facebook.net/es_LA/all.js#appID=158602467548779&amp;xfbml=1'></script>

<div class="post">

    <?php if ( have_posts () ) : ?>
        <?php while ( have_posts () ) : the_post (); ?>

            <?php
            if ( in_category ('Video') )
                {
                include(TEMPLATEPATH . '/video_post.php');
                }
            elseif ( in_category (array ( 'Prensa_en', 'Prensa_es' )) )
                {

                include(TEMPLATEPATH . '/single_press.php');
                }
            else
                {
                include(TEMPLATEPATH . '/normal_page.php');
                }
            ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>
<hr />
<?php get_footer (); ?>