<?php
/*
Plugin Name: G28 Coluna Widgets
Description: 
Version: 0.1
Author: G28 - Guilherme Pereira
*/

if ( ! defined( 'ABSPATH' ) ) exit;

require "vendor/autoload.php";

use function G28\ColunaWidgets\runPlugin;

runPlugin( __FILE__ );