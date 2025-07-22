<?php
// Initialize the session (if needed)
session_start();

// Check if user is already logged in
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}

// Include config file (if using database)
// require_once "includes/config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials (placeholder - implement your authentication logic)
    if(empty($username_err) && empty($password_err)){
        // Here you would typically validate against a database
        // This is just a placeholder for demo purposes
        if($username === "admin" && $password === "password"){
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            
            // Redirect user to dashboard
            header("location: dashboard.php");
        } else{
            $login_err = "Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Material Design</title>
    
    <!-- Google Fonts - Roboto (Material Design standard font) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="login-header">
                <h2>Login</h2>
                <p>Please fill in your credentials to log in</p>
            </div>
            
            <?php 
            if(!empty($login_err)){
                echo '<div class="error-message">' . $login_err . '</div>';
            }        
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                        <span class="material-icons">person</span>
                        <input type="text" name="username" id="username" value="<?php echo $username; ?>">
                        <label for="username">Username</label>
                        <span class="focus-border"></span>
                    </div>
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <div class="input-field">
                        <span class="material-icons">lock</span>
                        <input type="password" name="password" id="password">
                        <label for="password">Password</label>
                        <span class="focus-border"></span>
                    </div>
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                
                <div class="form-group checkbox-group">
                    <label class="checkbox-container">
                        <input type="checkbox" name="remember" id="remember">
                        <span class="checkmark"></span>
                        Remember me
                    </label>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                
                <div class="form-footer">
                    <p>Don't have an account? <a href="register.php">Sign up</a></p>
                    <p><a href="forgot-password.php">Forgot Password?</a></p>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>
</body>
</html>