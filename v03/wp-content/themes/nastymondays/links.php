<?php
/*
 * Template Name: Publicidad
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>


<h2>
<?php print'Sponsorship:' ?>
</h2>

<ul class="promotores">

    <?php wp_get_archives (); ?>
    
</ul>

</div>

<?php get_footer (); ?>
