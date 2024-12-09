<?php

if ( !defined('ABSPATH') ) {

    exit;

}

/**
* Include all the singleton Classes 
*/


require_once get_template_directory() . '/inc/class-theme-setup.php';

//cmb2
require_once get_template_directory() . '/inc/class-cmb2-integration.php';



/**
 * get instance of the singleton classes
*/

DB_Theme_Setup::get_instance();

/**
 * Get instance of CMB2 singleton Instance 
*/

CMB2_Integration::get_instance();