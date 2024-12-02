
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NowelWorld - Innovative Software Solutions</title>
    <!-- Include Alpine.js and Tailwind CSS in head to prevent FOUC -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <!-- Navigation Bar -->
    <?php include 'componet/Navbar.php'; ?>

    <!-- Hero Section -->
    <?php include 'componet/hero.php'; ?>

    <!-- Services Section -->
    <?php include 'componet/services.php'; ?>

    <!-- Brief Introduction Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl mb-8">Welcome to NowelWorld</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
                    We are a leading software development company dedicated to transforming businesses through innovative technology solutions. Our expertise spans across custom software development, web applications, and mobile solutions.
                </p>
                <a href="/about" class="inline-block bg-blue-600 text-white font-semibold px-8 py-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <?php include 'componet/testimonial.php'; ?>

    <!-- Footer Section -->
    <?php include 'componet/footer.php'; ?>
</body>
</html>
