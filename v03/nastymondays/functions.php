<?php

// Nasty Mondays BCN Kustom Kar Kommando Wordpress 2.9 Theme . Developed at SEgonquart Studio
// WP 2.9

define ('THEMENAME', 'Nasty Mondays');
if ( is_page_template () || is_attachment () || !is_active_sidebar ('') )
    {
    global $content_width;
    $content_width = 850;
    }

if ( !defined ('WP_POST_REVISIONS') )
    define ('WP_POST_REVISIONS', 5);

if ( function_exists ('add_theme_support') )
    {
    add_theme_support ('custom-background');
    add_theme_support ('automatic-feed-links');

    add_theme_support ('menus');
    add_theme_support ('nav-menus');
    add_theme_support ('custom-header');
    }

add_custom_background ();
add_editor_style ();
add_theme_support ('wp_paginate');
add_theme_support ('post-thumbnails');

set_post_thumbnail_size (150, 150, true);
add_image_size ('featured-thumbnail', 150, 150);

add_filter ('the_content', 'make_clickable');
add_post_type_support ('page', 'excerpt');

add_filter ('login_errors', create_function ('$a', "return null;"));

remove_filter ('comment_text', 'make_clickable', 9);

function nm_mis_menus ()
    {
    register_nav_menus (
            array (
                'menu-1' => __ ('Menu 1'),
                'menu-2' => __ ('Menu 2'),
                'menu-3' => __ ('Menu 3'),
                'menu-4' => __ ('Menu 4'),
                'menu-5' => __ ('Menu 5')
    ));
    }

add_action ('init', 'nm_mis_menus');

function nm_unregister_widgets ()
    {
    unregister_widget ('WP_Widget_Search');
    unregister_widget ('WP_Widget_Tag_Cloud');
    unregister_widget ('WP_Widget_RSS');
    unregister_widget ('WP_Widget_Meta');
    unregister_widget ('WP_Widget_Recent_Comments');
    unregister_widget ('WP_Nav_Menu_Widget');
    }

add_action ('widgets_init', 'nm_unregister_widgets');

if ( function_exists ('register_sidebar') )
    {
    register_sidebar (array (
        'name'          => 'Top Left',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Top Center',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Top Right',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Bottom Left',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Bottom Center',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Bottom Right',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    register_sidebar (array (
        'name'          => 'Sidebar',
        'before_widget' => '<div id="%2$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => "\n<h4>",
        'after_title'   => "</h4>\n",
    ));
    }

function nm_killVersion ()
    {
    return '';
    }

remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'rsd_link');
remove_action ('wp_head', 'wp_generator');
remove_action ('wp_head', 'feed_links', 2);
remove_action ('wp_head', 'index_rel_link');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'feed_links_extra', 3);
remove_action ('wp_head', 'start_post_rel_link', 10, 0);
remove_action ('wp_head', 'parent_post_rel_link', 10, 0);
remove_action ('wp_head', 'adjacent_posts_rel_link', 10, 0);

add_filter ('the_generator', 'nm_killVersion');

function nm_feedFilter ($query)
    {
    if ( $query->is_feed )
        {
        $query->set ('post_type', 'any');
        $query->set ('post_parent', '0');
        }
    return $query;
    }

add_filter ('pre_get_posts', 'nm_feedFilter');

function nm_custom_admin_footer ()
    {
    print '<a href="http://segonquart.net">Nasty Mondays Website, designed and developed by Delfi Ramirez for Nasty Mondays Inc.</a>';
    }

add_filter ('admin_footer_text', 'nm_custom_admin_footer');

function nm_debug_admin_bar ()
    {
    print '<style type="text/css" media="screen">#querylist { display:block !important; }</style>';
    }

add_action ('wp_head', 'nm_debug_admin_bar');

function nm_howdy ($links)
    {
    $greeting     = 'Nasty';
    $links[ '5' ] = str_replace ('Howdy', $greeting, $links[ '5' ]);
    return $links;
    }

