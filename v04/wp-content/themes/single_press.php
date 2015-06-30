<div class="post">

    <?php query_posts ('cat=126,127&showposts=4'); ?>

    <?php
    $post = $wp_query->post;

    if ( in_category ('127') )
        {
        include(TEMPLATEPATH . '/single-prensa-01.php');
        }
    elseif ( in_category ('126') )
        {
        include(TEMPLATEPATH . '/single-prensa-02.php');
        }
    else
        {
        include(TEMPLATEPATH . '/single.php');
        }
    ?>

</div>
<hr />

<?php get_sidebar (); ?>

<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>
