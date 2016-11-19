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
            'rewrite' => array('slug' => 'gallery'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'notice',
        array(
            'labels' => array(
                'name' => __( 'Notice' ),
                'singular_name' => __( 'Notice' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'notice'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'project_updates',
        array(
            'labels' => array(
                'name' => __( 'Project Updates' ),
                'singular_name' => __( 'Project Updates' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'project_updates'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'latest_news_events',
        array(
            'labels' => array(
                'name' => __( 'Latest News Events' ),
                'singular_name' => __( 'Latest News Events' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'latest_news_events'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'clients',
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'Clients' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'clients'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );

    register_post_type( 'employees',
        array(
            'labels' => array(
                'name' => __( 'Employees' ),
                'singular_name' => __( 'Employees' )
            ),
            'public' => true,
            'rewrite' => array('slug' => 'employees'),
            'supports' => array('title', 'editor', 'thumbnail')
        )
    );
}