add_filter ('admin_user_info_links', 'nm_howdy');

function nm_adminLogo ()
    {
    echo '<style type="text/css"> #header-logo { background-image: url(' . get_bloginfo ('url') . '/logom.png) top left no-repeat !important; }
    </style>';
    }

add_action ('admin_head', 'nm_adminLogo');

function nm_settings_link ()
    {
    add_options_page (__ ('All Settings'), __ ('All Settings'), 'administrator', 'options.php');
    }

add_action ('admin_menu', 'nm_settings_link');

if ( function_exists ('automatic_feed_links') )
    {
    automatic_feed_links ();
    }
else
    {
    return;
    }

function nm_blog_favicon ()
    {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo ('wpurl') . '/deploy/ico/favicon.ico" />';
    }

add_action ('wp_head', 'nm_blog_favicon');

function nm_facebook_meta ()
    {
    if ( is_single () || is_page () )
        {
        global $post;
        $title     = esc_attr ($post->post_title);
        $site_name = esc_attr (get_bloginfo ());
        $image     = false;
        if ( has_post_thumbnail ($post->ID) )
            {
            $id    = get_post_thumbnail_id ($post->ID);
            $image = wp_get_attachment_url ($id);
            }
        print "\n\t" . '<meta property="og:title" content="' . $title . '"/>';
        print "\n\t" . '<meta property="og:site_name" content="' . $site_name . '"/>';
        if ( $image )
            print "\n\t" . '<meta property="og:image" content="' . $image . '"/>';
        }
    }

add_action ('wp_head', 'nm_facebook_meta');

if ( function_exists ('add_shortcode') )
    {
    add_shortcode ('sm', 'nm_secureMail');
    }

function nm_secureMail ($atts)
    {
    extract (shortcode_atts (array (
        "mailto" => '',
        "txt"    => ''
                    ), $atts));
    $mailto = antispambot ($mailto);
    $txt    = antispambot ($txt);
    return '<a href="mailto:' . $mailto . '">' . $txt . '</a>';
    }

function nm_SearchFilter ($query)
    {
    if ( $query->is_search )
        {
        $query->set ('post_type', 'post');
        }
    return $query;
    }

add_filter ('pre_get_posts', 'nm_SearchFilter');

function nm_clean_bad_content ($bPrint = false)
    {
    global $post;
    $nmPostContent  = $post->post_content;
    $nmRemoveFilter = array ( "~<p[^>]*>\s?</p>~", "~<a[^>]*>\s?</a>~", "~<font[^>]*>~", "~<\/font>~", "~style\=\"[^\"]*\"~", "~<span[^>]*>\s?</span>~" );
    $nmPostContent  = preg_replace ($szRemoveFilter, '', $nmPostContent);
    $nmPostContent  = apply_filters ('the_content', $nmPostContent);
    if ( $bPrint == false )
        return$nmPostContent;
    else
        echo$nmPostContent;
    }

$myExcerpt = get_the_excerpt ();
$tags      = array ( '<p>', '</p>' );
$myExcerpt = str_replace ($tags, '', $myExcerpt);
echo $myExcerpt;

function nm_pdflink ($attr, $content)
    {
    return '<a class="pdf" href="http://docs.google.com/viewer?url=' . $attr[ 'href' ] . '">' . $content . '</a>';
    }

add_shortcode ('pdf', 'nm_pdflink');

function nm_remove_nofollow ($string)
    {
    $string = str_ireplace (' rel="nofollow"', '', $string);
    return $string;
    }

add_filter ('the_content', 'nm_remove_nofollow');

function nm_body_class ($classes)
    {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
    if ( $is_lynx )
        $classes[] = 'lynx';
    elseif ( $is_gecko )
        $classes[] = 'gecko';
    elseif ( $is_opera )
        $classes[] = 'opera';
    elseif ( $is_NS4 )
        $classes[] = 'ns4';
    elseif ( $is_safari )
        $classes[] = 'safari';
    elseif ( $is_chrome )
        $classes[] = 'chrome';
    elseif ( $is_IE )
        $classes[] = 'ie';
    else
        $classes[] = 'unknown';
    if ( $is_iphone )
        $classes[] = 'iphone';
    return $classes;
    }

