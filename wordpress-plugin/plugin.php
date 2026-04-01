<?php
/**
 * Plugin Name: AI Automation Platform
 */

if (!defined('ABSPATH')) exit;

add_action('rest_api_init', function () {
    register_rest_route('ai/v1', '/generate', [
        'methods' => 'POST',
        'callback' => 'ai_generate_handler'
    ]);
});

function ai_generate_handler($request) {
    $prompt = $request->get_param('prompt');

    return [
        'result' => "Mock AI response for: " . $prompt
    ];
}
