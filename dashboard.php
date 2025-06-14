<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
require 'config.php';

// Fetch user details
$user_id = $_SESSION['user_id'];
try {
    $stmt = $pdo->prepare("SELECT username, email FROM users WHERE id = :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<main class="dashboard">
    <section class="dashboard-container">
        <h1>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h1>
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>

        <div class="dashboard-links">
            <a href="submit_property.php" class="dashboard-button">Submit a Property</a>
            <a href="profile.php" class="dashboard-button">View Profile</a>
            <a href="logout.php" class="dashboard-button">Logout</a>
        </div>
    </section>
</main>
<?php include 'include/footer.php'; ?>
</body>
</html>
