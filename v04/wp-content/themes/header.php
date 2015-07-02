<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"
      dir="ltr"
      lang="en-US"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

            <title>
                <?php
                if ( is_single () )
                    {
                    echo bloginfo ('name');
                    single_post_title ();
                    }
                elseif ( is_home () || is_front_page () )
                    {
                    echo the_title ();
                    print ' &spades; ';
                    }
                elseif ( is_page () )
                    {
                    echo the_title ();
                    print ' &spades; ';
                    single_post_title ('');
                    }
                elseif ( is_404 () )
                    {
                    echo the_title ();
                    print ' | Not Found';
                    }
                else
                    {
                    echo the_title ();
                    print ' &spades; ' . bloginfo ('description');
                    }
                ?>
            </title>

            <base href=<?php bloginfo ('url'); ?>"/>

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

                          <meta name="description"
                          content="<?php echo get_the_excerpt (); ?>" />
                          <meta name="keywords"
                          content="<?php echo $keywords; ?>" />

                        <meta property="og:title"
                              content="<?php the_title (); ?>"/>
                        <meta property="og:description"
                              content="<?php
                              if ( function_exists ('wpseo_get_value') )
                                  {
                                  echo wpseo_get_value ('metadesc');
                                  }
                              else
                                  {
                                  echo $post->post_excerpt;
                                  }
                              ?>"/>

                        <meta property="og:url"
                              content="<?php the_permalink (); ?>"/>
                        <meta property="og:image"
                              content="<?php echo get_fbimage (); ?>"/>
                        <meta property="og:type"
                              content="<?php
                              if ( is_single () || is_page () )
                                  {
                                  echo "article";
                                  }
                              else
                                  {
                                  echo "website";
                                  }
                              ?>"/>
                        <meta property="og:site_name"
                              content="<?php bloginfo ('name'); ?>"/>
                        <meta property="fb:app_id"
                              content="158602467548779"/>

                        <meta property="og:type"
                              content="<?php
                              if ( is_single () || is_page () )
                                  {
                                  echo "article";
                                  }
                              else
                                  {
                                  echo "website";
                                  }
                              ?>"/>
                              <?php
                          endif;
                      endif;
                      ?>

                <meta http-equiv="imagetoolbar"
                      content="false" />

                <meta http-equiv="X-UA-Compatible"
                      content="IE=8" />

                <meta name="google-site-verification"
                      content="AWjiBhKD6lYzAVMMplUipBoFzUQ_VdR3CIY0C58ZPJ8" />
                <link rel="canonical"
                      href="<?php bloginfo ('url'); ?>"
                      />

                <link rel="start"
                      href="<?php bloginfo ('url'); ?>"
                      title="<?php the_title (); ?>"
                      />

                <link rel="alternate"
                      media="handheld"
                      href="<?php bloginfo ('url'); ?>"
                      />

                <link href='http://fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

                    <link rel="stylesheet"
                          href="<?php bloginfo ("template_url"); ?>/style.css"
                          type="text/css"
                          media="screen, projection"
                          />

                    <!--[if (gte IE 5.5)&(lte IE 8)]>
                    <script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/js/ie-css3.js"></script>
                    <![endif]-->

                    <!--[if lte IE 6]
                    <script type="text/javascript" src="<?php bloginfo ("template_url"); ?>/js/supersleight/supersleight-min.js"></script>
                    <![endif]-->

                    <!--[if gte IE 9]>
                    <script type="text/javascript"> Cufon.set('engine', 'canvas'); </script>
                    <![endif]-->

                    <script type="text/javascript"
                    src="<?php bloginfo ("template_url"); ?>/js/nasty.js"></script>
                    <script type="text/javascript"
                    src="<?php bloginfo ("template_url"); ?>/js/cufon-yui.js"></script>
                    <script type="text/javascript"
                    src="<?php bloginfo ("template_url"); ?>/js/nasty_400.font.js"></script>
                    <script type="text/javascript"
                    src="<?php bloginfo ("template_url"); ?>/js/tipografia.js"></script>
                    <script type="text/javascript"
                    src="<?php bloginfo ("template_url"); ?>/js/bsn.Crossfader.js"></script>

                    <?php wp_head (); ?>

                    </head>

                    <body>

                        <div id="wrapper">

                            <div class="langi">
                                <?php echo qtrans_generateLanguageSelectCode ('text'); ?>
                            </div>

                            <h1 class="inicio">
                                <?php the_title (); ?>. <?php bloginfo ('description'); ?>
                            </h1>

                            <?php wp_nav_menu ('menu=Top'); ?>
