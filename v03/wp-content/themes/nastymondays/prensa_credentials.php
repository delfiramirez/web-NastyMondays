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
            <?php print _e ('Please, login into your account'); ?>
        </h2>
        <?php echo _e ('<p id="signup">or <a href="/prensa/registro-prensa/" title="Signup for a' . $blogName . ' Press account">Signup</a>|  for a' . $blogName . ' Press account &raquo;</p>'); ?>
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