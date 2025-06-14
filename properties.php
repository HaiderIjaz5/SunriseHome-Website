<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'include/header.php'; ?>
<?php
require 'config.php';

try {
    // Fetch all properties from the database
    $stmt = $pdo->query("SELECT p.id, p.title, p.description, p.price, p.location, p.image, u.username 
                         FROM properties p 
                         JOIN users u ON p.user_id = u.id 
                         ORDER BY p.created_at DESC");
    $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<main class="properties-page">
    <section class="properties-container">
        <h1>Available Properties</h1>
        <div class="property-grid">
            <?php if (count($properties) > 0): ?>
                <?php foreach ($properties as $property): ?>
                    <div class="property-card">
                        <img src="uploads/properties/<?php echo htmlspecialchars($property['image']); ?>" alt="<?php echo htmlspecialchars($property['title']); ?>">
                        <h3><?php echo htmlspecialchars($property['title']); ?></h3>
                        <p><?php echo htmlspecialchars($property['description']); ?></p>
                        <p style="color: #28a745;"><strong style="color: #28a745;">Price:</strong> $<?php echo number_format($property['price'], 2); ?></p>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($property['location']); ?></p>
                        <p><strong>Submitted by:</strong> <?php echo htmlspecialchars($property['username']); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No properties available at the moment.</p>
            <?php endif; ?>
        </div>
        <div class="submit-property-button-container">
            <a href="login.php" class="submit-property-button">Submit Your Property</a>
        </div>
    </section>
</main>

<?php include 'include/footer.php'; ?>
</body>
</html>
