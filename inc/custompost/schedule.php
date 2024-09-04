<?php

if(!function_exists('schedulecustompost')){
    function schedulecustompost(){
        $nameoftype = "schedule";
        register_post_type('schedule',array(
            'labels'    => array(
                'name'  => __($nameoftype,'wplearn'),
                'singular_name' => __($nameoftype,'wplearn'),
                'menu_name'     => __('my '. $nameoftype,'wplearn'),
                'all_items'     => __('All '.$nameoftype,'wplearn'),
                'add_new'       => __('New '.$nameoftype.' add','wplearn'),
                'view_item'     => __('view item of ' . $nameoftype,'wplearn'),
                'edit_item'     => __('edit item of '. $nameoftype,'wplearn'),
                'search_items'  => __('search count down item','wplearn'),
                'not_found'     => __('not_found count down item','wplearn'),
                'not_found_in_trash' => __('not_found_in_trash count down item','wplearn'),
                'items_list'     => __('items_list count down item','wplearn'),
               
            ),
            'public'      => true,
            'supports'    => array(
                'title','excerpt','editor'
            ),
            'capability_type'  => 'post',
            
        ));
    }
}

add_action('init','schedulecustompost');

