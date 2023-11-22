<?php
    /**
     * Plugin Name: Rejiplas Empleados
     * Description: Métodos de pago, Rol y estados de ordenes
     * Version: 1.0
     * Author: SM Digital
     */

     if (!defined('ABSPATH')) {
        exit;
    }


     function activate_plugin_employees(){
        // global $wpdb;

        // $sql_table_orders = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}orders_erp (
        //     `id`            INT NOT NULL AUTO_INCREMENT,
        //     `id_order`      INT(12) NOT NULL,
        //     `state`         VARCHAR(11) NOT NULL,
        //     `message`       TEXT NOT NULL,
        //     `data_order`    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     PRIMARY KEY (id)
        // )";

        // $wpdb->query($sql_table_orders);


        // $sql_table_users = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}users_erp (
        //     `id` INT NOT NULL AUTO_INCREMENT,
        //     `id_user` INT(12) NOT NULL,
        //     `state` VARCHAR(11) NOT NULL,
        //     `message` TEXT NOT NULL,
        //     PRIMARY KEY (id)
        // )";

        // $wpdb->query($sql_table_users);
      
     }

     function deactivate_plugin_employees(){
     }

     function drop_tables(){
        // global $wpdb;
        // $table  =   $wpdb->prefix . 'orders_erp';
        // $wpdb->query("DROP TABLE IF EXISTS {$table}");

        // $table_user  =   $wpdb->prefix . 'users_erp';
        // $wpdb->query("DROP TABLE IF EXISTS {$table_user}");
     }
     
     register_uninstall_hook(__FILE__, 'deletePlugin');
     register_activation_hook(__FILE__, 'activate_plugin_employees');
     register_deactivation_hook(__FILE__, 'deactivate_plugin_employees');


     function employees_menu(){
        add_menu_page(
            'Rejiplas Empleados',
            'Rejiplas Empleados',
            'manage_options',
            'rejiplas_employees',
            fn() => Page::load('Home', ['echo' => true]),
            'dashicons-list-view',
            53
        );

        // add_submenu_page(
        //     'rejiplas_erp',
        //     'Dashboard',
        //     'Dashboard',
        //     'manage_options',
        //     'rejiplas_erp_dashboard',
        //     'includeDashboardPage',
        // );
     }

     add_action('admin_menu', 'employees_menu');

     require_once( plugin_dir_path(__FILE__).'core/config.php' );

    /**
      * DEFINE CONSTANTS
    */


?>