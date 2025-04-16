<?php get_header(); ?>

<main class="overflow-hidden">
    <!-- Hero Section -->
    <section class="hero-section relative h-[60vh] md:h-[80vh] overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/30 z-10"></div>
            <div class="parallax-container absolute inset-0">
                <img src="<?php echo get_theme_mod('hero_img', get_bloginfo('template_url').'/assets/images/placeholder.webp'); ?>" 
                     alt="hero image" 
                     class="parallax-image w-full h-full object-cover"
                />
            </div>
        </div>
        <div class="relative container mx-auto px-4 h-full flex items-center z-20">
            <div class="max-w-2xl text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    <span class="hero-title">
                        <?php echo get_theme_mod('hero_title', 'Holzbau auf aller höchsten Niveau!'); ?>
                    </span>
                </h1>
                <p class="text-lg md:text-xl mb-6">
                    <span class="hero-description">
                        <?php echo get_theme_mod('hero_description', 'Wir sind Ihr zuverlässiger Partner für Dachdecken- und Zimmererarbeiten in Lastrup. Mit jahrelanger Erfahrung und Expertise stehen wir für Qualität, Pünktlichkeit und angemessene Preise.'); ?>
                    </span>
                </p>
                <a href="<?php echo home_url(); ?>#contact" 
                   class="inline-block bg-custom-orange hover:bg-custom-orange text-white px-8 py-3 rounded-sm transition-colors">
                    <span class="hero-button-text">
                        <?php echo get_theme_mod('hero_button_text', 'Jetzt Termin vereinbaren!'); ?>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 md:py-24" id="services">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mb-16">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">
                    <span class="services-title">
                        <?php echo get_theme_mod('services_title', 'Zimmerei und Dachdeckerei in Lastrup:'); ?>
                    </span>
                </h2>
                <h3 class="text-xl md:text-2xl mb-4">
                    <span class="services-subtitle">
                        <?php echo get_theme_mod('services_subtitle', 'Wir sind Konzepte Bau'); ?>
                    </span>
                </h3>
                <p class="text-gray-700">
                    <span class="services-description">
                        <?php echo get_theme_mod('services_description', 'Wir sind Ihr zuverlässiger Partner für Dachdecken- und Zimmererarbeiten in Lastrup. Mit jahrelanger Erfahrung und Expertise stehen wir für Qualität, Pünktlichkeit und angemessene Preise.'); ?>
                    </span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">  
                <?php
                $services = get_posts(array(
                    'post_type' => 'services',
                    'numberposts' => -1
                ));

                if (empty($services)) : ?>
                    <div class="col-span-full text-left py-12">
                        <p class="text-gray-600 text-lg">
                            <?php echo get_theme_mod('no_services_text', 'Aktuell sind noch keine Leistungen verfügbar. Bitte schauen Sie später wieder vorbei.'); ?>
                        </p>
                    </div>
                <?php else :
                    foreach ($services as $service) : ?>      
                        <div class="group">
                            <div class="aspect-square overflow-hidden mb-4 relative">
                                <img src="<?php echo get_the_post_thumbnail_url($service->ID) ?: get_bloginfo('template_url').'/assets/images/placeholder.webp'; ?>" 
                                     alt="<?php echo esc_attr($service->post_title); ?>" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                />
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                                    <p class="text-white text-center">
                                        <?php echo get_the_excerpt($service->ID); ?>
                                    </p>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold">→ <?php echo esc_html($service->post_title); ?></h4>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 md:py-24 bg-gray-50" id="about">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1">
                    <img src="<?php echo get_theme_mod('about_img', get_bloginfo('template_url').'/assets/images/placeholder.webp'); ?>" 
                         alt="about image" 
                         class="w-full rounded-lg shadow-lg"
                    />
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">
                        <span class="about-title">
                            <?php echo get_theme_mod('about_title', 'Ihr Dachdecker und Zimmerer'); ?>
                        </span>
                    </h2>
                    <h3 class="text-xl mb-4">
                        <span class="about-subtitle">
                            <?php echo get_theme_mod('about_subtitle', 'Für hochwertige Lösungen im Holzbau'); ?>
                        </span>
                    </h3>           
                    <p class="text-gray-700 mb-6">
                        <span class="about-description">
                            <?php echo get_theme_mod('about_description', 'Mit mehr als 20 Jahren Erfahrung haben wir uns einen Namen als verlässlicher Partner gemacht. Unsere Expertise reicht von klassischen Zimmererarbeiten bis hin zu modernen energieeffizienten Dachsystemen. Qualität ist bei uns oberstes Gebot. Wir verwenden nur die besten Materialien und arbeiten mit höchster Sorgfalt.'); ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="py-16 md:py-24" id="references">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mb-16">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">
                    <span class="references-title">
                        <?php echo get_theme_mod('references_title', 'Unsere Referenzen'); ?>
                    </span>
                </h2>
                <p class="text-gray-700">
                    <span class="references-description">
                        <?php echo get_theme_mod('references_description', 'Entdecken Sie unsere erfolgreich abgeschlossenen Projekte und lassen Sie sich von unserer Arbeit überzeugen.'); ?>
                    </span>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $references = get_posts(array(
                    'post_type' => 'references',
                    'numberposts' => -1
                ));

                if (empty($references)) : ?>
                    <div class="col-span-full text-left py-12">
                        <p class="text-gray-600 text-lg">
                            <?php echo get_theme_mod('no_references_text', 'Aktuell sind noch keine Referenzen verfügbar. Bitte schauen Sie später wieder vorbei.'); ?>
                        </p>
                    </div>
                <?php else :
                    foreach ($references as $reference) : ?>      
                        <div class="group">
                            <div class="aspect-square overflow-hidden mb-4 relative">
                                <img src="<?php echo get_the_post_thumbnail_url($reference->ID) ?: get_bloginfo('template_url').'/assets/images/placeholder.webp'; ?>" 
                                     alt="<?php echo esc_attr($reference->post_title); ?>" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                />
                                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6 group-hover-content">
                                    <p class="text-white text-center">
                                        <?php echo get_the_excerpt($reference->ID); ?>
                                    </p>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold">→ <?php echo esc_html($reference->post_title); ?></h4>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>
        </div>
    </section>

    <!-- Career Section -->
    <section class="py-16 md:py-24 bg-gray-50" id="career">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">
                        <span class="careers-title">
                            <?php echo get_theme_mod('careers_title', 'Wir suchen neue Mitarbeiter!'); ?>
                        </span>
                    </h2>   
                    <p class="text-gray-700 mb-6">
                        <span class="careers-description">
                            <?php echo get_theme_mod('careers_description', 'Als Meister- und Ausbildungsbetrieb ist das A-Team Holzbau ständig auf der Suche nach motivierten Mitarbeitern.'); ?>
                        </span>
                    </p>
                    <a href="/karriere" 
                       class="inline-block bg-custom-orange hover:bg-custom-orange text-white px-8 py-3 rounded-sm transition-colors">
                        <span class="careers-button-text">
                            <?php echo get_theme_mod('careers_button_text', 'Mehr über die Karrieremöglichkeiten'); ?>
                        </span>
                    </a>
                </div>
                <div class="order-1 md:order-2">
                    <img src="<?php echo get_theme_mod('careers_img', get_bloginfo('template_url').'/assets/images/placeholder.webp'); ?>" 
                         alt="Career" 
                         class="w-full rounded-lg shadow-lg"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24" id="contact">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">
                    <span class="contact-title">
                        <?php echo get_theme_mod('contact_title', 'Unsere Zimmerei und Dachdeckerei ist auch im Notfall für Sie da'); ?>
                    </span>
                </h2>
                <p class="text-gray-700 mb-6">
                    <span class="contact-description">
                        <?php echo get_theme_mod('contact_description', 'Sie haben ein dringendes Anliegen? Kontaktieren Sie uns noch heute!'); ?>
                    </span>
                </p>
                <div class="space-y-4 flex flex-col items-center">
                    <p class="flex items-center">
                        <span class="w-8">📞</span>
                        <a href="tel:<?php echo get_theme_mod('phone', '+49 123 456 789'); ?>" class="hover:text-custom-orange"><?php echo get_theme_mod('phone', '+49 123 456 789'); ?></a>   
                    </p>
                    <p class="flex items-center">
                        <span class="w-8">✉️</span>
                        <a href="mailto:<?php echo get_theme_mod('email', 'info@konzeptebau.de'); ?>" class="hover:text-custom-orange"><?php echo get_theme_mod('email', 'info@konzeptebau.de'); ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
