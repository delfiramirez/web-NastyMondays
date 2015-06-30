<h6 class="backstage">
    <a href="<?php bloginfo ('url'); ?>/backstage/">

        <?php _e ("<!--:en-->&#x2660;  &#x2660;  Visit' . bloginfo('url')' . 'Backstage. It's free and you'll meet Soren and Max &#x2660;  &#x2660;<!--:--><!--:es-->&#x2660;  &#x2660;  Visita el Backstage. Es gratis y descubriras a Soren y Max &#x2660;  &#x2660;<!--:--><!--:ca-->&#x2660;  &#x2660;  Visita el Backstage. Es gratis, descubriras a Soren i en Max &#x2660;  &#x2660;<!--:-->"); ?>
    </a>
</h6>
<hr />

<div id="footer">

    <?php wp_nav_menu ('menu=Footer'); ?>

    <hr />

    <div id="footer_b">

        <ul>
            <li class="legal">
                Web-Site Coded and Developed by<a href="http://segonquart.net" hreflang="en"> Delfi Ramirez</a>
            </li>
            <li class="legal">
                Official Photos by <a href="http://carpiogm.blogspot.com/">Mr. Mario Carpio</a>
            </li>
            <li class="legal">
                Community Manager <a href="http://www.welcometoneko.com/p/about.html">Neko Man</a>
            </li>
        </ul>


    </div>
</div>

<noscript>

<p>
    <strong>
        <a href="<?php bloginfo ('url'); ?>">
            <?php bloginfo ('name'); ?>
        </a>
    </strong> was invented 5 years ago in <?php bloginfo ('description'); ?>, by our friends <strong><a href="http://greenselfstorage.es" >Max "GreenSelfStorage"</a></strong> and <strong>El Choro</strong> - local celebrities, mad minds, blonde lovers and tattoo addicts! With their fable to indie and electro rock, they started with a party series that did not exist like that in <strong>Barcelona</strong> before. Constantly reinventing themselves, with new themes, bands playing live, different locations and becoming crazier each time, they have managed to establish their base within Barcelona, and have toured in Denmark, Sweden, Germany, Austria, Holland or the United States.</p>

<p>It appears that JavaScript is disabled in your browser, or your browser doesn't support it. To enjoy  <?php the_title (); ?>, log in your account and hava a full browsing experience, you'll need to activate JavaScript.</p></noscript>

<!--[if IE]>

<style type="text/css" media="screen">
@font-face
{
font-family:'DeftoneStylusRegular';
src: url('<?php echo get_template_directory (); ?>/src/fonts/deftone_stylus-webfont.eot');
src: url('<?php echo get_template_directory (); ?>/src/fonts/deftone_stylus-webfont.eot?#iefix') format('embedded-opentype');

}
</style>

<![endif]-->

<?php wp_footer (); ?>
</div>
</div>

<script type="text/javascript" src="https://www.google.com/jsapi">

</script>

<script type="text/javascript">
    /* <![CDATA[ */
    google.load ("webfont","1");

    google.setOnLoadCallback (function ()
        {
            WebFont.load ({
                google:{
                    families:['Francois+One','Damion']
                }});
        });
    /* ]]> */
</script>

<script type="text/javascript"> Cufon.now ();</script>

<?php wp_enqueue_script ("jquery"); ?>


<script type="text/javascript">
    /* <![CDATA[ */
    var _gaq = _gaq || [];
    _gaq.push (['_setAccount','UA-19084817-1']);
    _gaq.push (['_trackPageview']);

    (function ()
        {
            var ga = document.createElement ('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' :
                    'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName ('script')[0];
            s.parentNode.insertBefore (ga,s);
        }) ();
    /* ]]> */
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/"></script>

</body>


</html>
