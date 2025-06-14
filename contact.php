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

<main>
    <section class="contact-us">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Whether you have questions, feedback, or need assistance, feel free to reach out.</p>
        <div class="contact-form">
        <form action="submit_contact.php" method="POST">
         <div class="form-group">
                 <label for="name">Your Name</label>
                 <input type="text" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
                          <label for="email">Your Email</label>
                          <input type="email" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
                             <label for="message">Your Message</label>
                             <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
    </div>
    <button type="submit" class="submit-button">Send Message</button>
</form>

        </div>
        <div class="contact-details">
            <h3>Our Office</h3>
            <p>123 Real Estate Avenue, Dream City, Country</p>
            <h3>Call Us</h3>
            <p>+1 202 110 1122</p>
            <h3>Email Us</h3>
            <p>info@realestate.com</p>
        </div>
    </section>
</main>

<?php include 'include/footer.php'; ?>
</body>
</html>
