<?php
class myownwidget extends wp_widget{
    function __construct(){
        parent::__construct('sh_my_unique_id',
        __('developer shaifu', 'wplearn'));
    }

}

if(!function_exists('mwonwidgetfunction')){
    function mwonwidgetfunction(){
        register_widget('myownwidget');
    }
}
add_action('widgets_init','mwonwidgetfunction');


