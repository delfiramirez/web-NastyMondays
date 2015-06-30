<?php
/*
 * Template Name: 404
 *
 * @package WordPress
 * @subpackage nastymondays
 *
 */

get_header ();
?>

<body <?php body_class (); ?>>

    <div id="wrapper">

        <div id="pasador_login">

            <?php include (TEMPLATEPATH . "/searchform.php"); ?>

            <h1 class="cuatro0cuatro">

                <a href="/">

                    <img
                        src="http://nastymondays.com/src/images/err/not-found.jpg"
                        alt="<?php print 'Error 404. We cannot seem to find what you are looking for. Let us take you back home.'; ?>"  />
                </a>

            </h1>

        </div>

    </div>

</body>

</html>