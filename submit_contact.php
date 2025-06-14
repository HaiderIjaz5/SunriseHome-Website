<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Real Estate Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<?php
// Include the database configuration file
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        echo "<p>Please fill in all fields.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email format. Please try again.</p>";
    } else {
        try {
            // Insert data into the database
            $stmt = $pdo->prepare("INSERT INTO contact_messages (name, email, message) VALUES (:name, :email, :message)");
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);

            if ($stmt->execute()) {
                echo "<p>Message sent successfully!</p>";
            } else {
                echo "<p>There was an error sending your message. Please try again later.</p>";
            }
        } catch (PDOException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }

    // Display the Home button
    echo '<a href="index.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #343a40; color: #ffffff; text-decoration: none; border-radius: 5px;">Home</a>';
}
?>
<?php include 'include/footer.php'; ?>
</body>
</html>
