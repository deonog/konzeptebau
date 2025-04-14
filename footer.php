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
<?php wp_footer(); ?>
</body>
</html>