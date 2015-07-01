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
                        src="<?php echo get_template_directory (); ?>/src/images/err/not-found.jpg"
                        alt="<?php print '%45%72%72%6f%72%20%34%30%34%2e%20%57%65%20%63%61%6e%6e%6f%74%20%73%65%65%6d%20%74%6f%20%66%69%6e%64%20%77%68%61%74%20%79%6f%75%20%61%72%65%20%6c%6f%6f%6b%69%6e%67%20%66%6f%72%2e%20%4c%65%74%20%75%73%20%74%61%6b%65%20%79%6f%75%20%62%61%63%6b%20%68%6f%6d%65%2e%6f%6d%61'; ?>"  />
                </a>

            </h1>

        </div>

    </div>

</body>

</html>