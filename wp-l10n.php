<?php

/**
 * Plugin Name: WP-L10n
 * Plugin URI: https://github.com/vguerrerobosch/wp-l10n
 * Description: A better localization plugin for WordPress.
 * Version: 0.1.0
 * Author: Victor Guerrero
 * Author URI: https://vguerrerobosch.com
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: wp-l10n
 * Domain Path: /lang
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include Composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
