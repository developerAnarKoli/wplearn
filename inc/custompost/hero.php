<?php

if(!function_exists('customheroslider')){
    function customheroslider(){
        $nameoftype = "hero";
        register_post_type('hero',array(
            'labels'    => array(
                'name'  => __($nameoftype,'wplearn'),
                'singular_name' => __($nameoftype,'wplearn'),
                'menu_name'     => __('my '. $nameoftype,'wplearn'),
                'all_items'     => __('All '.$nameoftype,'wplearn'),
                'add_new'       => __('New '.$nameoftype.' add','wplearn'),
                'view_item'     => __('view item of ' . $nameoftype,'wplearn'),
                'edit_item'     => __('edit item of '. $nameoftype,'wplearn'),
                'search_items'  => __('search '. $nameoftype . 'item','wplearn'),
                'not_found'     => __('not_found hero item','wplearn'),
                'not_found_in_trash' => __('not_found_in_trash hero item','wplearn'),
                'items_list'     => __('items_list hero item','wplearn'),
               
            ),
            'public'      => true,
            'supports'    => array(
                'title','excerpt','thumbnail'
            ),
            'capability_type'  => 'post',
            'menu_position'          => 5,
            
        ));
    }
}

add_action('init','customheroslider');

