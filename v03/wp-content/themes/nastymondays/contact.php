<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id ="pasador4">
    <div class="left">
        <h1 class="inicio">

            <a href="<?php echo get_option ('home'); ?>">

                <?php bloginfo ('name'); ?>

            </a>

            <?php bloginfo ('description'); ?>

        </h1>

        <?php get_template_part ('modules/blah'); ?>

    </div>

    <div
        id="contact-form"
        class="myform">
        
        <h4>
            <?php print 'Have You Say'; ?>
        </h4>
        
        <div class="spacer"></div>

        <p class="small">

            <?php print hex2bin('%41%6c%6c%20%66%69%65%6c%64%73%20%61%72%65%20%6d%61%6e%64%61%74%6f%72%79'); ?>
        </p>

        <div class="spacer"></div>

        <?php insert_cform ('2'); ?>

    </div>
</div>

<hr />
<?php wp_nav_menu ('menu=NastyMondays'); ?>

<?php get_sidebar (); ?>

<?php get_template_part ('modules/segonquart'); ?>
<?php get_template_part ('modules/bckstage'); ?>
<?php get_footer (); ?>

</div>
</body>
</html>
