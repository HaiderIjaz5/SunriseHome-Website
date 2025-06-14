<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Real Estate Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include 'include/header.php'; ?>
    <main class="register-page">
        <section class="register-container">
            <h1>Register</h1>
            <form action="register_handler.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="register-button">Register</button>
            </form>
            <p class="login-link">Already have an account? <a href="login.php">Login here</a>.</p>
            <a class ="main-page"href="index.php">Home</a>
        </section>
    </main>
    <?php include 'include/footer.php'; ?>
</body>
</html>
