<?php

// Include the SingletonTrait to use it
require_once  get_template_directory() . '/inc/trait-singleton.php';

class DB_Theme_Setup {

    use SingletonTrait;

    public function __construct() {

        add_action('after_setup_theme', array($this, 'db_theme_supports'));
        add_action('wp_enqueue_scripts', array($this, 'db_theme_assets'));

    }

    public function db_theme_supports() {

        add_theme_support( 'title-tag' );
        add_theme_support('site-icon');

        add_theme_support('custom-logo', array(
            'height'        => 100,
            'width'         => 300,
            'flex-height'          => true,
            'flex-width'           => true,
            'default'               => get_template_directory().'assets/images/logo.png'
        ));

        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('responsive-embeds');
        // add_theme_support('widgets');
        add_theme_support( 'wp-block-styles' );
        remove_theme_support( 'widgets-block-editor' );

    }

    public function db_theme_assets() {

        global $devs_blog;

        wp_register_style(

            'theme-main-style',

            get_template_directory_uri() . '/assets/css/theme-1.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-1.css'),

        );


        wp_register_style(

            'theme-main-style-two',

            get_template_directory_uri() . '/assets/css/theme-2.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-2.css'),

        );

        wp_register_style(

            'theme-main-style-three',

            get_template_directory_uri() . '/assets/css/theme-3.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-3.css'),

        );

        wp_register_style(

            'theme-main-style-four',

            get_template_directory_uri() . '/assets/css/theme-4.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-4.css'),

        );

        wp_register_style(

            'theme-main-style-five',

            get_template_directory_uri() . '/assets/css/theme-5.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-5.css'),

        );

        wp_register_style(

            'theme-main-style-six',

            get_template_directory_uri() . '/assets/css/theme-6.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-6.css'),

        );

        wp_register_style(

            'theme-main-style-seven',

            get_template_directory_uri() . '/assets/css/theme-7.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-7.css'),

        );

        wp_register_style(

            'theme-main-style-eight',

            get_template_directory_uri() . '/assets/css/theme-8.css',

            [],

            filemtime(get_template_directory() . '/assets/css/theme-8.css'),

        );


        if($devs_blog['db_site_primary_color'] == 'color1'){

            wp_enqueue_style('theme-main-style');

        }elseif($devs_blog['db_site_primary_color'] == 'color2'){

            wp_enqueue_style('theme-main-style-two');

        }elseif($devs_blog['db_site_primary_color'] == 'color3'){

            wp_enqueue_style('theme-main-style-three');

        }elseif($devs_blog['db_site_primary_color'] == 'color4'){

            wp_enqueue_style('theme-main-style-four');

        }elseif($devs_blog['db_site_primary_color'] == 'color5'){

            wp_enqueue_style('theme-main-style-five');

        }elseif($devs_blog['db_site_primary_color'] == 'color6'){

            wp_enqueue_style('theme-main-style-six');

        }elseif($devs_blog['db_site_primary_color'] == 'color7'){

            wp_enqueue_style('theme-main-style-seven');

        }elseif($devs_blog['db_site_primary_color'] == 'color8'){

            wp_enqueue_style('theme-main-style-eight');

        }else{

            wp_enqueue_style('theme-main-style');

        }

        //enqueuing Main style seeht
        wp_enqueue_style('db-theme-style', get_stylesheet_uri());

        //js files
        wp_enqueue_script('jquery');
        wp_enqueue_script( 
            'db-popper-js', 
            get_template_directory_uri() . '/assets/plugins/popper.min.js' , 
            ['jquery'], 
            filemtime(get_template_directory() . '/assets/plugins/popper.min.js'), 
            true
        );

        wp_enqueue_script(
            'fontawesome', // Unique handle for the script
            'https://use.fontawesome.com/releases/v5.7.1/js/all.js', // Font Awesome URL
            [], // Dependencies (none in this case)
            null, // No version number, as it's managed externally
            true // Load in the footer
        );

        wp_enqueue_script( 
            'db-bootstrap-js', 
            get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js' , 
            ['jquery'], 
            filemtime(get_template_directory() . '/assets/plugins/bootstrap/js/bootstrap.min.js'), 
            true
        );

        // style switcher
        wp_enqueue_script( 
            'db-theme-style-switcher', 
            get_template_directory_uri() . '/assets/js/demo/style-switcher.js' , 
            ['jquery'], 
            filemtime(get_template_directory() . '/assets/js/demo/style-switcher.js'), 
            true
        );

    }


    
}