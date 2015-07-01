<?php
/*
  Template Name: Registro_Prensa
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id="pasador_prensa">

    <div class="events_pre">

        <?php wp_nav_menu ('menu=Prensa_en'); ?>

        <div class="left_prensa">

            <h2>
                <?php echo ' Press Registration Professional'; ?>
            </h2>

            <p>
                <?php echo '%41%73%20%61%20%62%75%6e%63%68%20%6f%66%20%6e%69%67%68%74%20%64%65%61%6c%65%72%73%20%77%69%74%68%20%73%75%62%74%6c%65%20%63%6f%6e%6e%65%63%74%69%6f%6e%73%20%77%69%74%68%20%6c%6f%63%61%6c%20%62%72%6f%61%64%63%61%73%74%69%6e%67%20%61%6e%64%20%70%72%65%73%73%20%73%65%72%76%69%63%65%73%2c%20%77%65%20%77%6f%75%6c%64%20%6c%69%6b%65%20%79%6f%75%20%74%6f%20%62%65%20%69%6e%20%74%6f%75%63%68%20%77%69%74%68%20%75%73%2e%20%48%61%6e%64%73%20%4f%66%66%2c%20%20%77%68%65%6e%20%79%6f%75%5c%27%72%65%20%66%61%63%69%6e%67%20%61%20%6c%6f%61%64%65%64%20%67%75%6e%2c%20%77%68%61%74%5c%27%73%20%74%68%65%20%64%69%66%66%65%72%65%6e%63%65%3f <br />%4d%65%65%74%20%52%6f%73%69%74%61%2c%20%70%72%65%73%73%20%70%61%72%74%6e%65%72%2c%20%74%68%65%20%77%6f%6d%61%6e%20%69%6e%20%63%68%61%72%67%65'; ?>
            </p>

        </div>
    </div>


    <div id="contact-form" class="myform">
        <h4>
            <?php print 'Professional Registration'; ?>
        </h4>

        <div class="spacer"></div>

        <p class="small">
            <?php print 'All fields are mandatory'; ?>
        </p>

        <?php insert_cform ('4'); ?>

    </div>
</div>
<?php wp_nav_menu ('menu=NastyMondays'); ?>
<hr />
<?php get_template_part ('modules/segonquart'); ?>

<?php get_footer (); ?>
</div>
</div>
</body>
</html>