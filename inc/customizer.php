<?php
    function wpb_customize_register($wp_customize){

        /* Logo */
        $wp_customize->add_section('Logo', array(
            'title' => __('Logo', 'konzeptebau'),
            'description'  => sprintf(__('Upload Logo','konzeptebau')),
            'priority'  => 130
        ));

        $wp_customize->add_setting('logo', array(
            'default'  => get_bloginfo('template_directory').'/assets/logo.svg',
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

    }

    add_action('customize_register', 'wpb_customize_register');