<?php

if (!defined('ABSPATH')) {
  exit;
}

require_once(plugin_dir_path(__FILE__).'/load_files.php');

load_files();

add_shortcode('test', function($atts){
  return Component::load('Home');
});


