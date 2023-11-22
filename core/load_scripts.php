<?php 

    if (!defined('ABSPATH')) {
        exit;
    }

    
    /**
     *
    *   require_scripts_employess
    *
    *   This function requires all custom scripts created with JS in the admin panel.
    */
    
    function require_scripts_employess($hook){
        echo "<script>console.log('$hook')</script>";
        // if(!in_array($hook, ['toplevel_page_rejiplas_employees', 'erp_page_rejiplas_erp_dashboard'], true)){
        // return;
        // }

        // //Load JS files
        // wp_enqueue_script('erp_plugin_admin', plugin_dir_url(__DIR__).'js/scripts.js', array('jquery'));
        // wp_localize_script('erp_plugin_admin', 'ajax_admin',[
        //     'url'   =>  admin_url('admin-ajax.php'),
        //     'seguridad' => wp_create_nonce('encryptERP')
        // ]);
        // wp_enqueue_script('bootstrapJs', plugin_dir_url(__DIR__).'bootstrap/js/bootstrap.min.js', array('jquery'));


        // //Load CSS files
        // wp_enqueue_style('erp_plugin_css_admin', plugin_dir_url(__DIR__).'css/styles.css');
        // wp_enqueue_style('bootstrapCss', plugin_dir_url(__DIR__).'bootstrap/css/bootstrap.min.css');
    }
    add_action('admin_enqueue_scripts', 'require_scripts_employess');