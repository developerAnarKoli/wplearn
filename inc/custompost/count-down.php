<?php

if(!function_exists('countdwonpost')){
    function countdwonpost(){
        register_post_type('count_down',array(
            'labels'    => array(
                'name'  => __('Count down','wplearn'),
                'singular_name' => __('count_down','wplearn'),
                'menu_name'     => __('my count down','wplearn'),
                'all_items'     => __('All count down','wplearn'),
                'add_new'       => __('New count down add','wplearn'),
                'view_item'     => __('view count down item','wplearn'),
                'edit_item'     => __('edit count down item','wplearn'),
                'search_items'  => __('search count down item','wplearn'),
                'not_found'     => __('not_found count down item','wplearn'),
                'not_found_in_trash' => __('not_found_in_trash count down item','wplearn'),
                'items_list'     => __('items_list count down item','wplearn'),
               
            ),
            'public'      => true,
            'supports'    => array(
                'title','excerpt'
            ),
            'capability_type'  => 'post',
            'menu_position'    => 5,
            
        ));
    }
}

add_action('init','countdwonpost');

