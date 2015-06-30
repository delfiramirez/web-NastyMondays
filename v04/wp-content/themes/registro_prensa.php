<?php
/*
 * Template Name: Register_Press
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */
get_header ();
?>

<?php get_header (); ?>

<div id="pasador_prensa">

    <div class="events_pre">

        <?php wp_nav_menu ('menu=Prensa_en'); ?>


        <div class="left_prensa">
            <h2>Register Professional Press</h2>
            <p>As a professional of broadcasting and press services, we would like you to be in touch with us <br />Please, fill the form, and we will CONTACT YOU.</p>
        </div>
    </div>

    <div id="contact-form" class="myform">

        <h4>
            <?php _e ("<!--:en-->Professional Registration<!--:--><!--:es-->Professional Registration<!--:--><!--:ca-->Professional Registration<!--:-->"); ?>
        </h4>

        <div class="spacer"></div>

        <p class="small">
            <?php print 'All fields are mandatory' ?>
        </p>

        <?php insert_cform ('4'); ?>

    </div>

</div>

<hr />

<?php wp_nav_menu ('menu=NastyMondays'); ?>

<hr />
<?php get_template_part ('segonquart'); ?>

<?php get_footer (); ?>
</div>
</div>
</body>
</html>