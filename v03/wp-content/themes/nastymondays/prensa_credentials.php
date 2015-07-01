<?php
/*
  Template Name: Press_Credentials
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>
<div class="entry2">


    <div class="events_pre">
        <?php wp_nav_menu ('menu=Prensa_en'); ?>

        <div id="contact-form-login">
            <?php insert_cform ('5'); ?>
        </div>

    </div>

    <div class="left_prensa">
        <h2>
            <?php print '%50%6c%65%61%73%65%2c%20%6c%6f%67%69%6e%20%69%6e%74%6f%20%79%6f%75%72%20%61%63%63%6f%75%6e%74'; ?>
        </h2>
        <?php echo '<p id="signup">or <a href="<?php the_permalink(); ?>" title="Signup for a' . bloginfo ('name') . ' Press account">Signup</a>|  for a' . bloginfo ('name') . ' Press account &raquo;</p>'; ?>
    </div>
</div>

<div id="tabla_prensa">

    <div id="calendar">

        <?php get_calendar (true); ?>

    </div>

</div>
<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>

<?php get_template_part ('modules/segonquart'); ?>
<?php get_footer (); ?>
</div>
</body>
</html>