add_filter ('body_class', 'nm_body_class');

function category_id_class ($classes)
    {
    global $post;
    foreach ( (get_the_category ($post->ID) ) as $category )
        $classes [] = 'cat-' . $category->cat_ID . '-id';
    return $classes;
    }

add_filter ('post_class', 'nm_category_id_class');
add_filter ('body_class', 'nm_category_id_class');

function nm_entry_published_link ()
    {

    $year  = get_the_time ('Y');
    $month = get_the_time ('m');
    $day   = get_the_time ('d');
    $out   = '';
    $out .= ' <a href="' . get_day_link ($year, $month, $day) . '" title="Archive for ' . esc_attr (get_the_time ('d F Y')) . '">' . $day . '</a>';
    $out .= '<a href="' . get_month_link ($year, $month) . '" title="Archive for ' . esc_attr (get_the_time ('F Y')) . '">' . get_the_time ('F') . '</a>';
    $out .= ' <a href="' . get_year_link ($year) . '" title="Archive for ' . esc_attr ($year) . '">' . $year . '</a>';

    return $out;
    }

add_shortcode ('entry-link-published', 'nm_entry_published_link');

function nm_showArchivePostByPost ($wp_get_archives_args)
    {
    $wp_get_archives_args[ 'type' ] = 'postbypost';
    return $wp_get_archives_args;
    }

function nm_admin_columns ($columns)
    {
    $columns[ 'views' ] = 'Views';
    return $columns;
    }

add_filter ('manage_posts_columns', 'nm_admin_columns');

function nm_admin_show_columns ($name)
    {
    global $post;
    switch ( $name )
        {
        case 'views':
            $views = get_post_meta ($post->ID, 'views', true);
            echo $views;
        }
    }

add_action ('manage_posts_custom_column', 'nm_admin_show_columns');

if ( !function_exists ('fb_AddThumbColumn') && function_exists ('add_theme_support') )
    {

    add_theme_support ('post-thumbnails', array ( 'post', 'page' ));

    function fb_AddThumbColumn ($cols)
        {

        $cols[ 'thumbnail' ] = __ ('Thumbnail');

        return $cols;
        }

    function fb_AddThumbValue ($column_name, $post_id)
        {

        $width  = (int) 35;
        $height = (int) 35;

        if ( 'thumbnail' == $column_name )
            {

            $thumbnail_id = get_post_meta ($post_id, '_thumbnail_id', true);

            $attachments = get_children (array ( 'post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image' ));
            if ( $thumbnail_id )
                $thumb       = wp_get_attachment_image ($thumbnail_id, array ( $width, $height ), true);
            elseif ( $attachments )
                {
                foreach ( $attachments as $attachment_id => $attachment )
                    {
                    $thumb = wp_get_attachment_image ($attachment_id, array ( $width, $height ), true);
                    }
                }
            if ( isset ($thumb) && $thumb )
                {
                echo $thumb;
                }
            else
                {
                echo __ ('None');
                }
            }
        }

    add_filter ('manage_posts_columns', 'fb_AddThumbColumn');
    add_action ('manage_posts_custom_column', 'fb_AddThumbValue', 10, 2);

    add_filter ('manage_pages_columns', 'fb_AddThumbColumn');
    add_action ('manage_pages_custom_column', 'fb_AddThumbValue', 10, 2);
    }

function nm_caption_off ()
    {
    return true;
    }

add_filter ('disable_captions', 'nm_caption_off');

