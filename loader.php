<?php
/*
 * Plugin Name: Newsflow 3
 * Version: 0.1
 * Description: WordPress Client for Newsflow of version 3
 */

defined('ABSPATH') or die('No script kiddies please!');

require_once __DIR__ . '/src/autoload.php';

Newsflow\WP\Setup\Setup::register();