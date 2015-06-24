<?php
/*
 * Template Name: 404
 *
 * @package WordPress
 * @subpackage nastymondays
 */
get_header ();
?>

<body <?php body_class (); ?>>
    <div id="wrapper">

        <div id="pasador_login">

            <h1 class="cuatro0cuatro">

                <a href="/">

                    <img src="src/images/err/404.jpg"
                         alt="<?php print 'Error 404. Nasty Mondays unsuccessful try. We cabbot seem to find what you are looking for. Let us take you back home.'; ?>"
                </a>
            </h1>

            <?php include (TEMPLATEPATH . "modules/searchform.php"); ?>

        </div>

    </div>

</body>
</html>