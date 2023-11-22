<?php 

class Page{
    public static function load($route, $props = []) {
        ob_start();

        if(is_admin()){
            include plugin_dir_path(__DIR__) . 'admin/pages/' . ucfirst(mb_strtolower($route, 'UTF-8')) . '.php';
        }else{
            include plugin_dir_path(__DIR__) . 'public/pages/' . ucfirst(mb_strtolower($route, 'UTF-8')) . '.php';
        }
        $page = ob_get_clean();

        if(array_key_exists('echo', $props) && $props['echo'] !== false){
            echo $page;
            return;
        }

        return $page;
    }
}