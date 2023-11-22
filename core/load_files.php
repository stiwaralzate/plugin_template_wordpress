<?php

    if (!defined('ABSPATH')) {
        exit;
    }

    function load_files(){
        $path_dir = plugin_dir_path(__FILE__).'*.php';

        $files = glob($path_dir);
        
        foreach ($files as $key => $file) {
            require_once($file);
        }
    }