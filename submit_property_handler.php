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
    $property_title = htmlspecialchars(trim($_POST['property_title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $price = htmlspecialchars(trim($_POST['price']));
    $location = htmlspecialchars(trim($_POST['location']));

    // Validate form inputs
    if (empty($property_title) || empty($description) || empty($price) || empty($location)) {
        die("All fields are required.");
    }

    // Handle image upload
    if (isset($_FILES['property_image']) && $_FILES['property_image']['error'] === UPLOAD_ERR_OK) {
        $file_tmp_path = $_FILES['property_image']['tmp_name'];
        $file_name = $_FILES['property_image']['name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array(strtolower($file_ext), $allowed_ext)) {
            die("Invalid image file type. Allowed types: jpg, jpeg, png, gif.");
        }

        $upload_dir = 'uploads/properties/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $new_file_name = uniqid() . '.' . $file_ext;
        $upload_path = $upload_dir . $new_file_name;

        if (!move_uploaded_file($file_tmp_path, $upload_path)) {
            die("Failed to upload image.");
        }
    } else {
        die("An error occurred during image upload.");
    }

    try {
        // Insert property data into the database
        $stmt = $pdo->prepare(
            "INSERT INTO properties (user_id, title, description, price, location, image) 
             VALUES (:user_id, :title, :description, :price, :location, :image)"
        );

        $stmt->bindParam(':user_id', $_SESSION['user_id']);
        $stmt->bindParam(':title', $property_title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':image', $new_file_name);

        if ($stmt->execute()) {
            header("Location: properties.php?success=1");
            exit;
        } else {
            die("Failed to submit property. Please try again later.");
        }
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
