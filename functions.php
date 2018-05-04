<?php

function clickright_lite_child_scripts() {

    wp_enqueue_script('preloader js', get_stylesheet_directory_uri() . '/js/preloader.js');
}
add_action('wp_enqueue_scripts', 'clickright_lite_child_scripts');

