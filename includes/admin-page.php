<?php

function ai_automation_menu() {
    add_menu_page(
        'AI Automation',
        'AI Automation',
        'manage_options',
        'ai-automation',
        'ai_automation_page',
        'dashicons-robot'
    );
}
add_action('admin_menu', 'ai_automation_menu');

function ai_automation_page() {
    ?>
    <div class="wrap">
        <h1>AI Content Generator</h1>
        <form method="post">
            <textarea name="prompt" placeholder="Enter prompt..." style="width:100%; height:120px;"></textarea>
            <br><br>
            <input type="submit" name="generate" class="button button-primary" value="Generate Content">
        </form>
    </div>
    <?php

    if (isset($_POST['generate'])) {
        $prompt = sanitize_text_field($_POST['prompt']);
        $response = ai_generate_content($prompt);

        echo "<h3>Generated Content:</h3>";
        echo "<div style='background:#fff;padding:15px;border:1px solid #ccc;'>$response</div>";

        wp_insert_post([
            'post_title' => 'AI Generated Content',
            'post_content' => $response,
            'post_status' => 'draft'
        ]);

        ai_log("Content generated for prompt: " . $prompt);
    }
}
