<?php
// Check if the file parameter is set
if (isset($_GET['file'])) {
    // Get the file name from the request
    $file = $_GET['file'];
    // Set the path to the directory where documents are stored
    $filepath = "WebApp/uploads" . $file;

    // Check if the file exists
    if (file_exists($filepath)) {
        // Set headers for file download
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . basename($filepath));
        // Read the file and output it to the browser
        readfile($filepath);
        exit;
    } else {
        // File not found
        echo "File not found";
    }
} else {
    // File parameter not provided
    echo "Invalid request";
}
?>
