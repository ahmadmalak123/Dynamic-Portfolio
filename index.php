<?php
 session_start();
 session_unset(); 
 session_destroy();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container" style="padding-top: 300px;">
        <div class="box form-box">
            <header>Login</header>
            <form action="be/login.php" method="post">
            <?php
                    if (isset($_GET['error'])) {
                            $error = urldecode($_GET['error']);
                            echo '<div class="error-message" style="color: red;">' . htmlspecialchars($error) . '</div>';
                    }
                ?>
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have an account? <a href="register.php">Sign Up Now!</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>