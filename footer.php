<footer class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo and Contact -->
            <div class="col-span-1 md:col-span-2">
                <img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-white.png" 
                     alt="<?php bloginfo('name'); ?>" 
                     class="h-12 w-auto mb-6"
                />
                <div class="space-y-4">
                    <p class="flex items-center">
                        Musterstraße 123<br>
                        49688 Lastrup
                    </p>
                    <p class="flex items-center">
                        <a href="tel:+4944954444" class="hover:text-red-500">+49 449 544 44</a>
                    </p>
                    <p class="flex items-center">
                        <a href="mailto:info@team-holzbau.de" class="hover:text-red-500">info@team-holzbau.de</a>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Schnelllinks</h3>
                <ul class="space-y-2">
                    <li><a href="<?php echo home_url(); ?>#services" class="hover:text-red-500">Leistungen</a></li>
                    <li><a href="<?php echo home_url(); ?>#references" class="hover:text-red-500">Referenzen</a></li>
                    <li><a href="<?php echo home_url(); ?>#career" class="hover:text-red-500">Jobs</a></li>
                    <li><a href="<?php echo home_url(); ?>#contact" class="hover:text-red-500">Kontakt</a></li>
                </ul>
            </div>

            <!-- Opening Hours -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Öffnungszeiten</h3>
                <ul class="space-y-2">
                    <li>Mo. - Fr.: 08:00 - 17:00</li>
                    <li>Sa.: Nach Vereinbarung</li>
                    <li>So.: Geschlossen</li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-400">
                    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Alle Rechte vorbehalten.
                </p>
                <div class="mt-4 md:mt-0">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'menu_class'     => 'flex space-x-6 text-sm text-gray-400',
                            'fallback_cb'    => function() {
                                echo '<ul class="flex space-x-6 text-sm text-gray-400">
                                    <li><a href="/impressum" class="hover:text-white">Impressum</a></li>
                                    <li><a href="/datenschutz" class="hover:text-white">Datenschutz</a></li>
                                    <li><a href="/agb" class="hover:text-white">AGB</a></li>
                                </ul>';
                            },
                            'depth'          => 1,
                            'add_li_class'   => 'hover:text-white',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Buttons -->
<div class="fixed right-4 top-1/2 transform -translate-y-1/2 z-50 flex flex-col gap-4 hidden md:block">
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
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300 mt-2"
       title="E-Mail schreiben">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>