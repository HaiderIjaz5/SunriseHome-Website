<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/Logo/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include 'include/header.php'; ?>

<main>
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Find Your Dream Home</h1>
            <p>Explore our listings and discover your perfect property today.</p>
            <button onclick="location.href='properties.php'" class="browse-button">Browse Properties</button>
        </div>
        <div class="hero-image">
            <img src="images/istockphoto-1492732089-612x612.jpg" alt="Dream Home">
        </div>
    </div>
</section>


<section class="what-we-do">
    <h2>What We Do</h2>
    <div class="services">
        <div class="service">
            <img src="images/Info/your-guide-to-buying-a-home.jpg" alt="Buy Property">
            <h3>Buy Property</h3>
            <p>Find your dream home from our extensive listings.</p>
        </div>
        <div class="service">
            <img src="images/Info/depositphotos_71310903-stock-photo-real-estate-investment.jpg" alt="Sell Property">
            <h3>Sell Property</h3>
            <p>Get the best value for your property with our expertise.</p>
        </div>
        <div class="service">
            <img src="images/Info/Real-Estate-Agent.jpg" alt="Consultation">
            <h3>Consultation</h3>
            <p>Receive professional advice for all your real estate needs.</p>
        </div>
    </div>
</section>



    <section class="featured-properties">
        <h2>Featured Properties</h2>
        <div class="property-grid">
            <div class="property">
                <img src="images/Property/1.jpeg" alt="Property 1">
                <h3>Luxury Apartment</h3>
                <p>Price: $900,000</p>
            </div>
            <div class="property">
                <img src="images/Property/2.jpg" alt="Property 2">
                <h3>Cozy Cottage</h3>
                <p>Price: $500,000</p>
            </div>
            <div class="property">
                <img src="images/Property/3.jpg" alt="Property 3">
                <h3>Modern Villa</h3>
                <p>Price: $1,200,000</p>
            </div>
        </div>
    </section>
</main>

<?php include 'include/footer.php'; ?>

</body>
</html>
