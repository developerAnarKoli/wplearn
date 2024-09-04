<?php

if(!function_exists('mycustompost')){
    function mycustompost(){
        register_post_type('myownslider',array(
            'labels'    => array(
                'name'  => __('sliders','wplearn'),
                'singular_name' => __('slider','wplearn'),
                'menu_name'     => __('my services','wplearn'),
                'all_items'     => __('All services','wplearn'),
                'add_new'       => __('New services add','wplearn'),
                'view_item'     => __('view services item','wplearn'),
                'edit_item'     => __('edit services item','wplearn'),
                'search_items'  => __('search services item','wplearn'),
                'not_found'     => __('not_found services item','wplearn'),
                'not_found_in_trash'     => __('not_found_in_trash services item','wplearn'),
                'items_list'     => __('items_list services item','wplearn'),
               
            ),
            'public'      => true,
            'supports'    => array(
                'title','excerpt'
            ),
            'capability_type'  => "post",
            'menu_position'    => 2,
            
        ));
    }
}

add_action('init','mycustompost');