function nm_prensa_title ()
    {
    global $post;
    $thePostID = $post->ID;
    $post_id   = get_post ($thePostID);
    $title     = $post_id->post_title;
    $perm      = get_permalink ($post_id);
    $post_keys = array ();
    $post_val  = array ();
    $post_keys = get_post_custom_keys ($thePostID);

    if ( !empty ($post_keys) )
        {
        foreach ( $post_keys as $pkey )
            {
            if ( $pkey == 'url1' || $pkey == 'title_url' || $pkey == 'url_title' )
                {
                $post_val = get_post_custom_values ($pkey);
                }
            }
        if ( empty ($post_val) )
            {
            $link = $perm;
            }
        else
            {
            $link = $post_val[ 0 ];
            }
        }
    else
        {
        $link = $perm;
        }
    print '<h2 class="enlaceprensa"><a href="' . $link . '" rel="bookmark" title="' . $title . '">' . $title . '</a></h2>';
    }

//Activamos con funcion php print_post_title()


function nm_breadcrumb ()
    {
    if ( !is_home () )
        {
        print '<p class="breadcrumb"><span class="breadcrumb_info small">You are here:</span> <a class="small" href="';
        echo get_option ('home');
        print '">';
        bloginfo ('name');
        print '</a><span class="small">  � </span>';
        if ( is_category () || is_single () )
            {
            the_category ('title_li=');
            if ( is_single () )
                {
                print '<span class="small"> � </span>';
                the_title ();
                }
            }
        elseif ( is_page () )
            {
            echo the_title ();
            }
        }
    }

function bm_displayArchives ()
    {
    global $month, $wpdb, $wp_version;
    $sql            = 'SELECT
		DISTINCT YEAR(post_date) AS year,
		MONTH(post_date) AS month,
		count(ID) as posts
		FROM ' . $wpdb->posts . '
		WHERE post_status="publish"
		AND post_type="post"
		AND post_password=""
		GROUP BY YEAR(post_date),
		MONTH(post_date)
		ORDER BY post_date DESC';
    $archiveSummary = $wpdb->get_results ($sql);

    if ( $archiveSummary )
        {

        foreach ( $archiveSummary as $date )
            {

            unset ($bmWp);

            $bmWp = new WP_Query ('year=' . $date->year . '&monthnum=' . zeroise ($date->month, 2) . '&posts_per_page=-1' . '&cat=-126,-127' . '&paged=' . $paged);


            if ( $bmWp->have_posts () )
                {

                $url  = get_month_link ($date->year, $date->month);
                $text = $month[ zeroise ($date->month, 2) ] . ' ' . $date->year;

                echo get_archives_link ($url, $text, '', '<div class="sitemap"><h5>', '</h5>');
                echo '<ul>';

                while ( $bmWp->have_posts () )
                    {
                    $bmWp->the_post ();
                    echo '<li>&spades; <a href=" ' . get_permalink ($bmWp->post) . '" title="' . wp_specialchars ($text, 1) . '">' . wptexturize ($bmWp->post->post_title) . '</a></li>';
                    }

                echo '</ul></div>';
                }
            }
        }
    }

function nm_seo_slugs ($slug)
    {
    if ( $slug )
        return $slug;
    global $wpdb;
    $seo_slug       = strtolower (stripslashes ($_POST[ 'post_title' ]));
    $seo_slug       = preg_replace ('/&.+?;/', '', $seo_slug);
    $seo_slug       = preg_replace ("/[^a-zA-Z0-9 \']/", "", $seo_slug);
    $seo_slug_array = array_diff (split (" ", $seo_slug), seo_slugs_stop_words ());
    $seo_slug       = join ("-", $seo_slug_array);
    return $seo_slug;
    }

