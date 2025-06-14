<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_password = htmlspecialchars(trim($_POST['current_password']));
    $new_password = htmlspecialchars(trim($_POST['new_password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));

    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        die("<p>All fields are required.</p>");
    }

    if ($new_password !== $confirm_password) {
        die("<p>New password and confirm password do not match.</p>");
    }

    try {
        // Fetch the current password from the database
        $stmt = $pdo->prepare("SELECT password FROM users WHERE id = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($current_password, $user['password'])) {
            die("<p>Current password is incorrect.</p>");
        }

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the password in the database
        $update_stmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
        $update_stmt->bindParam(':password', $hashed_password);
        $update_stmt->bindParam(':id', $_SESSION['user_id']);

        if ($update_stmt->execute()) {
            echo "<p>Password updated successfully.</p>";
        } else {
            echo "<p>Failed to update password. Please try again later.</p>";
        }
    } catch (PDOException $e) {
        die("<p>Error: " . $e->getMessage() . "</p>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include 'include/header.php'; ?>
    <main class="change-password-page">
        <section class="change-password-container">
            <h1>Change Password</h1>
            <form action="change_password.php" method="POST">
                <div class="form-group">
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password" placeholder="Enter current password" required>
                </div>
                <div class="form-group">
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm New Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required>
                </div>
                <button type="submit" class="change-password-button">Update Password</button>
            </form>
            <a href="profile.php" class="back-button">Back to Profile</a>
        </section>
    </main>
  <?php include 'include/footer.php'; ?>
</body>
</html>
