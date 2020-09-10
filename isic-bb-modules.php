<?php

/**
 * Plugin Name: FLEXBELT Custom Modules
 * Plugin URI: http://www.inzite.dk
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Rasmus Jürs
 * Author URI: http://www.inzite.dk
 * Text Domain: flexbelt-bb-modules
 * Domain Path: /languages
 */

function flexbelt_bb_modules_load_plugin_textdomain() {
    load_plugin_textdomain('flexbelt-bb-modules', FALSE, basename(dirname(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'flexbelt_bb_modules_load_plugin_textdomain');

define('FLEXBELT_MODULES_DIR', plugin_dir_path(__FILE__));
define('FLEXBELT_MODULES_URL', plugins_url('/', __FILE__));

function styles_includer() {
    wp_enqueue_style('flexbelt-tailwind', FLEXBELT_MODULES_URL . '/build/style.css');
}

add_action('wp_enqueue_scripts', 'styles_includer');

add_action('init', 'flexbelt_load_modules');

function flexbelt_load_modules() {
    if (class_exists('FLBuilder')) {
        require_once 'modules/hero-slider/hero-slider.php';
        require_once 'modules/category-slider/category-slider.php';
        require_once 'modules/flexbelt-button/flexbelt-button.php';
    }
}
