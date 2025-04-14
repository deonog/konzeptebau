<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?> 

    <title><?php bloginfo('name'); ?> |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
</head>
<body>

<header class="navigation-container flex justify-between items-center p-4">
    <!-- Logo -->
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="<?php bloginfo('name'); ?> Logo" class="h-10">
        </a>
    </div>
    
    <!-- Desktop Navigation - Visible on larger screens -->
    <nav class="hidden md:flex items-center">
        <ul class="flex space-x-6">
            <li><a href="<?php echo home_url(); ?>" class="text-gray-800 hover:text-gray-600">Home</a></li>
            <li><a href="#" class="text-gray-800 hover:text-gray-600">About</a></li>
            <li><a href="#" class="text-gray-800 hover:text-gray-600">Services</a></li>
            <li><a href="#" class="text-gray-800 hover:text-gray-600">Contact</a></li>
        </ul>
        <!-- CTA Button -->
        <a href="#" class="ml-6 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">Get a Quote</a>
    </nav>
    
    <!-- Burger Menu - Only visible on mobile -->
    <div class="burger-menu relative md:hidden">
        <!-- Burger Menu Button -->
        <button id="burger-btn" class="flex flex-col justify-center items-center w-10 h-10 space-y-1.5 focus:outline-none">
            <span class="block w-6 h-0.5 bg-gray-800 transition-transform duration-300"></span>
            <span class="block w-6 h-0.5 bg-gray-800 transition-opacity duration-300"></span>
            <span class="block w-6 h-0.5 bg-gray-800 transition-transform duration-300"></span>
        </button>
        
        <!-- Menu Content - Hidden by default -->
        <div id="burger-menu-content" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 hidden">
            <nav>
                <ul class="space-y-1">
                    <li><a href="<?php echo home_url(); ?>" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a></li>
                    <li><a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>