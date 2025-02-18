<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $page = $_POST['page'];
    $content = $_POST['content'];
    if ($page && $content) {
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/' . $page, $content);
        echo 'Saved successfully!';
    } else {
        http_response_code(400);
        echo 'Invalid request.';
    }
} else {
    http_response_code(405);
    echo 'Method not allowed.';
}
?>