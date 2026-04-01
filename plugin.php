<?php
/**
 * Plugin Name: AI Content Automation
 * Description: Generate and manage AI-powered content inside WordPress.
 * Version: 1.0
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/admin-page.php';
require_once plugin_dir_path(__FILE__) . 'includes/api-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/logger.php';
