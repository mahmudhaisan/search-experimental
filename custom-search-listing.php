<?php

/**
 * Plugin Name: Custom Search Listing
 * Plugin URI: https://github.com/mahmudhaisan
 * Description: Add search functionality with live results
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Mahmud Haisan
 * Author URI: https://github.com/mahmudhaisan
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI: https://example.com/my-plugin/
 * Text Domain: csl493
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    die;
}


//test shortcode generator
function search_form()
{
    require_once plugin_dir_path(__FILE__) . '/templates/frontend/search-form.php';
}

add_shortcode('home_search', 'search_form');

// require_once plugin_dir_path(__FILE__) . '/templates/frontend/home-search-results.php';
// require_once plugin_dir_path(__FILE__) . '/template-controller.php';
require_once plugin_dir_path(__FILE__) . '/custom-search-query/search-query.php';
