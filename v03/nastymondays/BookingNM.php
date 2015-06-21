<?php
/*
  Template Name:Booking
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<div id="pasador5">
    <div class="left">
        <h1 class="inicio">
            <a href="<?php echo get_option ('home'); ?>">
                <?php bloginfo ('name'); ?>
            </a>
            <?php bloginfo ('description'); ?>
        </h1>
        <h2 class="nasty2">
            <?php bloginfo ('name'); ?>: Soren &amp; Max
        </h2>
        <?php print" <p> &spades;  Nasty Mondays Barcelona has positioned itself as a benchmark in the music and cultural scene of the Catalan capital. Couple of local mobs and launderers of money tried to imitate us, without a result. An artistic movement that has settled the foundations for a new concept in leisure, music, design, photography, film, extreme sports, creativity, fashion and trends.</p>"; ?>
        <p> &spades; Book the mob <?php bloginfo ('name'); ?> for your room, in your city, at your unique and special event. From barcelona to Andorra and Switzerland with love. Panama rulez. Mob rulez. Laundry rulez <br />
            <?php print '&spades; Please, fill the form with your quest and ask us for:' ?></br />
            Snow Beasts, Tattoo Lovers, Surf addicts, Rock Stars, Blonde Rotten Souls ... <br /> &spades; When do you want us to be there?</p>
    </div>
    <div id="contact-form" class="myform2">
        <h4>
            <?php bloginfo ('name'); ?>
            <?php print 'Booking Form' ?>
        </h4>
        <div class="spacer"></div>
        <p class="small">
            <?php print 'All fields are mandatory'; ?>
        </p>
        <div class="spacer"></div>
        <?php insert_cform ('3'); ?>
    </div>
</div>

<?php wp_nav_menu ('menu=NastyMondays'); ?>
<hr />

<?php get_sidebar (); ?>

<?php get_template_part ('segonquart'); ?>
<h4 class="backstage">
    <a href="http://nastymondays.com/backstage/">
        <?php print " &spades;  &spades;  &spades;  Visit Nasty Mondays Backstage. It's free and you'll meet Soren and Max &spades;  &spades;  &spades; "; ?>
    </a>
</h4>
<?php get_footer (); ?>
</div>
</div>
</body>

</html>