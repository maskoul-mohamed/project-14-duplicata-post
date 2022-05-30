<?php

/*
Plugin Name: dupliquer
Version: 0.1
Author: Maskoul Mohamed
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);