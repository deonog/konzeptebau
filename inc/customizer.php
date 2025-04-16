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
        $wp_customize->add_section('Header', array(
            'title' => __('Header', 'konzeptebau'),
            'description'  => sprintf(__('Header','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('logo', array(
            'default'  => get_bloginfo('template_directory').'/assets/images/logo.webp',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
            'label'  => __('Logo', 'konzeptebau'),
            'section'  => 'Header', 
            'settings'  => 'logo',
            'priority' => 1
        )));

        $wp_customize->add_setting('header_button_text', array(
            'default'  => _x('Jetzt kontaktieren!', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('header_button_text', array(
            'label'  => __('Header Button Text', 'konzeptebau'),
            'section'  => 'Header', 
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('header_button_text', array(
            'selector' => '.header-button-text',
        ) );

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

        $wp_customize->add_setting('no_services_text', array(
            'default'  => _x('Aktuell sind noch keine Leistungen verfügbar. Bitte schauen Sie später wieder vorbei.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('no_services_text', array(
            'label'  => __('No Services Text', 'konzeptebau'),
            'section'  => 'Services', 
            'priority' => 3
        ));

        $wp_customize->selective_refresh->add_partial('no_services_text', array(
            'selector' => '.no-services-text',
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


        $wp_customize->add_setting('about_subtitle', array(
            'default'  => _x('Für hochwertige Lösungen im Holzbau', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('about_subtitle', array(
            'label'  => __('About Subtitle', 'konzeptebau'),
            'section'  => 'About', 
            'priority' => 3
        ));

        $wp_customize->selective_refresh->add_partial('about_subtitle', array(
            'selector' => '.about-subtitle',
        ) );

        $wp_customize->add_setting('about_description', array(
            'default'  => _x('Mit mehr als 20 Jahren Erfahrung haben wir uns einen Namen als verlässlicher Partner gemacht. Unsere Expertise reicht von klassischen Zimmererarbeiten bis hin zu modernen energieeffizienten Dachsystemen. Qualität ist bei uns oberstes Gebot. Wir verwenden nur die besten Materialien und arbeiten mit höchster Sorgfalt.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('about_description', array(
            'label'  => __('About Description', 'konzeptebau'),
            'section'  => 'About', 
            'priority' => 4
        ));
        
        $wp_customize->selective_refresh->add_partial('about_description', array(
            'selector' => '.about-description',
        ) );

        /* References */

        $wp_customize->add_section('References', array(
            'title' => __('References', 'konzeptebau'),
            'description'  => sprintf(__('References','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('references_title', array(
            'default'  => _x('Zimmerei und Dachdeckerei in Lastrup:', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('references_title', array(
            'label'  => __('References Title', 'konzeptebau'),
            'section'  => 'References', 
            'priority' => 1
        ));

        $wp_customize->selective_refresh->add_partial('references_title', array(
            'selector' => '.references-title',
        ) );

        $wp_customize->add_setting('references_description', array(
            'default'  => _x('Wir sind Ihr zuverlässiger Partner für Dachdecken- und Zimmererarbeiten in Lastrup. Mit jahrelanger Erfahrung und Expertise stehen wir für Qualität, Pünktlichkeit und angemessene Preise.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('references_description', array(   
            'label'  => __('References Description', 'konzeptebau'),
            'section'  => 'References', 
            'priority' => 2
        ));
        
        $wp_customize->selective_refresh->add_partial('references_description', array(
            'selector' => '.references-description',
        ) );

        $wp_customize->add_setting('no_references_text', array(
            'default'  => _x('Aktuell sind noch keine Referenzen verfügbar. Bitte schauen Sie später wieder vorbei.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('no_references_text', array(
            'label'  => __('No References Text', 'konzeptebau'),
            'section'  => 'References', 
            'priority' => 3
        ));

        $wp_customize->selective_refresh->add_partial('no_references_text', array(
            'selector' => '.no-references-text',
        ) );
        
        /* Careers */
        $wp_customize->add_section('Careers', array(
            'title' => __('Careers', 'konzeptebau'),
            'description'  => sprintf(__('Careers','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('careers_img', array(
            'default'  => get_bloginfo('template_directory').'/assets/images/placeholder.webp',
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'careers_img', array(
            'label'  => __('Careers Image', 'konzeptebau'),
            'section'  => 'Careers', 
            'settings'  => 'careers_img',
            'priority' => 1
        )));

        $wp_customize->add_setting('careers_title', array(
            'default'  => _x('Wir suchen neue Mitarbeiter!', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('careers_title', array(
            'label'  => __('Careers Title', 'konzeptebau'),
            'section'  => 'Careers', 
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('careers_title', array(
            'selector' => '.careers-title',
        ) );

        $wp_customize->add_setting('careers_description', array(
            'default'  => _x('Als Meister- und Ausbildungsbetrieb ist das A-Team Holzbau ständig auf der Suche nach motivierten Mitarbeitern.', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('careers_description', array(
            'label'  => __('Careers Description', 'konzeptebau'),
            'section'  => 'Careers', 
            'priority' => 3
        ));

        $wp_customize->selective_refresh->add_partial('careers_description', array(
            'selector' => '.careers-description',
        ) );

        $wp_customize->add_setting('careers_button_text', array(
            'default'  => _x('Mehr über die Karrieremöglichkeiten', 'konzeptebau'),
            'type'  => 'theme_mod'
        ));

        $wp_customize->add_control('careers_button_text', array(
            'label'  => __('Careers Button Text', 'konzeptebau'),
            'section'  => 'Careers', 
            'priority' => 4
        ));
        
        $wp_customize->selective_refresh->add_partial('careers_button_text', array(
            'selector' => '.careers-button-text',
        ) );    
        
        /* Contact */
        $wp_customize->add_section('Contact', array(
            'title' => __('Contact', 'konzeptebau'),
            'description'  => sprintf(__('Contact','konzeptebau')),
            'priority'  => 130
        )); 

        $wp_customize->add_setting('contact_title', array(
            'default'  => _x('Unsere Zimmerei und Dachdeckerei ist auch im Notfall für Sie da', 'konzeptebau'),
            'type'  => 'theme_mod'
        )); 

        $wp_customize->add_control('contact_title', array(
            'label'  => __('Contact Title', 'konzeptebau'),
            'section'  => 'Contact', 
            'priority' => 1
        ));

        $wp_customize->selective_refresh->add_partial('contact_title', array(
            'selector' => '.contact-title',
        ) );  

        $wp_customize->add_setting('contact_description', array(
            'default'  => _x('Sie haben ein dringendes Anliegen? Kontaktieren Sie uns noch heute!', 'konzeptebau'),
            'type'  => 'theme_mod'
        )); 

        $wp_customize->add_control('contact_description', array(
            'label'  => __('Contact Description', 'konzeptebau'),
            'section'  => 'Contact', 
            'priority' => 2
        ));

        $wp_customize->selective_refresh->add_partial('contact_description', array(
            'selector' => '.contact-description',
        ) );
    }

    add_action('customize_register', 'wpb_customize_register');