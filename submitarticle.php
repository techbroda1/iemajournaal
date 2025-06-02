<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Submit your academic article for review">
    <title>Submit Article - IEMA Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navigation styles */
        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #2c3e50;
        }
        .nav-link {
            color: #2c3e50;
            padding: 0.5rem 1rem;
        }
        .nav-link:hover {
            color: #1a73e8;
        }
        .active {
            font-weight: bold;
            color: #1a73e8 !important;
        }
        
        /* Existing form styles */
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .required-label:after {
            content: " *";
            color: red;
        }
        .progress-container {
            margin: 20px 0 40px;
        }
        .progress-step {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .step-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            color: #6c757d;
        }
        .step-icon.completed {
            background: #28a745;
            color: white;
        }
        .file-info {
            font-size: 0.9rem;
            color: #6c757d;
            margin-top: 5px;
        }
        .upload-hint {
            font-size: 0.85rem;
            color: #6c757d;
            margin-top: -10px;
            margin-bottom: 15px;
        }
        .section-divider {
            border-top: 1px solid #dee2e6;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">IEMA Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="submitarticle.php">Submit Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="guidelines.php">Submission Guidelines</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="form-container">
            <h2 class="mb-4 text-center">Submit New Article</h2>
            
            <?php if ($error): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?php echo htmlspecialchars($error); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            
            <?php if ($success): ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <?php echo htmlspecialchars($success); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            
            <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                
                <div class="progress-container">
                    <div class="progress-step">
                        <div class="step-icon <?php echo !empty($form_data['title']) ? 'completed' : ''; ?>">
                            <?php echo !empty($form_data['title']) ? '✓' : '1'; ?>
                        </div>
                        <div>
                            <strong>Article Information</strong>
                            <div class="file-info">Title, abstract, and author details</div>
                        </div>
                    </div>
                    <div class="progress-step">
                        <div class="step-icon <?php echo (!empty($_FILES['ppt_file']['name']) || !empty($_FILES['handout_file']['name'])) ? 'completed' : ''; ?>">
                            <?php echo (!empty($_FILES['ppt_file']['name']) || !empty($_FILES['handout_file']['name'])) ? '✓' : '2'; ?>
                        </div>
                        <div>
                            <strong>File Uploads</strong>
                            <div class="file-info">Presentation and handout files</div>
                        </div>
                    </div>
                    <div class="progress-step">
                        <div class="step-icon <?php echo isset($_POST['terms']) ? 'completed' : ''; ?>">
                            <?php echo isset($_POST['terms']) ? '✓' : '3'; ?>
                        </div>
                        <div>
                            <strong>Terms & Submission</strong>
                            <div class="file-info">Review and finalize submission</div>
                        </div>
                    </div>
                </div>
                
                <!-- Rest of your form content remains the same -->
                <div class="mb-4">
                    <h4 class="mb-3">Article Details</h4>
                    <div class="mb-3">
                        <label for="title" class="form-label required-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" 
                               value="<?php echo htmlspecialchars($form_data['title']); ?>" required
                               maxlength="255">
                        <div class="invalid-feedback">Please provide a title (max 255 characters)</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">Select a category (optional)</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?php echo htmlspecialchars($category['id']); ?>"
                                    <?php echo $form_data['category_id'] == $category['id'] ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($category['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="corresponding_author" class="form-label">Corresponding Author</label>
                        <input type="text" class="form-control" id="corresponding_author" name="corresponding_author"
                               value="<?php echo htmlspecialchars($form_data['corresponding_author']); ?>"
                               maxlength="100">
                        <div class="form-text">If different from your account</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="abstract" class="form-label required-label">Abstract</label>
                        <textarea class="form-control" id="abstract" name="abstract" rows="6" required
                                  maxlength="2000"><?php 
                            echo htmlspecialchars($form_data['abstract']); 
                        ?></textarea>
                        <div class="invalid-feedback">Please provide an abstract (max 2000 characters)</div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <div class="mb-4">
                    <h4 class="mb-3">File Uploads</h4>
                    <p class="upload-hint">Upload supporting files (optional). Maximum file size: 5MB each.</p>
                    
                    <div class="mb-3">
                        <label for="ppt_file" class="form-label">Presentation File</label>
                        <input type="file" class="form-control" id="ppt_file" name="ppt_file" 
                               accept=".ppt,.pptx,.pdf">
                        <div class="form-text">PPT, PPTX, or PDF format</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="handout_file" class="form-label">Handout Document</label>
                        <input type="file" class="form-control" id="handout_file" name="handout_file"
                               accept=".pdf,.doc,.docx">
                        <div class="form-text">PDF, DOC, or DOCX format</div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <div class="mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the <a href="terms.php" target="_blank">Terms and Conditions</a> and confirm that this submission complies with all stated requirements.
                        </label>
                        <div class="invalid-feedback">You must accept the terms and conditions</div>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary px-4">Submit Article</button>
                    <button type="reset" class="btn btn-outline-secondary">Reset Form</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Enhanced form validation
    (function () {
        'use strict';
        
        // Fetch all forms with validation
        const forms = document.querySelectorAll('.needs-validation');
        
        // Validate each form
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                form.classList.add('was-validated');
            }, false);
            
            // Add live validation on input
            form.querySelectorAll('input, textarea, select').forEach(input => {
                input.addEventListener('input', () => {
                    if (input.checkValidity()) {
                        input.classList.remove('is-invalid');
                        input.classList.add('is-valid');
                    } else {
                        input.classList.remove('is-valid');
                    }
                });
            });
        });
        
        // File size validation
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', () => {
                if (input.files[0] && input.files[0].size > <?php echo MAX_FILE_SIZE; ?>) {
                    alert('File is too large. Maximum size is 5MB.');
                    input.value = '';
                }
            });
        });
    })();
    </script>
</body>
</html>