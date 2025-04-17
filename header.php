<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> 

    <title><?php bloginfo('name'); ?> 
            <?php is_front_page() ? "| " . bloginfo('description') : "| " . wp_title(); ?>
    </title>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Announcement Bar -->
    <div id="announcement-bar" class="w-full bg-custom-orange text-white py-2 hidden md:block">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <div class="flex-1 flex items-center justify-center space-x-6 text-sm">
                    <div class="flex items-center">
                        <svg class="w-3 h-3 mr-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><?php echo get_theme_mod('opening_hours', 'Mo - So: 06:00 - 22:00 Uhr'); ?></span>
                    </div>
                    <a href="mailto:<?php echo get_theme_mod('email', 'info@konzeptebau.de'); ?>" class="flex items-center hover:text-gray-200">
                        <svg class="w-3 h-3 mr-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <?php echo get_theme_mod('email', 'info@konzeptebau.de'); ?>
                    </a>
                    <a href="tel:<?php echo get_theme_mod('phone', '+49 123 456 789'); ?>" class="flex items-center hover:text-gray-200">
                        <svg class="w-3 h-3 mr-1.5" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <?php echo get_theme_mod('phone', '+49 123 456 789'); ?>
                    </a>
                </div>
                <button id="close-announcement" class="p-1 hover:text-gray-200 focus:outline-none" aria-label="Close announcement">
                    <svg class="w-3 h-3" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header id="main-header" class="w-full bg-white shadow-md">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="<?php echo home_url(); ?>" class="flex-shrink-0">
                    <img src="<?php echo get_theme_mod('logo', get_bloginfo('template_url').'/assets/images/logo.webp'); ?>" 
                         alt="<?php bloginfo('name'); ?>" 
                         class="h-12 w-auto"
                    />
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center justify-center flex-1 space-x-8">
                    <a href="<?php echo home_url(); ?>#services" class="text-gray-700 hover:text-custom-orange">Leistungen</a>
                    <a href="<?php echo home_url(); ?>#about" class="text-gray-700 hover:text-custom-orange">Über uns</a>
                    <a href="<?php echo home_url(); ?>#references" class="text-gray-700 hover:text-custom-orange">Referenzen</a>
                    <a href="<?php echo home_url(); ?>#career" class="text-gray-700 hover:text-custom-orange">Jobs</a>
                </div>

                <!-- Desktop CTA -->
                <div class="hidden md:block">
                    <a href="<?php echo home_url(); ?>#contact" class="flex items-center text-custom-orange font-semibold group">
                        <span class="header-button-text">
                            <?php echo get_theme_mod('header_button_text', 'Jetzt kontaktieren!'); ?>
                        </span>
                        <svg class="w-3 h-3 ml-1 transform group-hover:translate-y-0.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" 
                        class="md:hidden p-2 rounded-md text-gray-700 hover:text-custom-orange focus:outline-none"
                        aria-label="Menu">
                    <div class="burger-icon">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </div>
                    <div class="close-icon hidden">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" 
                                  stroke-linejoin="round" 
                                  stroke-width="2" 
                                  d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </div>
                </button>
            </nav>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden md:hidden absolute top-20 left-0 right-0 bg-white shadow-lg z-50">
                <div class="container mx-auto px-4 py-4">
                    <div class="flex flex-col space-y-4">
                        <a href="<?php echo home_url(); ?>#services" class="text-gray-700 hover:text-custom-orange">Leistungen</a>
                        <a href="<?php echo home_url(); ?>#about" class="text-gray-700 hover:text-custom-orange">Über uns</a>
                        <a href="<?php echo home_url(); ?>#references" class="text-gray-700 hover:text-custom-orange">Referenzen</a>
                        <a href="<?php echo home_url(); ?>#career" class="text-gray-700 hover:text-custom-orange">Jobs</a>
                        <a href="<?php echo home_url(); ?>#contact" class="text-gray-700 hover:text-custom-orange">Kontakt</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = mobileMenuButton.querySelector('.burger-icon');
        const closeIcon = mobileMenuButton.querySelector('.close-icon');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                burgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });

        // Announcement bar close
        document.getElementById('close-announcement').addEventListener('click', function() {
            const announcementBar = document.getElementById('announcement-bar');
            announcementBar.style.display = 'none';
            localStorage.setItem('announcement-closed', 'true');
        });

        // Check if announcement was previously closed
        if (localStorage.getItem('announcement-closed') === 'true') {
            const announcementBar = document.getElementById('announcement-bar');
            announcementBar.style.display = 'none';
        }
    </script>
</body>
</html>