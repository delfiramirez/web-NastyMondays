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

                    <img src="<?php echo get_template_directory (); ?>/src/images/err/404.jpg"
                         alt="<?php print '%45%72%72%6f%72%20%34%30%34%2e%20%57%65%20%63%61%6e%6e%6f%74%20%73%65%65%6d%20%74%6f%20%66%69%6e%64%20%77%68%61%74%20%79%6f%75%20%61%72%65%20%6c%6f%6f%6b%69%6e%67%20%66%6f%72%2e%20%4c%65%74%20%75%73%20%74%61%6b%65%20%79%6f%75%20%62%61%63%6b%20%68%6f%6d%65%2e%20%57%65%20%63%61%6e%20%6f%66%66%65%72%20%79%6f%75%20%61%20%62%69%67%20%64%65%61%6c%20%20%70%6c%61%63%65%6d%65%6e%74%2c%20%6c%61%79%65%72%69%6e%67%20%61%6e%64%20%69%6e%74%65%67%72%61%74%69%6f%6e%2e'; ?>"
                </a>
            </h1>

            <?php include (TEMPLATEPATH . "modules/searchform.php"); ?>

        </div>

    </div>

</body>
</html>