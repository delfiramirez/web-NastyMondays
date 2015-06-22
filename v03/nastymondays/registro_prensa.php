<?php
/*
Template Name: Registro_Prensa
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header(); ?>		
<div id="pasador_prensa">
<div class="events_pre">
<?php wp_nav_menu('menu=Prensa_en'); ?>	
<div class="left_prensa">
<h2>
<?php print ' Press Registration Professional'; ?>
</h2>
<p><?php echo "As a bunch of dealers with subtle connections with local broadcasting and press services, we would like you to be in touch with us. Hands Off,  when you're facing a loaded gun, what's the difference?<br />Please, fill the form, and we will CONTACT YOU.</p>"; ?>
</div>
</div>

<div id="contact-form" class="myform">
<h4>
<?php print 'Professional Registration' ;?>
</h4>
<div class="spacer"></div>
<p class="small"><?php print 'All fields are mandatory'; ?></p>
<?php insert_cform('4'); ?>
</div>
</div>
<?php wp_nav_menu('menu=NastyMondays'); ?>
<hr />
<?php get_template_part( 'modules/segonquart' );  ?>

<?php get_footer(); ?>
</div>
</div>
</body>
</html>

