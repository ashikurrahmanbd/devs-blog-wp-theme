<?php

// Include the SingletonTrait to use it
require_once get_template_directory() . '/inc/trait-singleton.php';
class DB_Theme_Constants{

    use SingletonTrait;

    public function __construct(){

        add_action('init', array($this, 'db_theme_constants'));
        
    }

    public function db_theme_constants(){


        define('DB_THEME_DIR', get_template_directory());
        define('DB_THEME_DIR_URI', get_template_directory_uri());


    }
    




}
