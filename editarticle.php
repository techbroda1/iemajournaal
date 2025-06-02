<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'iemajour');
define('DB_USER', 'iema1');
define('DB_PASS', '@Pass2024');

$article_id = $_GET['id'] ?? 0;

try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get article data
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = :id AND user_id = :user_id AND status = 'pending'");
    $stmt->execute([':id' => $article_id, ':user_id' => $_SESSION['user_id']]);
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$article) {
        die("Article not found or not editable");
    }
    
    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process form data and update article
        // Add your update logic here
    }
    
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// The rest would be your edit form HTML
?>

<!-- You would implement the edit form here -->