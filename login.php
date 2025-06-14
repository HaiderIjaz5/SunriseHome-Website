<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Real Estate Website</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include 'include/header.php'; ?>
    <main class="login-page">
        <section class="login-container">
            <h1>Login</h1>
            <form action="login_handler.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="login-button">Login</button>
            </form>
            <p class="register-link">Don't have an account? <a href="register.php">Register here</a>.</p>
        </section>
    </main>
    <?php include 'include/footer.php'; ?>
</body>
</html>
