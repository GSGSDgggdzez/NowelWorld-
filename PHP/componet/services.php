<!-- Include Alpine.js for dynamic functionality -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Include Tailwind CSS for styling -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Main services section with light gray background -->
<section class="bg-gray-100 font-sans">
    <!-- Container for services with maximum width and centered alignment -->
    <div class="max-w-7xl mx-auto p-6 mt-10 bg-white rounded-lg shadow-lg">
        <!-- Main heading for services section -->
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Our Services</h2>
        
        <!-- Grid layout for services cards - responsive design:
             - 1 column on small screens
             - 2 columns on medium screens
             - 3 columns on large screens -->
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service Card 1: Custom Software Development 
                 Features hover effect with shadow transition -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <!-- Service image with responsive sizing -->
                <img src="https://via.placeholder.com/400" alt="Custom Software Development" class="w-full h-56 object-cover rounded-t-lg">
                <!-- Service content container -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Custom Software Development</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We specialize in developing custom software solutions tailored to your business needs. Our team works closely with clients to build scalable, high-performance applications that provide an edge in their industry.
                    </p>
                </div>
            </div>

            <!-- Service Card 2: Web Application Development 
                 Features hover effect with shadow transition -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <!-- Service image with responsive sizing -->
                <img src="https://via.placeholder.com/400" alt="Web Application Development" class="w-full h-56 object-cover rounded-t-lg">
                <!-- Service content container -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Web Application Development</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Our team builds responsive, dynamic, and scalable web applications using the latest technologies. We specialize in both front-end and back-end development, ensuring seamless performance across all devices.
                    </p>
                </div>
            </div>

            <!-- Service Card 3: Mobile App Development 
                 Features hover effect with shadow transition -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <!-- Service image with responsive sizing -->
                <img src="https://via.placeholder.com/400" alt="Mobile App Development" class="w-full h-56 object-cover rounded-t-lg">
                <!-- Service content container -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Mobile App Development</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We create high-quality mobile apps for iOS and Android. Whether you need a native app or a cross-platform solution, we build apps that engage users and elevate your brand.
                    </p>
                </div>
            </div>

            <!-- Service Card 4: IT Consulting 
                 Features hover effect with shadow transition -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300">
                <!-- Service image with responsive sizing -->
                <img src="https://via.placeholder.com/400" alt="IT Consulting" class="w-full h-56 object-cover rounded-t-lg">
                <!-- Service content container -->
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">IT Consulting</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        We provide expert IT consulting services to help businesses make strategic technology decisions, optimize operations, and drive innovation in digital transformation and cloud computing.
                    </p>
                </div>
            </div>

        </div>
    </div>

</section>