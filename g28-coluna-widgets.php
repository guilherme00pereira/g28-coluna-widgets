<?php
/*
Plugin Name: G28 Coluna Widgets
Description: Widgets Extras para Elementor
Version: 0.5
Author: G28 - Guilherme Pereira
*/

if ( ! defined( 'ABSPATH' ) ) exit;

define('G28_COLUNA_WIDGETS_ASSETS', plugin_dir_url(__FILE__) . 'assets/');
define('G28_COLUNA_WIDGETS_VERSION', '0.5');

require "vendor/autoload.php";

use function G28\ColunaWidgets\runPlugin;

runPlugin( __FILE__ );
