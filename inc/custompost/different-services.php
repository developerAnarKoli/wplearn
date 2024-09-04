<?php

if(!function_exists('customservice')){
    function customservice(){
        register_post_type('different_services',array(
            'labels'    => array(
                'name'  => __('different services','wplearn'),
                'singular_name' => __('count_down','wplearn'),
                'menu_name'     => __('my different service','wplearn'),
                'all_items'     => __('All different service','wplearn'),
                'add_new'       => __('New different service add','wplearn'),
                'view_item'     => __('view different service item','wplearn'),
                'edit_item'     => __('edit different service item','wplearn'),
                'search_items'  => __('search different service item','wplearn'),
                'not_found'     => __('not_found different service item','wplearn'),
                'not_found_in_trash' => __('not_found_in_trash different service item','wplearn'),
                'items_list'     => __('items_list different service item','wplearn'),
               
            ),
            'public'      => true,
            'supports'    => array(
                'title','excerpt'
            ),
            'capability_type'  => 'post',
            
        ));
    }
}

add_action('init','customservice');

