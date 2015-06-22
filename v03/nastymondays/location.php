<?php
/*
 * Template Name: Location
 *
 * @package WordPress
 * @subpackage nastymondays
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://gmpg.org/xfn/11">
        <base hrf="http://nastymonays.com">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <title><?php wp_title (); ?> <?php print " &spades; NM Official Website" ?></title>
            <meta name="description" content="Como ir o llegar a Nasty Mondays Barcelona sala Apolo Nou de la Rambla 113 Barcelona 08004 Phone: (0034) 93 441 40 01 TUBE: Paral.lel [L3] BUS: 20, 36, 57, 64 NIT BUS: N0, N6" />
            <meta name="keywords" content="Location, localizacion, maps, Soren, Madmax, Apolo, Nasty, Mondays, Barcelona,sala, Apolo, Nou, de la Rambla, 113, Barcelona, 08004,Paral.lel, [L3], Crappy, Tuesdays" />
            <meta http-equiv="content-language" content="en, es">
                <link rel="start" href="http://www.nastymondays.com/location" title="<?php bloginfo ('name'); ?> Addres - Location" />
                <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" media="screen" />
                <link rel="stylesheet" type="text/css" href="<?php bloginfo ("template_url"); ?>/c/retina.css" media="only screen and (-webkit-min-device-pixel-ratio: 2)"
                      />
                <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lobster' type='text/css' />

                <!--[if lte IE 6]>
                <script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/js/supersleight/supersleight-min.js"></script>
                <!-- <![endif]-->

                <script type="text/javascript" src="http://www.google.com/jsapi"></script>
                <script type="text/javascript">
                    /* <![CDATA[ */
                    google.load ("maps", "3", {other_params: "sensor=false"});
                    function initialize ()
                        {
                            var map;
                            var myLatlng = new google.maps.LatLng (41.3745, 2.169551);
                            var myOptions = {
                                zoom: 18,
                                center: myLatlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                            };

                            map = new google.maps.Map (document.getElementById ("map_canvas"), myOptions);


                            var image = "<?php bloginfo ("template_url"); ?>/images/logom.png";
                            var myLatLng2 = new google.maps.LatLng (41.374506, 2.169456);
                            var nastyMarker = new google.maps.Marker ({
                                position: myLatLng2,
                                map: map,
                                icon: image
                            });

                        }
                    /* ]]> */
                </script>

                </head>
                <body onload="initialize ();">
                    <div id="wrapper">

                        <h1 class="inicio">
                            <?php print _e ('Nasty Mondays Barcelona- Address &middot; Location'); ?>
                        </h1>
                        <?php wp_nav_menu ('menu=Top'); ?>

                        <div id ="pasador2">
                            <div class="left">

                                <h1 class="inicio">

                                    <a href="<?php echo get_option ('home'); ?>">
                                        <?php bloginfo ('name'); ?>
                                    </a>
                                </h1>

                                <h2 class="inicio">
                                    <?php bloginfo ('description'); ?>
                                </h2>

                                <address>
                                    <span class="nasty2">
                                        <?php bloginfo ('name'); ?> Barcelona</span>
                                    <br />
                                    Nou de la Rambla 113<br />
                                    Barcelona 08004<br />
                                    Phone: (0034) 93 441 40 01<br />
                                    TUBE: Paral.lel [L3]<br />
                                    BUS: 20, 36, 57, 64<br />
                                    NIT BUS: N0, N6<br />
                                    <span class="nasty2">La [2] de Nasty</span>
                                    <br />
                                    Nou de la Rambla 111<br />
                                </address>
                            </div>

                            <div id="map_canvas"></div>
                        </div>
                        <hr />
                        <?php wp_nav_menu ('menu=NastyMondays'); ?>

                        <?php get_sidebar (); ?>

                        <?php get_template_part ('modules/segonquart'); ?>
                        <?php get_template_part ('modules/bckstage'); ?>

                        <?php get_footer (); ?>
                    </div>
                    </div>
                </body>
                </html>