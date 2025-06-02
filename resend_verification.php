<?php
session_start();
require 'config.php';

// Rate limiting - 5 minutes between resend attempts
if (!isset($_SESSION['last_resend'])) {
    $_SESSION['last_resend'] = time();
} elseif (time() - $_SESSION['last_resend'] < 300) {
    header('HTTP/1.1 429 Too Many Requests');
    die("<h2>Too Many Requests</h2><p>Please wait 5 minutes before requesting another verification email.</p>");
}
$_SESSION['last_resend'] = time();

// Check if email parameter exists
if (!isset($_GET['email'])) {
    header("Location: register.php");
    exit();
}

$email = urldecode($_GET['email']);
$error = '';
$success = '';

try {
    // Verify email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format");
    }

    // Check if user exists and isn't verified
    $stmt = $conn->prepare("SELECT id, first_name, is_verified FROM users WHERE email = ?");
    if (!$stmt->execute([$email])) {
        throw new Exception("Database query failed");
    }

    $user = $stmt->fetch();
    
    if (!$user) {
        $error = "No account found with this email.";
    } elseif ($user['is_verified']) {
        $error = "This account is already verified. Please <a href='login.php'>login</a>.";
    } else {
        // Generate new token
        $new_token = bin2hex(random_bytes(32));
        $expiry_date = date('Y-m-d H:i:s', strtotime('+24 hours'));
        
        // Update token in database
        $update_stmt = $conn->prepare("UPDATE users SET verification_token = ?, token_expiry = ? WHERE email = ?");
        if (!$update_stmt->execute([$new_token, $expiry_date, $email])) {
            throw new Exception("Failed to update verification token");
        }
        
        // Send verification email
        $verify_link = "https://".$_SERVER['HTTP_HOST']."/verify.php?token=$new_token&email=".urlencode($email);
        $subject = "Verify Your Email Address";
        $message = "Hello ".$user['first_name'].",\n\n";
        $message .= "Here's your new verification link:\n\n";
        $message .= $verify_link."\n\n";
        $message .= "This link expires in 24 hours.\n\n";
        $message .= "If you didn't request this, please ignore this email.";
        $headers = "From: noreply@".$_SERVER['HTTP_HOST']."\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        if (mail($email, $subject, $message, $headers)) {
            $success = "A new verification link has been sent to your email.";
        } else {
            throw new Exception("Failed to send verification email");
        }
    }
} catch(Exception $e) {
    error_log("Resend Verification Error: ".$e->getMessage());
    $error = "An error occurred while processing your request. Please try again later.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resend Verification Email</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body { padding: 20px; }
        .alert { margin: 20px 0; }
        .container { max-width: 600px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resend Verification Email</h2>
        
        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <div class="alert alert-success">
                <?php echo $success; ?>
                <p>Didn't receive the email? Check your spam folder or try again later.</p>
            </div>
        <?php endif; ?>
        
        <?php if (!$success && !$error): ?>
            <form method="GET" action="resend-verification.php">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Resend Verification Email</button>
            </form>
        <?php endif; ?>
        
        <div class="mt-3">
            <a href="login.php">Back to Login</a> | 
            <a href="register.php">Register New Account</a>
        </div>
    </div>
</body>
</html>