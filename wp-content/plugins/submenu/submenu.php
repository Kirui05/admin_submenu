<?php 

/**
 * @package submenuplugin
 */
// my_plugin.php

/*
    Plugin Name: submenu plugin
    Plugin URI: http://.........
    Description: This is a plugin built by Nicholas Kirui Wordpress
    Version: 1.0.0
    Author: Nicholas Kirui
    Author URI: http://submenu...............
    Licence: GPLv2 or later
    Text Domain: submenu plugin
*/

// use Inc\Base;

defined('ABSPATH') or die("Stop");

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Init;

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once(dirname(__FILE__) . '/vendor/autoload.php');
}

function activate_ticketing_plugin()
{
    Activate::activate();
}
register_activation_hook(__FILE__, 'activate_ticketing_plugin');

function deactivate_tm_plugin()
{
    Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_ticketing_plugin');

if (class_exists('Inc\\Init')) {
    Init::register_services();
}