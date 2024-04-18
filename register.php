<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="box form-box">
            <header>Sign Up</header>
            <form action="be/signup.php" method="post">
                <div class="form-box">
                <?php
                    if (isset($_GET['error'])) {
                            $error = urldecode($_GET['error']);
                            echo '<div class="error-message" style="color: red;">' . htmlspecialchars($error) . '</div>';
                    }
                ?>

                    <div class="field input">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" autocomplete="off" required>
                    </div>
                   <div class="field input">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="pass">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
    
                    <div class="field input">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
    
                    <div class="field input">
                        <label for="dob">Date of Birth</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
    
                  
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Sign Up" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="index.php">Sign In</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>