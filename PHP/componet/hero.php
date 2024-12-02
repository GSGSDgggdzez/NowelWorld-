<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<!-- Hero Section with Responsive Text Overlay -->
<div class="relative h-screen flex items-center justify-center" x-data="{ showCTA: false }">
    <!-- Background Image Container -->
    <div class="absolute inset-0 z-0">
        <img src="/Image/hero.jpeg" alt="Hero Background" class="w-full h-full object-cover">
        <!-- Dark Overlay for Better Text Visibility -->
        <div class="absolute inset-0 bg-gray-900 bg-opacity-70"></div>
    </div>

    <!-- Text Content Container with Responsive Padding -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <!-- Main Heading with Responsive Font Sizes -->
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 sm:mb-6" x-show="!showCTA"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            @load.window="setTimeout(() => showCTA = true, 4000)">
            Innovative Software Solutions<br>
            <span class="text-blue-400">for Your Business</span>
        </h1>

        <!-- Subheading with Responsive Font Sizes -->
        <p class="text-lg sm:text-xl md:text-2xl text-gray-300 mb-6 sm:mb-8" x-show="!showCTA"
            x-transition:enter="transition ease-out duration-300 delay-200"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0">
            Transform your business with our powerful and scalable software solutions
        </p>

        <!-- CTA Button Container -->
        <div x-show="showCTA" x-transition:enter="transition ease-out duration-300 delay-500"
            x-transition:enter-start="opacity-0 transform translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0">
            <a href="#contact"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 sm:px-8 py-3 sm:py-4 rounded-lg transition duration-300 transform hover:scale-105">
                Get Started Today
            </a>
        </div>
    </div>

    <!-- Bottom Gradient Overlay -->
    <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-gray-900 to-transparent"></div>
</div>