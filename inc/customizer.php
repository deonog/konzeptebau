<?php
    function wpb_customize_register($wp_customize){
        /* Settings */
        $wp_customize->add_section('Settings', array(
            'title' => __('Settings', 'konzeptebau'),
            'description'  => sprintf(__('Settings','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('email', array(
            'default'  => _x('info@konzeptebau.de', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('email', array(
            'label'  => __('Email', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 1
        ));

        $wp_customize->add_setting('phone', array(
            'default'  => _x('+49 123 456 789', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('phone', array(
            'label'  => __('Phone', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 2
        ));

        $wp_customize->add_setting('opening_hours', array(
            'default'  => _x('Mo - Fr: 09:00 - 17:00', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('opening_hours', array(
            'label'  => __('Opening Hours', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 3
        ));

        $wp_customize->add_setting('street', array(
            'default'  => _x('Musterstraße 1', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('street', array(
            'label'  => __('Street', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 4
        ));

        $wp_customize->add_setting('zip', array(
            'default'  => _x('12345', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('zip', array(    
            'label'  => __('Zip', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 5
        ));

        $wp_customize->add_setting('city', array(
            'default'  => _x('Musterstadt', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('city', array(
            'label'  => __('City', 'konzeptebau'),
            'section'  => 'Settings', 
            'priority' => 6
        ));
        
        /* Logo */
        $wp_customize->add_section('Logo', array(
            'title' => __('Logo', 'konzeptebau'),
            'description'  => sprintf(__('Upload Logo','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('logo', array(
            'default'  => get_bloginfo('template_directory').'/assets/images/logo.webp',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
            'label'  => __('Logo', 'konzeptebau'),
            'section'  => 'Logo', 
            'settings'  => 'logo',
            'priority' => 1
        )));

        /* Hero */
        $wp_customize->add_section('Hero', array(
            'title' => __('Hero', 'konzeptebau'),
            'description'  => sprintf(__('Hero Background Image','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('hero_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/images/placeholder.webp',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_img', array(
            'label'  => __('Hero Background Image', 'konzeptebau'),
            'section'  => 'Hero', 
            'settings'  => 'hero_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('hero_title', array(
            'default'  => _x('Holzbau auf aller höchsten Niveau!', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('hero_title', array(
            'label'  => __('Hero Title', 'konzeptebau'),
            'section'  => 'Hero', 
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('hero_title', array(
            'selector' => '.hero-title',
        ) );

        $wp_customize->add_setting('hero_description', array(
            'default'  => _x('Wir sind Ihr zuverlässiger Partner für Dachdecken- und Zimmererarbeiten in Lastrup. Mit jahrelanger Erfahrung und Expertise stehen wir für Qualität, Pünktlichkeit und angemessene Preise.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('hero_description', array(
            'label'  => __('Hero Description', 'konzeptebau'),
            'section'  => 'Hero', 
            'priority' => 3
        ));

        $wp_customize->selective_refresh->add_partial('hero_description', array(
            'selector' => '.hero-description',
        ) );

        $wp_customize->add_setting('hero_button_text', array(
            'default'  => _x('Jetzt Termin vereinbaren!', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('hero_button_text', array(
            'label'  => __('Hero Button Text', 'konzeptebau'),
            'section'  => 'Hero', 
            'priority' => 4
        ));
        
        $wp_customize->selective_refresh->add_partial('hero_button_text', array(
            'selector' => '.hero-button-text',
        ) );

        /* Services */

        $wp_customize->add_section('Services', array(
            'title' => __('Services', 'konzeptebau'),
            'description'  => sprintf(__('Services','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('services_title', array(
            'default'  => _x('Zimmerei und Dachdeckerei in Lastrup:', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('services_title', array(
            'label'  => __('Services Title', 'konzeptebau'),
            'section'  => 'Services', 
            'priority' => 1
        ));

        $wp_customize->selective_refresh->add_partial('services_title', array(
            'selector' => '.services-title',
        ) );

        $wp_customize->add_setting('services_subtitle', array(
            'default'  => _x('Wir sind Konzepte Bau', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('services_subtitle', array(
            'label'  => __('Services Subtitle', 'konzeptebau'),
            'section'  => 'Services', 
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('services_subtitle', array(
            'selector' => '.services-subtitle',
        ) );

        $wp_customize->add_setting('services_description', array(
            'default'  => _x('Wir sind Ihr zuverlässiger Partner für Dachdecken- und Zimmererarbeiten in Lastrup. Mit jahrelanger Erfahrung und Expertise stehen wir für Qualität, Pünktlichkeit und angemessene Preise.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('services_description', array(   
            'label'  => __('Services Description', 'konzeptebau'),
            'section'  => 'Services', 
            'priority' => 3
        ));
        
        $wp_customize->selective_refresh->add_partial('services_description', array(
            'selector' => '.services-description',
        ) );

        /* About */

        $wp_customize->add_section('About', array(
            'title' => __('About', 'konzeptebau'),
            'description'  => sprintf(__('About','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('about_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/images/placeholder.webp',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img', array(
            'label'  => __('About Image', 'konzeptebau'),
            'section'  => 'About', 
            'settings'  => 'about_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('about_title', array(    
            'default'  => _x('Über uns', 'konzeptebau'),    
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('about_title', array(
            'label'  => __('About Title', 'konzeptebau'),
            'section'  => 'About',   
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('about_title', array(
            'selector' => '.about-title',
        ) );
    }

    add_action('customize_register', 'wpb_customize_register');