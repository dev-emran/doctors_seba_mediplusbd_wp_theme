<?php



/* This block of code in PHP is defining a function `dsmb_theme_setup_and_support` that sets up various
theme supports for a WordPress theme. */

if (!function_exists('dsmb_theme_setup_and_support')) {
    function dsmb_theme_setup_and_support()
    {
        load_theme_textdomain('dsmb');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', ['post']);
        add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
        add_theme_support('post-formats', ['aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio']);
    }
}

add_action('after_setup_theme', 'dsmb_theme_setup_and_support');



add_action('wp_enqueue_scripts', 'dsmb_enqueue_scripts');