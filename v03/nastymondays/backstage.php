<?php
/*
  Template Name: Backstage
 *
 * @package WordPress
 * @subpackage nastymondays
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>NASTY MONDAYS BACKSTAGE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <script type="text/javascript" src="<?php bloginfo ('stylesheet_directory'); ?>src/js/swfobject.js"></script>
        <script src="/src/js/swfaddress.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            var attributes = {id: "nastymondays"};
            swfobject.registerObject ("nastymondays", "10.0.45", "expressInstall.swf");
        </script>
        <style type="text/css" media="screen">
            html,
            body,
            #container,
            #nastyRoom
            {
                height:100%;
                background-color:#040404;
            }

            body
            { margin:0;
              padding:0;
              overflow:hidden;
            }
        </style>
    </head>
    <?php flush (); ?>
    <body>
        <div id="nastyRoom">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%" id="nastymondays">
                <param name="movie" value="pre.swf" />
                <param name="quality" value="best" />
                <param name="wmode" value="opaque" />
                <param name="allowfullscreen" value="true" />
                <param name="allowscriptaccess" value="sameDomain" />
                <!--[if !IE]>
                <object type="application/x-shockwave-flash" data="pre.swf" width="100%" height="100%">
                        <param name="quality" value="best" />
                        <param name="wmode" value="opaque" />
                        <param name="allowfullscreen" value="true" />
                        <param name="allowscriptaccess" value="sameDomain" />

                </object>
                <![endif]-->
            </object>
        </div>
        <a name="intro"></a>
        <a name="nastyroom"></a>
        <a name="Mad-Max"></a>
        <a name="Soren-Manzoni"></a>
        <a name="NMRoom"></a>
        <a name="Photo"></a>
        <a name="eventsNM"></a>
        <a name="sendFriend"></a>
        <a name="Nasty-Games"></a>
        <a name="Video"></a>
    </body>
</html>