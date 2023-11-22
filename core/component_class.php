<?php 

class Component{
    public static function load($route, $props = []) {
        ob_start();
        if(is_admin()){
            include plugin_dir_path(__DIR__) . 'admin/components/' . ucfirst(mb_strtolower($route, 'UTF-8')) . '.php';
        }else{
            include plugin_dir_path(__DIR__) . 'public/components/' . ucfirst(mb_strtolower($route, 'UTF-8')) . '.php';
        }
        $component = ob_get_clean();
        return $component;
    }
}