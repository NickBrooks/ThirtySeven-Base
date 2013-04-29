<?php
   /*
   Plugin Name: ThirtySeven WP Base
   Plugin URI: http://www.thirtyseven.com.au
   Description: This plugin gives a quick install of basic ThirtySeven features.
   Version: 1.1
   Author: ThirtySeven Media
   Author URI: http://www.thirtyseven.com.au
   License: GPL2
   */

/*
 * ADD OPTION FOR CUSTOM LOGO ON LOGIN PAGE
 */

#add Logo URL options
add_option( 'thirtysevenbase_loginlogourl', 'http://i.imgur.com/TgC3G9l.png');
add_option( 'thirtysevenbase_loginlogoheight', '54');
add_option( 'thirtysevenbase_loginlogowidth', '250');
add_option( 'thirtysevenbase_cssversion', '1');

#Register ThirtySeven Settings Menu
function thirtyseven_admin_include() {  
    include('thirtyseven-admin-menu.php');  
}

function thirtyseven_admin_actions() {  
    add_options_page("Base Options", "ThirtySeven Base Options", 1, "ThirtySevenBaseAdmin", "thirtyseven_admin_include");  
}  
add_action('admin_menu', 'thirtyseven_admin_actions');

#Display Logo on Login Page
function thirtyseven_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_option('thirtysevenbase_loginlogourl').') !important;
        height: '.get_option('thirtysevenbase_loginlogoheight').'px !important;
        background-size:'.get_option('thirtysevenbase_loginlogowidth').'px '.get_option('thirtysevenbase_loginlogoheight').'px !important; }
    </style>';
}
add_action('login_head', 'thirtyseven_custom_login_logo'); 