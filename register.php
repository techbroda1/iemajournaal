<?php
session_start();
require 'config.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields
    $required = ['first_name', 'last_name', 'email', 'password', 'confirm_password'];
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $error = "All fields are required!";
            break;
        }
    }

    // Validate password match
    if (!$error && $_POST['password'] !== $_POST['confirm_password']) {
        $error = "Passwords do not match!";
    }

    if (!$error) {
        $first_name = htmlspecialchars(trim($_POST['first_name']));
        $last_name = htmlspecialchars(trim($_POST['last_name']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        
        try {
            // Check if email exists
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            
            if ($stmt->fetch()) {
                $error = "Email already registered!";
            } else {
                // Insert new user
                $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
                
                if ($stmt->execute([$first_name, $last_name, $email, $password])) {
					$_SESSION['user_id'] = $conn->lastInsertId();
					$_SESSION['user_email'] = $email;
					$_SESSION['first_name'] = $first_name;  // First name
					$_SESSION['last_name'] = $last_name;    // Last name
					header("Location: dashboard.php");
					exit(); // Critical: Stop script execution after redirect
				
                } else {
                    $error = "Registration failed. Please try again.";
                }
            }
        } catch(PDOException $e) {
            $error = "System error. Please try later.";
            error_log("Registration error: " . $e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - IEMA Journal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style>
        .error-message {
            color: #dc3545;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            border-radius: 4px;
        }
        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        .password-match {
            font-size: 0.9rem;
            margin-top: 5px;
        }
        .match { color: #28a745; }
        .no-match { color: #dc3545; }
    </style>
</head>
<body>
    <header class="bg-white shadow-sm">
        <div class="container py-3">
            <a href="index.php">
                <img src="images/logo.jpg" alt="IEMA Journal" height="40">
            </a>
        </div>
    </header>

    <main class="container my-5">
        <div class="form-container">
            <h2 class="text-center mb-4">Create Your Account</h2>
            
            <?php if ($error): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <form method="POST" action="register.php" id="registrationForm">
                <div class="form-group">
                    <label for="first_name">First Name*</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" required 
                           value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="last_name">Last Name*</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email" class="form-control" required
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>
                
                <div class="form-group">
                    <label for="password">Password*</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="6">
                    <small class="text-muted">Minimum 6 characters</small>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm Password*</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    <div id="passwordMatch" class="password-match"></div>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">I accept the <a href="terms.php">Terms & Conditions</a></label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block py-2">Register</button>
                
                <div class="text-center mt-3">
                    Already have an account? <a href="login.php">Login here</a>
                </div>
            </form>
			
        </div>
    </main>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0">© <?php echo date('Y'); ?> IEMA Journal. All Rights Reserved</p>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.3.1.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        // Password match validation
        $('#password, #confirm_password').on('keyup', function() {
            const password = $('#password').val();
            const confirmPassword = $('#confirm_password').val();
            const matchElement = $('#passwordMatch');
            
            if (password && confirmPassword) {
                if (password === confirmPassword) {
                    matchElement.text('Passwords match').removeClass('no-match').addClass('match');
                } else {
                    matchElement.text('Passwords do not match').removeClass('match').addClass('no-match');
                }
            } else {
                matchElement.text('');
            }
        });

        // Form submission validation
        $('#registrationForm').on('submit', function() {
            if ($('#password').val() !== $('#confirm_password').val()) {
                alert('Passwords do not match!');
                return false;
            }
            return true;
        });
    });
    </script>
</body>
</html>