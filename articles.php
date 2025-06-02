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

try {
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Get current user data
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = :user_id");
    $stmt->execute([':user_id' => $_SESSION['user_id']]);
    $current_user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$current_user) {
        die("User not found");
    }
    
    // Get articles for this user
    $stmt = $conn->prepare("SELECT * FROM articles WHERE user_id = :user_id ORDER BY created_at DESC");
    $stmt->execute([':user_id' => $_SESSION['user_id']]);
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Articles - Academic Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .article-card {
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .article-status {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .status-approved {
            background-color: #d4edda;
            color: #155724;
        }
        .status-rejected {
            background-color: #f8d7da;
            color: #721c24;
        }
        .empty-state {
            text-align: center;
            padding: 40px;
            background-color: #f8f9fa;
            border-radius: 10px;
        }
        .empty-state i {
            font-size: 50px;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .modal-article-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .file-download-btn {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Academic Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="articles.php">My Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submitarticle.php">Submit Article</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>
                            <?php echo htmlspecialchars($current_user['first_name']); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a></li>
                            <li><a class="dropdown-item" href="accountsettings.php"><i class="fas fa-cog me-2"></i>Account Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2">My Articles</h1>
            <a href="submitarticle.php" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Submit New Article
            </a>
        </div>

        <?php if (empty($articles)): ?>
            <div class="empty-state">
                <i class="fas fa-file-alt"></i>
                <h3>No Articles Found</h3>
                <p>You haven't submitted any articles yet. Get started by submitting your first article!</p>
                <a href="submitarticle.php" class="btn btn-primary btn-lg mt-3">
                    <i class="fas fa-plus me-2"></i>Submit Your First Article
                </a>
            </div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($articles as $article): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card article-card" data-bs-toggle="modal" data-bs-target="#articleModal" 
                             data-article-id="<?php echo $article['id']; ?>"
                             data-article-title="<?php echo htmlspecialchars($article['title']); ?>"
                             data-article-abstract="<?php echo htmlspecialchars($article['abstract']); ?>"
                             data-article-status="<?php echo htmlspecialchars($article['status']); ?>"
                             data-article-date="<?php echo date('M d, Y', strtotime($article['created_at'])); ?>"
                             data-article-ppt="<?php echo htmlspecialchars($article['ppt_file']); ?>"
                             data-article-handout="<?php echo htmlspecialchars($article['handout_file'] ?? ''); ?>">
                            <div class="card-body">
                                <span class="article-status status-<?php echo strtolower($article['status']); ?>">
                                    <?php echo htmlspecialchars($article['status']); ?>
                                </span>
                                <h5 class="card-title"><?php echo htmlspecialchars($article['title']); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    Submitted on <?php echo date('M d, Y', strtotime($article['created_at'])); ?>
                                </h6>
                                <p class="card-text text-truncate"><?php echo htmlspecialchars($article['abstract']); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Article View Modal -->
    <div class="modal fade" id="articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="articleModalLabel">Article Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 id="modalArticleTitle"></h4>
                            <p class="text-muted mb-3">Submitted on <span id="modalArticleDate"></span></p>
                            <span class="badge rounded-pill mb-3" id="modalArticleStatus"></span>
                            <p id="modalArticleAbstract" class="mb-4"></p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/article-placeholder.jpg" alt="Article" class="modal-article-img">
                            
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-primary file-download-btn" id="downloadPptBtn">
                                    <i class="fas fa-file-powerpoint me-2"></i>Download PPT
                                </a>
                                
                                <a href="#" class="btn btn-success file-download-btn" id="downloadHandoutBtn" style="display: none;">
                                    <i class="fas fa-file-pdf me-2"></i>Download Handout
                                </a>
                                
                                <a href="#" class="btn btn-warning file-download-btn" id="editArticleBtn" style="display: none;">
                                    <i class="fas fa-edit me-2"></i>Edit Article
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Handle modal display with article data
        document.addEventListener('DOMContentLoaded', function() {
            var articleModal = document.getElementById('articleModal');
            
            articleModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                
                // Extract article data from data-* attributes
                var articleId = button.getAttribute('data-article-id');
                var title = button.getAttribute('data-article-title');
                var abstract = button.getAttribute('data-article-abstract');
                var status = button.getAttribute('data-article-status');
                var date = button.getAttribute('data-article-date');
                var pptFile = button.getAttribute('data-article-ppt');
                var handoutFile = button.getAttribute('data-article-handout');
                
                // Update modal content
                document.getElementById('modalArticleTitle').textContent = title;
                document.getElementById('modalArticleAbstract').textContent = abstract;
                document.getElementById('modalArticleDate').textContent = date;
                
                // Update status badge
                var statusBadge = document.getElementById('modalArticleStatus');
                statusBadge.textContent = status;
                statusBadge.className = 'badge rounded-pill mb-3 ';
                
                if (status.toLowerCase() === 'pending') {
                    statusBadge.classList.add('bg-warning', 'text-dark');
                    document.getElementById('editArticleBtn').style.display = 'block';
                } else if (status.toLowerCase() === 'approved') {
                    statusBadge.classList.add('bg-success', 'text-white');
                } else {
                    statusBadge.classList.add('bg-danger', 'text-white');
                }
                
                // Set up download links
                var downloadPptBtn = document.getElementById('downloadPptBtn');
                downloadPptBtn.href = 'download.php?file=' + encodeURIComponent(pptFile);
                
                var downloadHandoutBtn = document.getElementById('downloadHandoutBtn');
                if (handoutFile) {
                    downloadHandoutBtn.style.display = 'block';
                    downloadHandoutBtn.href = 'download.php?file=' + encodeURIComponent(handoutFile);
                } else {
                    downloadHandoutBtn.style.display = 'none';
                }
                
                // Set up edit button (only for pending articles)
                var editArticleBtn = document.getElementById('editArticleBtn');
                if (status.toLowerCase() === 'pending') {
                    editArticleBtn.style.display = 'block';
                    editArticleBtn.href = 'editarticle.php?id=' + articleId;
                } else {
                    editArticleBtn.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>