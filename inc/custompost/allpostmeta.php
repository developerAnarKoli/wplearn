<?php
       /*Add for meta boxess start*/
       if(!function_exists('mymeta')){
        function mymeta(){
            add_meta_box(
                'shaifu_pagla',
                'Add Icon',
                'myinputhtml',
                'myownslider'
            );
        }
    }
    if(!function_exists('myinputhtml')){
        function myinputhtml($post){
            $icon = get_post_meta($post->ID, 'unique_key',true);

            ?>
            <label for="add_icon">Add icon</label>
            <input type="text" name="add_icon" id="add_icon" value="<?php echo $icon; ?>">
            <?php
        }
    }
    add_action('add_meta_boxes','mymeta');

    if(!function_exists('mymetasave')){
        function mymetasave($post_id){
            if(isset($_POST['add_icon'])){
                update_post_meta(
                    $post_id,
                    'unique_key',
                    $_POST['add_icon']
                );
            }
        }
    }
    add_action('save_post','mymetasave');
    /*Add for meta boxess end*/






       /*Add for meta boxess start for count down*/
       if(!function_exists('metacount')){
        function metacount(){
            add_meta_box(
                'shaifu_count',
                'Count Icon',
                'mycounthtml',
                'count_down'
            );
        }
    }
    if(!function_exists('mycounthtml')){
        function mycounthtml($post){
            $icon = get_post_meta($post->ID, 'unique_count',true);

            ?>
            <label for="count_icon">Add icon</label>
            <input type="text" name="count_icon" id="count_icon" value="<?php echo $icon; ?>">
            <?php
        }
    }
    add_action('add_meta_boxes','metacount');

    if(!function_exists('countmetasave')){
        function countmetasave($post_id){
            if(isset($_POST['count_icon'])){
                update_post_meta(
                    $post_id,
                    'unique_count',
                    $_POST['count_icon']
                );
            }
        }
    }
    add_action('save_post','countmetasave');
    /*Add for meta boxess end for count down*/




    /*Add for meta boxess start for different service*/
    if(!function_exists('metaservice')){
        function metaservice(){
            add_meta_box(
                'shaifu_service',
                'service Icon',
                'serviceinputhtml',
                'different_services'
            );
        }
    }
    if(!function_exists('serviceinputhtml')){
        function serviceinputhtml($post){
            $icon = get_post_meta($post->ID, 'unique_service',true);

            ?>
            <label for="service_icon">Add icon</label>
            <input type="text" name="service_icon" id="service_icon" value="<?php echo $icon; ?>">
            <?php
        }
    }
    add_action('add_meta_boxes','metaservice');

    if(!function_exists('servicemetasave')){
        function servicemetasave($post_id){
            if(isset($_POST['service_icon'])){
                update_post_meta(
                    $post_id,
                    'unique_service',
                    $_POST['service_icon']
                );
            }
        }
    }
    add_action('save_post','servicemetasave');
    /*Add for meta boxess end for different service*/


     /*Add for meta boxess start for hero slider*/
     if(!function_exists('metahero')){
        function metahero(){
            add_meta_box(
                'shaifu_hero',
                'Hero Icon',
                'heroinputhtml',
                'hero'
            );
        }
    }
    if(!function_exists('heroinputhtml')){
        function heroinputhtml($post){
            $icon = get_post_meta($post->ID, 'unique_hero',true);

            ?>
            <label for="hero_icon">Add icon</label>
            <input type="text" name="hero_icon" id="hero_icon" value="<?php echo $icon; ?>">
            <?php
        }
    }
    add_action('add_meta_boxes','metahero');

    if(!function_exists('herosave')){
        function herosave($post_id){
            if(isset($_POST['hero_icon'])){
                update_post_meta(
                    $post_id,
                    'unique_hero',
                    $_POST['hero_icon']
                );
            }
        }
    }
    add_action('save_post','herosave');
    /*Add for meta boxess end for hero slider*/