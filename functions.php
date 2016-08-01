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