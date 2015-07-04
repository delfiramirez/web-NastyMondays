<?php
/**
 * Template Name : Location
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        
        <title>
            <?php wp_title (); ?> <?php print '&spades;'; ?>  <?php bloginfo ('name'); ?>
        </title>
        
        <meta name="description"
              content="<?php echo get_the_excerpt (); ?>" 
              />
              
        <meta name="keywords"
              content="<?php echo $keywords; ?>" 
              />

        <meta http-equiv="content-language" content="en, es">
        <meta http-equiv="imagetoolbar" content="false" />
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <meta name="google-site-verification" content="AWjiBhKD6lYzAVMMplUipBoFzUQ_VdR3CIY0C58ZPJ8" />
            
            <link rel="canonical" 
            	  href="<?php bloginfo('url') ?>" 
            	  />
            	  
            <link rel="start"
            	  href="<?php bloginfo('url') ?>" 
            	  title="<?php bloginfo('name') ?>"
            	   />
            	   
            <link rel="stylesheet" 
            	  href="<?php echo get_stylesheet_uri (); ?>/style.css" 
            	  type="text/css" 
            	  media="screen, projection" 
            	  />

            	   
            <link href='http://fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext' 
                  rel='stylesheet' 
                  type='text/css'>


                <!--[if lte IE 6]
                <script type="text/javascript" src="<?php echo get_template_directory (); ?>/js/supersleight/supersleight-min.js"></script>
                <![endif]-->
                
                <!--[if gte IE 9]>
                <script type="text/javascript"> Cufon.set('engine', 'canvas'); </script>
                <![endif]-->

                <script type="text/javascript"
                src="<?php bloginfo ("template_url"); ?>/js/nasty.js"></script>
                <script type="text/javascript"
                src="<?php bloginfo ("template_url"); ?>/js/cufon-yui.js"></script>
                <script type="text/javascript"
                src="<?php bloginfo ("template_url"); ?>/src/js/nasty_400.font.js"></script>
                <script type="text/javascript"
                src="<?php bloginfo ("template_url"); ?>/src/js/tipografia.js"></script>
                <script type="text/javascript"
                src="<?php bloginfo ("template_url"); ?>/src/js/bsn.Crossfader.js"></script>

                <script type="text/javascript">
                
                    /* <![CDATA[ */

                    Cufon.replace ('h5');
                    Cufon.replace ('h4');
                    Cufon.replace ('.menu');

                    /* ]]> */
                    
                </script>

                <script
                    type="text/javascript"
                	src="http://www.google.com/jsapi"></script>

                <script type="text/javascript">

                    /* <![CDATA[ */

                    google.load ("maps","3",{other_params:"sensor=false"});
                    function initialize ()
                        {
                            var map;
                            var myLatlng = new google.maps.LatLng (41.3745,2.169551);
                            var myOptions = {
                                zoom:18,
                                center:myLatlng,
                                mapTypeId:google.maps.MapTypeId.ROADMAP,
                            };

                            map = new google.maps.Map (document.getElementById ("map_canvas"),myOptions);

                            function loadScript ()
                                {
                                    var script = document.createElement ("script");
                                    script.type = "text/javascript";
                                    script.src = "http://maps.google.com/maps/api/js?sensor=false&callback=initialize";
                                    document.body.appendChild (script);
                                }

                            window.onload = loadScript;

                            var image = "<?php echo get_bloginfo ('template_directory'); ?>/images/logo.gif";
                            var myLatLng2 = new google.maps.LatLng (41.374506,2.169456);
                            var nastyMarker = new google.maps.Marker ({
                                position:myLatLng2,
                                map:map,
                                icon:image
                            });

                        }
                        
                    /* ]]> */

                </script>

                <?php wp_head (); ?>

                </head>

                <body onload="initialize ();">

                    <div id="wrapper">

                        <h1 class="inicio">

                            <?php bloginfo ('name'); ?> <?php bloginfo ('description'); ?>- <?php _e ("<!--:en-->Address &middot; Location<!--:--><!--:es-->Localiaci&oacute;n - Como llegar<!--:--><!--:ca-->Com Arribar-hi<!--:-->"); ?>

                        </h1>

                        <?php wp_nav_menu ('menu=Top'); ?>

                        <div id ="pasador2">

                            <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>

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
                                            <h4> <?php bloginfo ('name'); ?></h4>
                                            <br />
                                            Nou de la Rambla 113<br />
                                            %42%61%72%63%65%6c%6f%6e%61  08004<br />
                                            Phone: (0034) 93 441 40 01<br />
                                            TUBE: Paral.lel [L3]<br />
                                            BUS: 20, 36, 57, 64<br />
                                            NIT BUS: N0, N6<br />
                                            <h4>%4c%61%20%5b%32%5d%20%64%65%20%4e%61%73%74%79</h4>
                                            <br />
                                            Nou de la Rambla 111<br />
                                        </address>

                                    </div>

                                    <div id="map_canvas"></div>

                                    <?php
                                endwhile;
                            endif;
                            ?>

                        </div>

                        <hr />
                        
                        <?php wp_nav_menu ('menu=Division'); ?>

                        <?php get_sidebar (); ?>

                        <?php get_template_part ('segonquart'); ?>

                        <?php get_footer (); ?>
