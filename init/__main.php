<?php
/*
  Plugin Name: {PLUGIN_NAME}
  Plugin URI:
  Description: 
  Author:
  Version: 1.0.0
  Author URI:
  Text Domain: {PLUGIN_SLUG}
  Domain Path: /languages
  Licence : GNU General Public License version 2 or later; http://www.gnu.org/licenses/gpl-2.0.html
  Copyright :
 */
// Prohibit direct script loading
defined('ABSPATH') || die('No direct script access allowed!');


use Begenius\PluginFactory;


register_activation_hook(__FILE__, '{PREFIX}_{PLUGIN_LOWERCASE_NAME}_install');
register_deactivation_hook(__FILE__, '{PREFIX}_{PLUGIN_LOWERCASE_NAME}_remove');
add_action('init', '{PREFIX}_{PLUGIN_LOWERCASE_NAME}_load_textdomain');

function {PREFIX}_{PLUGIN_LOWERCASE_NAME}_factory($name, $namespace) {
  $plugin_url = plugin_dir_url( __FILE__ ) .  DIRECTORY_SEPARATOR;
  $plugin_dir = plugin_dir_path( __FILE__ )  . DIRECTORY_SEPARATOR;  
  require_once($plugin_dir . DIRECTORY_SEPARATOR . 'init' . DIRECTORY_SEPARATOR . 'init.php');    
  return PluginFactory::create($name, $namespace, $plugin_dir, $plugin_url);
}

function {PREFIX}_{PLUGIN_LOWERCASE_NAME}_install() {
  $plugin = bgbe_plugin_factory('{PLUGIN_NAME}', '{PLUGIN_NAMESPACE}'); 
  foreach ($plugin->options() as $option) {
    $option->create();
  }
}

function {PREFIX}_{PLUGIN_LOWERCASE_NAME}_remove() {
  $plugin = bgbe_plugin_factory('{PLUGIN_NAME}', '{PLUGIN_NAMESPACE}'); 
  foreach ($plugin->options() as $option) {
    $option->delete();
  }
}

function {PREFIX}_{PLUGIN_LOWERCASE_NAME}_load_textdomain() { 
  $plugin_dir = plugin_dir_path( __FILE__ );   
  require_once($plugin_dir . DIRECTORY_SEPARATOR . 'init' . DIRECTORY_SEPARATOR . 'init.php');     
  load_plugin_textdomain( '{PLUGIN_SLUG}', false, basename( dirname( __FILE__ ) ) . '/languages/' ); 
}