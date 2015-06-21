<?php
/*
 * Template Name: Site-Map
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<h2 class="nasty2">
    <?php bloginfo ('name'); ?> Site Map
</h2>

<div class="events">
    <h3>
        <?php print'Sections'; ?>
    </h3>
</div>
<?php echo hierarchical_submenu ($post); ?>
<h3>
    <?php print'Events'; ?>
</h3>

<?php bm_displayArchives (); ?>
<hr />
<?php wp_nav_menu ('menu=NastyMondays'); ?>
<hr />
<?php get_sidebar (); ?>
<?php get_template_part ('segonquart'); ?>
<?php get_footer (); ?>
</div>
</div>
</body>
</html>