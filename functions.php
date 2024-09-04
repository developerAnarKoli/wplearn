<?php
add_action('after_setup_theme','wplearntheme');

if(!function_exists('wplearntheme')){
    function wplearntheme(){
        load_theme_textdomain('wplearn',get_template_directory().'/languages');
         add_theme_support('post-thumbnails');
        //add_theme_support('post-thumbnails', array('post','page'));
        add_theme_support('post-formats',array('aside','gallery','video','image','quote','link','status','audio','chat'));
        //css and scripts add for header 
        
        add_action('wp_enqueue_scripts','mywpscripts');
        if(!function_exists('mywpscripts')){
            function mywpscripts(){


               
                //assets to css folder into css
                wp_enqueue_style("bootstrap_css",get_parent_theme_file_uri('assets/css/bootstrap.min.css'),array(),wp_get_theme()->get('Version'),'all');
                //nice select for css
                wp_enqueue_style("nice_css",get_parent_theme_file_uri('assets/css/nice-select.css'),array(),wp_get_theme()->get('Version'),'all');
                //fron awesome for css
                wp_enqueue_style("awesome_css",get_parent_theme_file_uri('assets/css/font-awesome.min.css'),array(),wp_get_theme()->get('Version'),'all');
                //icofont for css
                wp_enqueue_style("icofont_css",get_parent_theme_file_uri('assets/css/icofont.css'),array(),wp_get_theme()->get('Version'),'all');
                //slicknav for css
                wp_enqueue_style("slicknav_css",get_parent_theme_file_uri('assets/css/slicknav.min.css'),array(),wp_get_theme()->get('Version'),'all');
                //owl carousel for css
                wp_enqueue_style("carousel_css",get_parent_theme_file_uri('assets/css/owl-carousel.css'),array(),wp_get_theme()->get('Version'),'all');
                //date picker for css
                wp_enqueue_style("datepicker_css",get_parent_theme_file_uri('assets/css/datepicker.css'),array(),wp_get_theme()->get('Version'),'all');
                //animate for css
                wp_enqueue_style("animate_css",get_parent_theme_file_uri('assets/css/animate.min.css'),array(),wp_get_theme()->get('Version'),'all');
                //magnific popup for css
                wp_enqueue_style("magnific_css",get_parent_theme_file_uri('assets/css/magnific-popup.css'),array(),wp_get_theme()->get('Version'),'all');
                //medipro for css
                wp_enqueue_style("normalize_css",get_parent_theme_file_uri('assets/css/normalize.css'),array(),wp_get_theme()->get('Version'),'all');
                wp_enqueue_style("style_mama",get_parent_theme_file_uri('assets/css/style.css'),array(),wp_get_theme()->get('Version'),'all');
                wp_enqueue_style("responsive_mama",get_parent_theme_file_uri('assets/css/responsive.css'),array(),wp_get_theme()->get('Version'),'all');
   


                wp_enqueue_style('unique_id',get_stylesheet_uri());
                // wp_add_inline_style("main_css",'body{background: green;}');



                //start for script link
                
                wp_enqueue_script("main",get_template_directory_uri()."/assets/js/main.js",array(),wp_get_theme()->get('Version'),true);

                wp_add_inline_script('main','console.log("allah always help us");',);
            }
        }



    }
}

// custom post type for functions
// if(!function_exists("mycustompost")){
//     function mycustompost(){
//         register_post_type('mywonslider',array(
//             'labels' => array(
//                 'name' => __('my sliders', 'wplearn'),
//                 'singular_name' => __('slider', 'wplearn'),
//             ),
//             'public' => true,
//         ));
//     }
// }

// add_action('init','mycustompost');

require get_template_directory()."/inc/custompost/slider.php";
require get_template_directory()."/inc/custompost/count-down.php";
require get_template_directory()."/inc/custompost/allpostmeta.php";
require get_template_directory()."/inc/custompost/different-services.php";
require get_template_directory()."/inc/custompost/schedule.php";
require get_template_directory()."/inc/custompost/portfolio.php";
require get_template_directory()."/inc/custompost/client.php";
require get_template_directory()."/inc/custompost/hero.php";
require get_template_directory()."/inc/themeoption/codestar-framework.php";
require get_template_directory()."/inc/themeoption/samples/mytheme-options.php";
require get_template_directory()."/inc/myshortcode.php";
require get_template_directory()."/inc/menus.php";
require get_template_directory()."/inc/tgm/class-tgm-plugin-activation.php";
require get_template_directory()."/inc/tgm/mypluginactivation.php";
require get_template_directory()."/inc/cmb/init.php";
require get_template_directory()."/inc/cmb/mymeta.php";
require get_template_directory()."/inc/custompost/mprice.php";
require get_template_directory()."/inc/wonwidget.php";




