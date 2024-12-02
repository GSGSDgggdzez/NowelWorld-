<!-- Import Alpine.js for interactive functionality -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Import Tailwind CSS for styling -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Main navigation bar with mobile responsive toggle -->
<nav class=" border-gray-200 px-4 shadow-md " x-data="{ open: false }">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <!-- Logo and brand section -->
        <a href="/" class="flex items-center">
            <div class="flex items-end">
                <!-- Company logo image -->
                <span class="self-center w-16">
                    <img src="/Image/WhatsApp_Image_2024-11-24_at_23.33.09_498c3cf7-removebg-preview.png" alt="" srcset="">
                </span>
                <!-- Commented out text logo
                <span class="text-4xl font-bold text-[#20303C]"> 
                    Novel
                </span> -->
                <!-- Company name image -->
                <span class="w-24">
                    <img src="/Image/IMG-20241124-WA0023_1_-removebg-preview.png" alt="" srcset="">
                </span>
            </div>
        </a>

        <!-- Mobile menu button -->
        <button @click="open = !open" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open main menu</span>
            <!-- Hamburger menu icon -->
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Navigation links container - hidden on mobile unless toggled -->
        <div class="w-full md:block md:w-auto" :class="{'hidden': !open}" id="navbar-default">
            <!-- Navigation links list -->
            <ul
                class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                <!-- Home link - active state -->
                <li>
                    <a href="#"
                        class="block lg:mt-2 py-2 text-lg pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0">Home</a>
                </li>
                <!-- About link -->
                <li>
                    <a href="#"
                        class="block text-lg lg:mt-2 py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About</a>
                </li>
                <!-- Services link -->
                <li>
                    <a href="#"
                        class="block lg:mt-2 text-lg py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Services</a>
                </li>
                <!-- Contact button with hover effect -->
                <li>
                    <button class="bg-blue-500 text-lg hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl"
                        @mouseover="hover = true" @mouseout="hover = false" x-data="{ hover: false }">
                        <span x-show="!hover">Contact</span>
                        <span x-show="hover" class="">Let's talk!</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>