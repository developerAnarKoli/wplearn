<?php
/* this is function for menus start here*/ 

add_action('init','myallmenus');
if(!function_exists('myallmenus')){
    //class add in the menu a 
    add_filter( 'nav_menu_link_attributes', 'akashancher', 10, 3 );

function akashancher( $atts, $item, $args ) {
    $class = 'shaifur'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
    //class add in the menu li
    function shaifuclassadd($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'shaifuclassadd', 1, 3);

    // the is the menu active code here
    add_filter('wp_nav_menu_objects','myactivemenu');
    function myactivemenu($menu_item){
        $menu_item[1]->classes[] = "active";
        return $menu_item;

    }
    function myallmenus(){
        register_nav_menus(array(
            'top_menu'    => __('Top Menu','wplearn'),
            'primary'     => __('Primary Menu','wplearn'),
            'footer_menu' => __('Footer Menu', 'wplearn'),
            'bottom_footer_menu' => __('Bottom Footer Menu', 'wplearn'),
        ));
    }
}

/* this is function for menus end here*/ 