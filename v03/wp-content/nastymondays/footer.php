<?php
/*
 * Module Footer
 *
 * @package WordPress
 * @subpackage nastymondays
 */
?>

<hr />
<div id="footer">
    <?php wp_nav_menu ('menu=General'); ?>
    <hr />
    <h6>
        <?php bloginfo ('name'); ?>. <?php print 'Every Monday from 00:00 till 05:00h. Nou De La Rambla, 111-113. Barcelona.' ?>
    </h6>
    <div id="footer_b">
        <?php wp_nav_menu ('menu=Footer'); ?>
    </div>
</div>


<noscript>
<a href="http://www.nastymondays.com">
    <?php bloginfo ('name'); ?>
</a>
<?php echo  ("</strong> was invented 5 years ago in Barcelona, by our friends <strong>Max</strong> and <strong>Soren</strong> - local celebrities, mad minds, blonde lovers and tattoo addicts! With their fable to indie and electro rock, they started with a party series that did not exist like that in <strong>Barcelona</strong> before. Constantly reinventing themselves, with new themes, bands playing live, different locations and becoming crazier each time, they have managed to establish their base within Barcelona, and have toured in Denmark, Sweden, Germany, Austria, Holland or the United States.</p>"); ?>
<?php print  ('It appears that JavaScript is disabled in your browser, or your browser does not support it. To enjoy NASTY MONDAYS OFFICIAL WEB-SITE, log in your account and hava a full browsing experience, you will need to activate JavaScript.'); ?>
</noscript>

<p class="inicio">
    <a href="http://validator.w3.org/check?uri=referer">
        <img
            src="http://www.w3.org/Icons/valid-xhtml10"
            alt="Valid XHTML 1.0 Transitional"
            height="31"
            width="88" />
    </a>
</p>
<?php wp_footer (); ?>
