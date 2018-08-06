<?php

function clickright_lite_child_scripts() {

    wp_enqueue_script('preloader',  get_stylesheet_directory_uri() . '/js/preloader.js', array('jquery'));
    
    //wp_enqueue_script( 'preloader' );//
     
    



    wp_enqueue_script('return-to-top',  get_stylesheet_directory_uri() . '/js/return-to-top.js', array('jquery'));
    
    //wp_enqueue_script( 'return-to-top' );//

    

}
add_action('wp_enqueue_scripts', 'clickright_lite_child_scripts');


