<?php
/**
 * Plugin Name: Word Search Game
 * Plugin URI: 
 * Description: Create and manage interactive word search games
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: 
 * Text Domain: word-search
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('WORD_SEARCH_VERSION', '1.0.0');
define('WORD_SEARCH_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WORD_SEARCH_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include required files
require_once WORD_SEARCH_PLUGIN_DIR . 'includes/class-word-search-activator.php';
require_once WORD_SEARCH_PLUGIN_DIR . 'includes/class-word-search-deactivator.php';
require_once WORD_SEARCH_PLUGIN_DIR . 'includes/class-word-search.php';

// Register activation and deactivation hooks
register_activation_hook(__FILE__, array('Word_Search_Activator', 'activate'));
register_deactivation_hook(__FILE__, array('Word_Search_Deactivator', 'deactivate'));

// Initialize the plugin
function run_word_search() {
    $plugin = new Word_Search();
    $plugin->run();
}
run_word_search();