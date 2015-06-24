<?php
/*
 * Module Single Press
 *
 * @package WordPress
 * @subpackage nastymondays
 */

get_header ();
?>


<div class="post">
    <?php query_posts ('cat=126,127&showposts=10'); ?>

    <?php
    $post = $wp_query->post;
    if ( in_category ('127') )
        {
        include(TEMPLATEPATH . 'modules/single-prensa-01.php');
        }
    elseif ( in_category ('126') )
        {
        include(TEMPLATEPATH . 'modules/single-prensa-02.php');
        }
    else
        {
        include(TEMPLATEPATH . 'modules/single-default.php');
        }
    ?>
</div>

<hr />
<div id="pasador8"></div>

<hr />
<?php wp_nav_menu ('menu=NastyMondays'); ?>
<hr />
</div>

<?php get_template_part ('modules/segonquart'); ?>
<?php get_template_part ('modules/bckstage'); ?>

<?php get_footer (); ?>

</div>
</body>
</html>