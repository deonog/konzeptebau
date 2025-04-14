<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo and Company Info -->
            <div class="mb-6 md:mb-0">
                <div class="mb-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-white.png" alt="<?php bloginfo('name'); ?> Logo" class="h-12">
                </div>
                <p class="text-gray-300 mt-2">
                    Quality construction and renovation services for your home and business.
                </p>
            </div>
            
            <!-- Quick Links -->
            <div class="mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo home_url(); ?>" class="text-gray-300 hover:text-white transition">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">About</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Services</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Projects</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
                </ul>
            </div>
            
            <!-- Contact Details -->
            <div class="mb-6 md:mb-0">
                <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                <address class="not-italic text-gray-300">
                    <p class="mb-2">123 Construction Avenue</p>
                    <p class="mb-2">Berlin, Germany 10115</p>
                    <p class="mb-2">Phone: <a href="tel:+491234567890" class="hover:text-white transition">+49 123 456 7890</a></p>
                    <p class="mb-2">Email: <a href="mailto:info@konzeptebau.com" class="hover:text-white transition">info@konzeptebau.com</a></p>
                </address>
            </div>
            
            <!-- Opening Hours -->
            <div>
                <h3 class="text-xl font-bold mb-4">Opening Hours</h3>
                <ul class="text-gray-300">
                    <li class="mb-2">Monday - Friday: 8:00 - 18:00</li>
                    <li class="mb-2">Saturday: 9:00 - 14:00</li>
                    <li class="mb-2">Sunday: Closed</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div class="fixed right-4 top-1/2 transform -translate-y-1/2 z-50 flex flex-col gap-2">
    <!-- Phone -->
    <a href="tel:04953 4829996" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Anrufen">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
        </svg>
    </a>

    <!-- Email -->
    <a href="mailto:info@nordlicht-elektrotechnik.de" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="E-Mail schreiben">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
    </a>

    <!-- Facebook -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Facebook besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
        </svg>
    </a>

    <!-- Instagram -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Instagram besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
    </a>

    <!-- Twitter -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Twitter besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
        </svg>
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>