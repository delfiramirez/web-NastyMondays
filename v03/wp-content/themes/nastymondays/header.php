<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes (); ?>>

    <head>


        <title><?php
            if (
                    is_single () )
                {
                print bloginfo ('name') . ' presents  &spades; ';
                single_post_title ();
                }
            elseif (
                    is_home () || is_front_page () )
                {
                bloginfo ('name');
                print ' &spades; ';
                bloginfo ('description');
                }
            elseif ( is_page () )
                {
                bloginfo ('name');
                print ' &spades; ';
                single_post_title ('');
                }
            elseif ( is_search () )
                {
                bloginfo ('name');
                print ' &spades; Search results for ' . wp_specialchars ($s);
                }
            elseif ( is_404 () )
                {
                bloginfo ('name');
                print ' | Not Found';
                }
            else
                {
                bloginfo ('name');
                wp_title ('|');
                print ' &spades;' . bloginfo ('name');
                }
            ?></title>

        <meta http-equiv="content-language" content="en" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta name="viewport" content="width=970" />

        <meta name="description" content="<?php echo get_the_excerpt (); ?>" />
        <?php
        global $post;
        if ( is_single () || is_page () || is_home () ) :
            $tags = get_the_tags ($post->ID);
            if ( $tags ) :
                foreach ( $tags as $tag ) :
                    $sep = (empty ($keywords)) ? '' : ', ';
                    $keywords .= $sep . $tag->name;
                endforeach;
                ?>
                <meta name="keywords" content="<?php echo $keywords; ?>" />
                <?php
            endif;
        endif;
        ?>
        <base href="<?php bloginfo ('url'); ?>" />
        <meta http-equiv="imagetoolbar" content="false" />
        <meta name="MSSmartTagsPreventParsing" content="true" />
        <meta http-equiv="X-UA-Compatible" content="IE=8" />
        <meta name="robots" content="noarchive" />
        <meta name="google-site-verification" content="AWjiBhKD6lYzAVMMplUipBoFzUQ_VdR3CIY0C58ZPJ8" />

        <link rel="canonical"
              href="<?php bloginfo ('url'); ?>"
              />
        <link rel="start"
              href="<?php bloginfo ('uri'); ?>"
              title="<?php bloginfo ('name'); ?>"
              />
        <link rel="pingback"
              href="<?php bloginfo ('pingback_url'); ?>"
              />
        <link rel="alternate"
              media="handheld"
              href="<?php bloginfo ('uri'); ?>"
              />
        <link rel="stylesheet"
              href="<?php bloginfo ('stylesheet_url'); ?>"
              type="text/css"
              media="screen, projection"
              />
        <link rel="stylesheet" h
              ref="<?php bloginfo ('stylesheet_url'); ?>"
              type="text/css"
              media="only screen and (-webkit-min-device-pixel-ratio: 2)"
              />

        <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type='text/css' />
        <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Molengo" rel="stylesheet" type="text/css" />

        <link rel="apple-touch-icon-precomposed"
              href="<?php bloginfo ('stylesheet_url'); ?>/ico/nasty-icon.png"
              />

        <!--[if lte IE 5]
          <link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo ("template_url"); ?>/src/c/reset.css" />
        <![endif]-->

        <!--[if lte IE 6]
          <link rel="stylesheet" type="text/css" media="screen, projection" href="http://universal-ie6-css.googlecode.com/files/ie6.0.3.css" />
        <![endif]-->


        <!--[if lte IE 6]
        <script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/js/supersleight/supersleight-min.js"></script>
        <![endif]-->

        <!--[if IE]
        <meta http-equiv="Page-Enter" content="blendTrans(duration=0)" />
        <meta http-equiv="Page-Exit" content="blendTrans(duration=0)" />
        <![endif]-->

        <script type="text/javascript"
        src="<?php bloginfo ("template_url"); ?>/src/js/nasty.js"></script>
        <script type="text/javascript"
        src="<?php bloginfo ("template_url"); ?>/src/js/jquery-1.3.2.min.js"></script>
        <script type="text/javascript"
        src="<?php bloginfo ("template_url"); ?>/src/js/bsn.Crossfader.js"></script>
    </head>
    <body>

        <div id="wrapper">

            <h1 class="inicio">

                <?php bloginfo ('name'); ?>
            </h1>
            <?php wp_nav_menu ('menu=Top'); ?>