<?php
/**
 * Plugin Name:       Instagram Feed
 * Plugin URI:        https://devmontdigital.io
 * Description:       This is custom made plugin use to get instagram post on wordpress website
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Devmont Digital
 * Author URI:        https://devmontdigital.io
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       Instagram Feed
 * Domain Path:       /Php, Bootstrap, jQuery
 */
/*
Instagram Feed is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Instagram Feed is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Instagram Feed. If not, see {URI to Plugin License}.
*/
if(!defined('ABSPATH')){
    echo "You Cant access";
    exit;
}

// this code runs during plugin activation
function activate_plugin(){
    require_once plugin_dir_path( __FILE__ ).'includes/activator.php';
    plugin_activator::activate();
}
register_activation_hook( __FILE__, 'activate_plugin');
 
// this code runs during plugin deactivation
function deactivate_plugin(){
    require_once plugin_dir_path( __FILE__ ).'includes/deactivator.php';
    plugin_deactivator::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_plugin');