function nm_seo_slugs_stop_words ()
    {
    return array ( "a", "able", "about", "above", "abroad", "according", "accordingly", "across", "actually", "adj", "after", "afterwards", "again", "against", "ago", "ahead", "ain't", "all", "allow", "allows", "almost", "alone", "along", "alongside", "already", "also", "although", "always", "am", "amid", "amidst", "among", "amongst", "an", "and", "another", "any", "anybody", "anyhow", "anyone", "anything", "anyway", "anyways", "anywhere", "apart", "appear", "appreciate", "appropriate", "are", "aren't", "around", "as", "a's", "aside", "ask", "asking", "associated", "at", "available", "away", "awfully", "b", "back", "backward", "backwards", "be", "became", "because", "become", "becomes", "becoming", "been", "before", "beforehand", "begin", "behind", "being", "believe", "below", "beside", "besides", "best", "better", "between", "beyond", "both", "brief", "but", "by", "c", "came", "can", "cannot", "cant", "can't", "caption", "cause", "causes", "certain", "certainly", "changes", "clearly", "c'mon", "co", "co.", "com", "come", "comes", "concerning", "consequently", "consider", "considering", "contain", "containing", "contains", "corresponding", "could", "couldn't", "course", "c's", "currently", "d", "dare", "daren't", "definitely", "described", "despite", "did", "didn't", "different", "directly", "do", "does", "doesn't", "doing", "done", "don't", "down", "downwards", "during", "e", "each", "edu", "eg", "eight", "eighty", "either", "else", "elsewhere", "end", "ending", "enough", "entirely", "especially", "et", "etc", "even", "ever", "evermore", "every", "everybody", "everyone", "everything", "everywhere", "ex", "exactly", "example", "except", "f", "fairly", "far", "farther", "few", "fewer", "fifth", "first", "five", "followed", "following", "follows", "for", "forever", "former", "formerly", "forth", "forward", "found", "four", "from", "further", "furthermore", "g", "get", "gets", "getting", "given", "gives", "go", "goes", "going", "gone", "got", "gotten", "greetings", "h", "had", "hadn't", "half", "happens", "hardly", "has", "hasn't", "have", "haven't", "having", "he", "he'd", "he'll", "hello", "help", "hence", "her", "here", "hereafter", "hereby", "herein", "here's", "hereupon", "hers", "herself", "he's", "hi", "him", "himself", "his", "hither", "hopefully", "how", "howbeit", "however", "hundred", "i", "i'd", "ie", "if", "ignored", "i'll", "i'm", "immediate", "in", "inasmuch", "inc", "inc.", "indeed", "indicate", "indicated", "indicates", "inner", "inside", "insofar", "instead", "into", "inward", "is", "isn't", "it", "it'd", "it'll", "its", "it's", "itself", "i've", "j", "just", "k", "keep", "keeps", "kept", "know", "known", "knows", "l", "last", "lately", "later", "latter", "latterly", "least", "less", "lest", "let", "let's", "like", "liked", "likely", "likewise", "little", "look", "looking", "looks", "low", "lower", "ltd", "m", "made", "mainly", "make", "makes", "many", "may", "maybe", "mayn't", "me", "mean", "meantime", "meanwhile", "merely", "might", "mightn't", "mine", "minus", "miss", "more", "moreover", "most", "mostly", "mr", "mrs", "much", "must", "mustn't", "my", "myself", "n", "name", "namely", "nd", "near", "nearly", "necessary", "need", "needn't", "needs", "neither", "never", "neverf", "neverless", "nevertheless", "new", "next", "nine", "ninety", "no", "nobody", "non", "none", "nonetheless", "noone", "no-one", "nor", "normally", "not", "nothing", "notwithstanding", "novel", "now", "nowhere", "o", "obviously", "of", "off", "often", "oh", "ok", "okay", "old", "on", "once", "one", "ones", "one's", "only", "onto", "opposite", "or", "other", "others", "otherwise", "ought", "oughtn't", "our", "ours", "ourselves", "out", "outside", "over", "overall", "own", "p", "particular", "particularly", "past", "per", "perhaps", "placed", "please", "plus", "possible", "presumably", "probably", "provided", "provides", "q", "que", "quite", "qv", "r", "rather", "rd", "re", "really", "reasonably", "recent", "recently", "regarding", "regardless", "regards", "relatively", "respectively", "right", "round", "s", "said", "same", "saw", "say", "saying", "says", "second", "secondly", "see", "seeing", "seem", "seemed", "seeming", "seems", "seen", "self", "selves", "sensible", "sent", "serious", "seriously", "seven", "several", "shall", "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "since", "six", "so", "some", "somebody", "someday", "somehow", "someone", "something", "sometime", "sometimes", "somewhat", "somewhere", "soon", "sorry", "specified", "specify", "specifying", "still", "sub", "such", "sup", "sure", "t", "take", "taken", "taking", "tell", "tends", "th", "than", "thank", "thanks", "thanx", "that", "that'll", "thats", "that's", "that've", "the", "their", "theirs", "them", "themselves", "then", "thence", "there", "thereafter", "thereby", "there'd", "therefore", "therein", "there'll", "there're", "theres", "there's", "thereupon", "there've", "these", "they", "they'd", "they'll", "they're", "they've", "thing", "things", "think", "third", "thirty", "this", "thorough", "thoroughly", "those", "though", "three", "through", "throughout", "thru", "thus", "till", "to", "together", "too", "took", "toward", "towards", "tried", "tries", "truly", "try", "trying", "t's", "twice", "two", "u", "un", "under", "underneath", "undoing", "unfortunately", "unless", "unlike", "unlikely", "until", "unto", "up", "upon", "upwards", "us", "use", "used", "useful", "uses", "using", "usually", "v", "value", "various", "versus", "very", "via", "viz", "vs", "w", "want", "wants", "was", "wasn't", "way", "we", "we'd", "welcome", "well", "we'll", "went", "were", "we're", "weren't", "we've", "what", "whatever", "what'll", "what's", "what've", "when", "whence", "whenever", "where", "whereafter", "whereas", "whereby", "wherein", "where's", "whereupon", "wherever", "whether", "which", "whichever", "while", "whilst", "whither", "who", "who'd", "whoever", "whole", "who'll", "whom", "whomever", "who's", "whose", "why", "will", "willing", "wish", "with", "within", "without", "wonder", "won't", "would", "wouldn't", "x", "y", "yes", "yet", "you", "you'd", "you'll", "your", "you're", "yours", "yourself", "yourselves", "you've", "z", "zero" );
    }

add_filter ('name_save_pre', 'nm_seo_slugs', 0);

/**
 * Archive jerarquico . @456bereastreet
 *
 */
function hierarchical_submenu ($post)
    {
    if ( $post->post_parent && $post->ancestors )
        {
        $top_post = get_post (end ($post->ancestors));
        }
    else
        {

        $top_post = $post;
        }

    return hierarchical_submenu_get_children ($top_post, $post);
    }

function hierarchical_submenu_get_children ($post, $current_page)
    {

    $children = get_pages ("child_of=" . $post->ID . '&parent=' . $post->ID . '&sort_column=menu_order&sort_order=ASC');
    if ( $children )
        {
        $menu = "\n<ul>\n";
        foreach ( $children as $child )
            {

            if ( in_array ($child->ID, get_post_ancestors ($current_page)) || ($child->ID == $current_page->ID) )
                {
                $menu .= "<li class=\"sel\"><a href=\"" . get_permalink ($child) . "\" class=\"sel\"><strong>" . $child->post_title . "</strong></a>";
                }
            else
                {
                $menu .= "<li><a href=\"" . get_permalink ($child) . "\">" . $child->post_title . "</a>";
                }

            if ( get_children ($child->ID) && (in_array ($child->ID, get_post_ancestors ($current_page)) || ($child->ID == $current_page->ID)) )
                {
                $menu .= hierarchical_submenu_get_children ($child, $current_page);
                }
            $menu .= "</li>\n";
            }
        $menu .= "</ul>\n";
        }
    return $menu;
    }
?>

<?php

/**
 * Archive que nos permite recibir una serie de portafolio items
 *
 */
function get_work (
$exclude = null, $limit = -1, $parent = 3, $args = array ( 'orderby' => 'menu_order', 'order' => 'ASC', 'post_type' => 'page' )
)
    {

    $args[ 'numberposts' ] = $limit;
    if ( $exclude )
        {
        $args[ 'exclude' ] = $exclude;
        }
    if ( $parent )
        {
        $args[ 'post_parent' ] = $parent;
        }


    return get_posts ($args);
    }

/**
 * Archive que nos permite controlar los caracteres de excerpt
 *
 */
function new_excerpt_length ($length)
    {
    return 30;
    }

add_filter ('excerpt_length', 'new_excerpt_length');

function nm_comment_post ($incoming_comment)
    {

    $incoming_comment[ 'comment_content' ] = htmlspecialchars ($incoming_comment[ 'comment_content' ]);

    $incoming_comment[ 'comment_content' ] = str_replace ("'", '&apos;', $incoming_comment[ 'comment_content' ]);

    return( $incoming_comment );
    }

function nm_comment_display ($comment_to_display)
    {

    $comment_to_display = str_replace ('&apos;', "'", $comment_to_display);
    return $comment_to_display;
    }

add_filter ('preprocess_comment', 'nm_comment_post', '', 1);
add_filter ('comment_text', 'nm_comment_display', '', 1);
add_filter ('comment_text_rss', 'nm_comment_display', '', 1);
add_filter ('comment_excerpt', 'nm_comment_display', '', 1);

function nm_comment_post_like ($string, $array)
    {
    foreach ( $array as $ref )
        {
        if ( strstr ($string, $ref) )
            {
            return true;
            }
        }
    return false;
    }

function nm_drop_bad_comments ()
    {
    if ( !empty ($_POST[ 'comment' ]) )
        {
        $post_comment_content = $_POST[ 'comment' ];
        $lower_case_comment   = strtolower ($_POST[ 'comment' ]);
        $bad_comment_content  = array (
            'viagra',
            'hydrocodone',
            'hair loss',
            '[url=http',
            '[link=http',
            'xanax',
            'tramadol',
            'konfuxi',
            'russian girls',
            'russian brides',
            'lorazepam',
            'adderall',
            'dexadrine',
            'no prescription',
            'oxycontin',
            'without a prescription',
            'sex pics',
            'family incest',
            'online casinos',
            'online dating',
            'cialis',
            'best forex',
            'amoxicillin'
        );
        if ( nm_comment_post_like ($lower_case_comment, $bad_comment_content) )
            {
            $comment_box_text = wordwrap (trim ($post_comment_content), 80, "\n  ", true);
            $txtdrop          = fopen ('/var/log/httpd/wp_post-logger/nullamatix.com-text-area_dropped.txt', 'a');
            fwrite ($txtdrop, "  --------------\n  [COMMENT] = " . $post_comment_content . "\n  --------------\n");
            fwrite ($txtdrop, "  [SOURCE_IP] = " . $_SERVER[ 'REMOTE_ADDR' ] . " @ " . date ("F j, Y, g:i a") . "\n");
            fwrite ($txtdrop, "  [USERAGENT] = " . $_SERVER[ 'HTTP_USER_AGENT' ] . "\n");
            fwrite ($txtdrop, "  [REFERER  ] = " . $_SERVER[ 'HTTP_REFERER' ] . "\n");
            fwrite ($txtdrop, "  [FILE_NAME] = " . $_SERVER[ 'SCRIPT_NAME' ] . " - [REQ_URI] = " . $_SERVER[ 'REQUEST_URI' ] . "\n");
            fwrite ($txtdrop, '--------------**********------------------' . "\n");
            header ("HTTP/1.1 406 Not Acceptable");
            header ("Status: 406 Not Acceptable");
            header ("Connection: Close");
            wp_die (__ ('Nasty Mondays Laundry Money.'));
            }
        }
    }

add_action ('init', 'nm_drop_bad_comments');
?>
