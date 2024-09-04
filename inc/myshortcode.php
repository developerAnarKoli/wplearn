<?php
/*short code generate start*/
add_action('init','myextrafunctionshortcode');
if(!function_exists('myextrafunctionshortcode')){
    function myextrafunctionshortcode(){
        add_shortcode('code','callbackfunctionforcode');
        if(!function_exists('callbackfunctionforcode')){
            function callbackfunctionforcode($attr =[], $content=null){
                $content = "i am a student";

                return $content;
            }

        }
    }

}

add_action('init','anothershortcode');
function anothershortcode(){
    add_shortcode('passcode','mypasscodefunction');
    function mypasscodefunction(){
        return "this is my short code pass";
    }
}
/*short code generate end*/