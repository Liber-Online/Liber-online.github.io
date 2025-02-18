<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


// Handle logout
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_unset();  // Unset all session variables
    session_destroy();  // Destroy the session
    header("Location: cms.php");  // Redirect to login page
    exit;
}

// Set login credentials
$users = [
    "admin" => ["password" => "Test", "role" => "admin"],  
    "user"  => ["password" => "Test2",  "role" => "limited"] 
];

// Handle login
if (!isset($_SESSION["logged_in"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"], $_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (isset($users[$username]) && $users[$username]["password"] === $password) {
            $_SESSION["logged_in"] = true;
            $_SESSION["role"] = $users[$username]["role"];
        } else {
            die("Incorrect login.");
        }
    } else {
        echo '<form method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
              </form>';
        exit;
    }
}

// Define allowed file types
$allowedExtensions = ($_SESSION["role"] === "admin") ? ["php", "html", "js", "css"] : ["html"];
$basePath = ($_SESSION["role"] === "limited") ? "../omlagg/" : "../";

// Ensure basePath exists
if (!is_dir($basePath)) {
    die(json_encode(["error" => "Directory not found: $basePath"]));
}

// Function to scan directories recursively
function scanDirectory($dir, $allowedExtensions) {
    $files = [];
    $items = scandir($dir);
    
    if ($items === false) {
        return [];
    }

    foreach ($items as $item) {
        if ($item === "." || $item === "..") {
            continue;
        }

        $path = $dir . DIRECTORY_SEPARATOR . $item;

        // Make sure we only access files within the allowed base directory
        if (realpath($path) && strpos(realpath($path), realpath($dir)) === 0) {
            if (is_dir($path)) {
                // Recursively scan subfolders
                $files = array_merge($files, scanDirectory($path, $allowedExtensions));
            } elseif (is_file($path)) {
                // Check file extension
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                if (in_array($ext, $allowedExtensions)) {
                    $files[] = str_replace("../", "", $path); // Relative path
                }
            }
        }
    }

    return $files;
}


// List allowed files (recursively for Admin)
$pages = []; // Ensure $pages is always an array

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"]) && $_GET["action"] == "list") {
    $pages = scanDirectory($basePath, $allowedExtensions);
    echo json_encode(array_values($pages));
    exit;
}


// Load a file
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["page"])) {
    $requestedPage = basename($_GET["page"]);
    $fullPath = realpath($basePath . $requestedPage);
    
    if (strpos($fullPath, realpath($basePath)) === 0 && file_exists($fullPath) && in_array(pathinfo($fullPath, PATHINFO_EXTENSION), $allowedExtensions)) {
        echo file_get_contents($fullPath);
    } else {
        echo "Error: File not found or permission denied.";
    }
    exit;
}

// Save a file
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["action"]) && $_POST["action"] == "save") {
    $requestedPage = basename($_POST["page"]);
    $content = $_POST["content"];
    $fullPath = realpath($basePath . $requestedPage);

    if (strpos($fullPath, realpath($basePath)) === 0 && file_exists($fullPath) && is_writable($fullPath) && in_array(pathinfo($fullPath, PATHINFO_EXTENSION), $allowedExtensions)) {
        file_put_contents($fullPath, $content);
        echo "File saved successfully!";
    } else {
        echo "Error: Cannot save the file.";
    }
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET["action"]) && $_GET["action"] == "createPage") {
    $data = json_decode(file_get_contents('php://input'), true);
    $pageName = $data['pageName'] ?? '';

    if ($pageName) {
        $filePath = "../" . $pageName . ".php";  // Change this path as needed

        // Create the new file with some default content (can be modified)
        if (!file_exists($filePath)) {
            $fileContent = "<?php\n// New page\n?>\n";
            if (file_put_contents($filePath, $fileContent)) {
                echo json_encode(["success" => true]);
            } else {
                echo json_encode(["error" => "Failed to create page."]);
            }
        } else {
            echo json_encode(["error" => "Page already exists."]);
        }
    } else {
        echo json_encode(["error" => "Invalid page name."]);
    }
    exit;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMS Dashboard</title>
    <script src="cms.js"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; display: flex; }
        #sidebar { width: 250px; background: #333; color: white; padding: 20px; height: 100vh; }
        #sidebar h2 { margin-top: 0; }
        #sidebar select, #sidebar input, #sidebar button { width: 100%; margin-bottom: 10px; padding: 10px; }
        #main { flex: 1; padding: 20px; }
        #toolbar button { padding: 5px 10px; margin: 2px; }
        #editor { width: 100%; height: 400px; border: 1px solid #ccc; padding: 10px; background: white; }
        #source { display: none; width: 100%; height: 400px; }
    </style>
</head>
<body>

<div id="sidebar">
    <h2>CMS</h2>
    <a href="?logout=1" style="color: red;">Logout</a>
    <select id="page-list">
        <option>Select a page</option>
        <?php foreach ($pages as $p) echo "<option value='$p'>$p</option>"; ?>
    </select>
    <button onclick="loadPage()">Edit</button>
    <button onclick="toggleSource()">Toggle Source</button>
    <button onclick="savePage()">Save</button>
    <button onclick="deletePage()">Delete</button>

    <h3>Create New Page</h3>
    <input type="text" id="new-page-name" placeholder="Page name">
    <button onclick="createPage()">Create</button>
</div>

<div id="main">
    <h1>Editor</h1>
<div id="toolbar">
    <button onclick="execCmd('bold')">Bold</button>
    <button onclick="execCmd('italic')">Italic</button>
    <button onclick="execCmd('underline')">Underline</button>
    <button onclick="execCmd('foreColor', prompt('Enter color:', 'red'))">Text Color</button>
    <button onclick="execCmd('backColor', prompt('Enter background color:', 'yellow'))">Highlight</button>
    <button onclick="execCmd('insertOrderedList')">Numbered List</button>
    <button onclick="execCmd('insertUnorderedList')">Bullet List</button>
    <button onclick="insertTable()">Insert Table</button>
    <button onclick="execCmd('createLink', prompt('Enter URL:', 'http://'))">Insert Link</button>
    <button onclick="execCmd('unlink')">Remove Link</button>
    <button onclick="insertImage()">Insert Image</button>
    <button onclick="execCmd('formatBlock', 'h1')">H1</button>
    <button onclick="execCmd('formatBlock', 'h2')">H2</button>
</div>

<div id="editor-container">
    <div id="editor" contenteditable="true"></div>
    <textarea id="source"></textarea>
</div>

<div id="style-panel" style="display: none;">
    <h3>Style Editor</h3>
    <label>Width: <input type="text" id="style-width"></label>
    <label>Height: <input type="text" id="style-height"></label>
    <label>Text Align:
        <select id="style-text-align">
            <option value="">Default</option>
            <option value="left">Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
        </select>
    </label>
    <label>Border: <input type="text" id="style-border"></label>
    <button onclick="applyStyles()">Apply</button>
</div>


</body>
</html>
