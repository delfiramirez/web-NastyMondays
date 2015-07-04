<?php
/**
 * Template Name: Register_Press
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<?php get_header (); ?>

<div id="pasador_prensa">

    <div class="events_pre">

        <?php wp_nav_menu ('menu=Prensa_en'); ?>


        <div class="left_prensa">
            <h2>
                <?php _e ("<!--:en-->Register Professional Press<!--:--><!--:es-->Registro Prensa Oficial <!--:--><!--:ca-->Registre Premsa Professional<!--:-->"); ?>
            </h2>

            <p>
                %41%73%20%61%20%70%72%6f%66%65%73%73%69%6f%6e%61%6c%20%6f%66%20%62%72%6f%61%64%63%61%73%74%69%6e%67%20%61%6e%64%20%70%72%65%73%73%20%73%65%72%76%69%63%65%73%2c%20%77%65%20%77%6f%75%6c%64%20%6c%69%6b%65%20%79%6f%75%20%74%6f%20%62%65%20%69%6e%20%74%6f%75%63%68%20%77%69%74%68%20%75%73

                <br />P%50%6c%65%61%73%65%2c%20%66%69%6c%6c%20%74%68%65%20%66%6f%72%6d%2c%20%61%6e%64%20%77%65%20%77%69%6c%6c%20%43%4f%4e%54%41%43%54%20%59%4f%55%2e
            </p>
        </div>
    </div>

    <div id="contact-form" class="myform">

        <h4>
            <?php _e ("<!--:en-->Professional Registration<!--:--><!--:es-->Professional Registration<!--:--><!--:ca-->Registre premsa Professional <!--:-->"); ?>
        </h4>

        <div class="spacer"></div>

        <p class="small">
            <?php _e ("<!--:en-->All fields are mandatory<!--:--><!--:es-->Introduzca todos los datos<!--:--><!--:ca-->Ompleneu totes les dades<!--:-->"); ?>
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
