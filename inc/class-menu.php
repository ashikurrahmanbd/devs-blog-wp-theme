<?php

// Include the SingletonTrait to use it
require_once get_template_directory() . '/inc/trait-singleton.php';

class DB_Menu {
    
    use SingletonTrait;

    public function __construct() {

        add_action('init', array($this, 'register_menus'));

    }

    public function register_menus() {

        register_nav_menus(array(

            'primary-menu' => __('Primary Menu', 'devs-blog'),

        ));

    }
}