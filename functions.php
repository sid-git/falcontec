<?php





add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){

     if( in_array('current-menu-item', $classes) ){

             $classes[] = 'active ';

     }

     return $classes;

}







add_action('restrict_manage_posts','restrict_listings_by_business');

function restrict_listings_by_business() {

    global $typenow;

    global $wp_query;

    if ($typenow=='service') {

        $taxonomy = 'servicetypes';

        $business_taxonomy = get_taxonomy($taxonomy);

        wp_dropdown_categories(array(

            'show_option_all' =>  __("Show All {$business_taxonomy->label}"),

            'taxonomy'        =>  $taxonomy,

            'name'            =>  'servicetypes',

            'orderby'         =>  'name',

            'selected'        =>  $wp_query->query['term'],

            'hierarchical'    =>  true,

            'depth'           =>  3,

            'show_count'      =>  true, // Show # listings in parens

            'hide_empty'      =>  true, // Don't show businesses w/o listings

        ));

    }

}



add_theme_support( 'menus' );

add_theme_support( 'widgets' );

function get_depth(){
	// gets the depth of the current page
	global $wp_query;
	$object = $wp_query->get_queried_object();
	$parent_id  = $object->post_parent;
	$depth = 0;
	while ($parent_id > 0) {
		   $page = get_page($parent_id);
		   $parent_id = $page->post_parent;
		   $depth++;
	}
	 
	return $depth;
}




function the_breadcrumb() {
    global $post;
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = array_reverse(get_post_ancestors( $post->ID ));
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output .= '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<li class="active" title="'.$title.'"> '.$title.'</li>';
            } else {
                echo '<li class="active" title="'.get_the_title().'"> '.get_the_title().'</li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}

?>