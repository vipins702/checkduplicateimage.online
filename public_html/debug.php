<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Debug Information</h1>";
echo "<h2>Session Data:</h2>";
print_r($_SESSION);

echo "<h2>Server Information:</h2>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "HTTP Host: " . $_SERVER['HTTP_HOST'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";

echo "<h2>File Paths:</h2>";
echo "Current Directory: " . __DIR__ . "<br>";
echo "Uploads Directory: " . __DIR__ . "/uploads/<br>";

echo "<h2>Upload Directory Contents:</h2>";
if (is_dir(__DIR__ . "/uploads/")) {
    $files = scandir(__DIR__ . "/uploads/");
    foreach($files as $file) {
        if ($file != '.' && $file != '..') {
            echo $file . "<br>";
        }
    }
} else {
    echo "Uploads directory does not exist!";
}

echo "<h2>Test Links:</h2>";
echo '<a href="index.php">Index</a><br>';
echo '<a href="Search.php">Search</a><br>';
echo '<a href="upload.php">Upload</a><br>';
echo '<a href="reverse_image_search.php">Reverse Image Search</a><br>';

if (isset($_SESSION['id'])) {
    echo "<h2>Last Uploaded Image:</h2>";
    echo "URL: " . $_SESSION['id'] . "<br>";
    echo '<img src="' . str_replace('https://checkduplicateimage.online/', '', $_SESSION['id']) . '" style="max-width: 200px;"><br>';
}
?>