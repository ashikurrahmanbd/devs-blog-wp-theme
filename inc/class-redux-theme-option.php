<?php

// Include the SingletonTrait to use it
require_once get_template_directory() . '/inc/trait-singleton.php';

class ReduxThemeOptions {

    use SingletonTrait;

    public function __construct(){

        $this->integrate_redux_option();

    }

    public function integrate_redux_option(){

        $redux_primary_files = [

            get_template_directory() . '/inc/lib/redux/redux-core/framework.php',
            get_template_directory() . '/inc/lib/redux/sample/config.php',


        ];

        foreach ($redux_primary_files as $file) {

            if (file_exists($file)) {
                
                require_once $file;

            } else {
                // Log or handle missing file errors for debugging
                error_log("Redux file not found: " . $file);
            }

        }

    }

    

}
