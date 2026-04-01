<?php

function ai_log($message) {
    $log = get_option('ai_logs', []);
    $log[] = current_time('mysql') . " - " . $message;
    update_option('ai_logs', $log);
}
