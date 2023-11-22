<?php
    class Layout{
        public $components;

        function __construct($components) {
            $this->components = $components;
        }

        function start(){
            ob_start();
        }

        function end(){
            $main = ob_get_clean();
            $mainIndex = array_search('main', $this->components);
            if($mainIndex !== false){
                $this->components[$mainIndex] = (!is_null($main)) ? $main : '';
            }
            echo implode('', $this->components);
        }

        public static function import($filename){
            if(is_admin()){
                if(file_exists(plugin_dir_path(__DIR__) . 'admin/layouts/' . ucfirst(mb_strtolower($filename, 'UTF-8')) . '.php')){
                    include plugin_dir_path(__DIR__) . 'admin/layouts/' . ucfirst(mb_strtolower($filename, 'UTF-8')) . '.php';
                    $instance = compact($filename);
                    return $instance[$filename];
                }
            }else{
                if(file_exists(plugin_dir_path(__DIR__) . 'public/layouts/' . ucfirst(mb_strtolower($filename, 'UTF-8')) . '.php')){
                    include plugin_dir_path(__DIR__) . 'public/layouts/' . ucfirst(mb_strtolower($filename, 'UTF-8')) . '.php';
                    $instance = compact($filename);
                    return $instance[$filename];
                }
            }
        }

    }