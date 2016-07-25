<?php
/**
 * Created by PhpStorm.
 * User: showrav017
 * Date: 7/22/16
 * Time: 6:17 PM
 */


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'primary' => 'Primary Header Nav',
            'foot_menu' => 'Footer Menu'
        )
    );
}