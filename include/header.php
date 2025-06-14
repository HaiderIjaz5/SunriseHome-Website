<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header>
    <div class="top-bar">
        <div class="contact-info">
            <span><i class="phone-icon"></i> +1 202 110 1122</span>
            <span><i class="email-icon"></i> info@yourmail.com</span>
        </div>
        <div class="auth-links">
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
    <nav class="main-nav">
        <div class="logo">
            <a href="index.php"><img src="images/Logo/logo.png" alt="Logo"></a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="properties.php">Properties</a></li>
            <li><a href="terms.php">Terms & Condition</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</header>
