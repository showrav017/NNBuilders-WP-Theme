<?php
/**
 * Created by PhpStorm.
 * User: showrav017
 * Date: 7/22/16
 * Time: 6:17 PM
 */


include_once "inc/settings_page.php";

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'primary' => 'Primary Header Nav',
            'foot_menu' => 'Footer Menu'
        )
    );
}

if( is_admin() )
    $my_settings_page = new settings_page();

add_theme_support('post-thumbnails');
add_action( 'init', 'create_posttype' );

function create_posttype() {
    register_post_type( 'board_of_director',
        array(
            'labels' => array(
                'name' => __( 'Board of Director' ),
                'singular_name' => __( 'Board of Director' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'board_of_director'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Projects' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}