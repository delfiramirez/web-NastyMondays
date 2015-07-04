<?php
/**
 * Custom Module SearchForm
 *
 * @package WordPress
 * @subpackage nastymondays
 */
?>

<form
    method="get"
    id="searchform"
    class="searchform"
    action="<?php bloginfo('url'); ?>" />
<div>
    <input
        type="text"
        value="<?php the_search_query(); ?>"
        name="s"
        id="s" />
    <input
        type="submit"
        id="searchsubmit"
        value="Search" />
</div>
</form>
