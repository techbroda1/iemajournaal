<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("HTTP/1.1 403 Forbidden");
    exit();
}

$upload_dir = __DIR__.'/uploads/';
$file = $_GET['file'] ?? '';

// Validate file path
if (empty($file) || preg_match('/\.\./', $file) || !file_exists($upload_dir.$file)) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

// Get file info
$filepath = $upload_dir.$file;
$filename = basename($filepath);
$filesize = filesize($filepath);
$filetype = mime_content_type($filepath);

// Check if user owns this file (you'll need to implement this check)
// For example, query database to verify the file belongs to user's article

// Send file to browser
header("Content-Type: $filetype");
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Length: $filesize");
readfile($filepath);
exit();
?>