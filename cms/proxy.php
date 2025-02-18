<?php
// proxy.php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $allowedDirectories = ['', 'omlagg', 'bg']; // Directories you want to allow
    $isAllowed = false;

    // Check if the requested page is in an allowed directory
    foreach ($allowedDirectories as $dir) {
        if (strpos($page, $dir) === 0) {
            $isAllowed = true;
            break;
        }
    }

    if ($isAllowed) {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . $page;
        if (file_exists($filePath)) {
            echo file_get_contents($filePath);
        } else {
            http_response_code(404);
            echo 'File not found.';
        }
    } else {
        http_response_code(403);
        echo 'Access denied.';
    }
} else {
    http_response_code(400);
    echo 'Page parameter is missing.';
}
?>