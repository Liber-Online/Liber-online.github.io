<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the file name and content from the POST request
    $file = $_POST['file'];
    $content = $_POST['content'];

    // Sanitize file name (to prevent path traversal)
    $file = basename($file);

    // Define the directory where the HTML files are stored (same as the script location)
    $directory = __DIR__;

    // Full path to the file
    $filePath = $directory . DIRECTORY_SEPARATOR . $file;

    // Save the content to the file
    if (file_put_contents($filePath, $content) !== false) {
        echo "File saved successfully!";
    } else {
        echo "Error saving the file!";
    }
}
?>