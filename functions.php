<?php

if ( !defined('ABSPATH') ) {

    exit;

}

/**
* Include all the singleton Classes 
*/


require_once get_template_directory() . '/inc/class-theme-setup.php';




/**
 * get instance of the singleton classes
*/

DB_Theme_Setup::get_instance();
