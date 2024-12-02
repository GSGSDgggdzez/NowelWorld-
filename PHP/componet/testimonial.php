<!-- Include Alpine.js for dynamic functionality -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Include Tailwind CSS for styling -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Testimonials Section - Displays a collection of professional testimonials -->
<section class="bg-gray-100 py-16" x-data="{ activeTestimonial: 0 }">
    <!-- Section heading -->
    <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Testimonials</h2>
    <div class="container mx-auto px-4">
      <!-- Testimonials carousel -->
      <div class="relative max-w-4xl mx-auto">
        <ol class="testimonials">
          <template x-for="(testimonial, index) in [0,1,2,3,4,5]" :key="index">
            <li class="testimonial absolute w-full transition-opacity duration-500 transform"
                x-show="activeTestimonial === index"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-x-full"
                x-transition:enter-end="opacity-100 translate-x-0"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 translate-x-0"
                x-transition:leave-end="opacity-0 -translate-x-full">
              <blockquote class="bg-white rounded-xl p-8 shadow-lg mb-8">
                <div class="testimonial-text text-gray-700 text-lg leading-relaxed italic mb-6" x-text="[
                  'As a young developer, Harold demonstrates impressive skills in PHP Laravel and JavaScript. His backend development abilities are particularly strong, and he shows great enthusiasm in learning modern frameworks like React and Alpine.js.',
                  'Despite his young age, Harold shows remarkable proficiency in backend development. His work with Laravel and database management demonstrates maturity beyond his years. He\'s currently expanding his skills with Go.',
                  'Harold\'s ability to handle both frontend and backend technologies is impressive. His work with React for frontend and Laravel for backend shows his potential as a full-stack developer.',
                  'For a 17-year-old developer, Harold\'s grasp of complex backend concepts is remarkable. His proficiency in PHP Laravel and his eagerness to learn Go showcase his dedication to backend development.',
                  'Harold\'s integration of Alpine.js with Laravel Blade templates shows his understanding of modern web development practices. His backend focus combined with frontend knowledge makes him a promising full-stack developer.',
                  'Harold\'s commitment to learning multiple technologies at such a young age is commendable. His strong foundation in PHP Laravel and growing expertise in JavaScript frameworks shows great promise for his future in development.'
                ][index]"></div>
                <figure class="flex items-center">
                  <img src="/Image/bro.png" class="w-16 h-16 rounded-full object-cover mr-4" alt="Testimonial author" loading="lazy" />
                  <figcaption>
                    <h3 class="font-semibold text-gray-900" x-text="[
                      'John Smith',
                      'Sarah Johnson',
                      'Mike Chen',
                      'Emily Davis',
                      'David Wilson',
                      'Lisa Zhang'
                    ][index]"></h3>
                    <p class="text-gray-600" x-text="[
                      'Senior Developer @WebTech',
                      'Team Lead @WebSolutions',
                      'Project Manager @CodeCraft',
                      'Developer @WebCraft',
                      'Senior Developer @PHPSolutions',
                      'Tech Lead @WebDev'
                    ][index]"></p>
                  </figcaption>
                </figure>
              </blockquote>
            </li>
          </template>
        </ol>
        <!-- Navigation buttons -->
        <div class="flex justify-between items-center mt-8">
          <button @click="activeTestimonial = activeTestimonial === 0 ? 5 : activeTestimonial - 1"
                  class="bg-blue-500 hover:bg-blue-600 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
          <button @click="activeTestimonial = activeTestimonial === 5 ? 0 : activeTestimonial + 1"
                  class="bg-blue-500 hover:bg-blue-600 text-white rounded-full p-2 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>
        </div>
        <!-- Dots navigation -->
        <div class="flex justify-center space-x-2 mt-6">
          <template x-for="(dot, index) in [0,1,2,3,4,5]" :key="index">
            <button @click="activeTestimonial = index"
                    :class="{'bg-blue-500': activeTestimonial === index, 'bg-gray-300': activeTestimonial !== index}"
                    class="w-3 h-3 rounded-full transition-colors duration-200 focus:outline-none">
            </button>
          </template>
        </div>
      </div>
    </div>
  </section>