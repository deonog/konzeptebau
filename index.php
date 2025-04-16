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
                <div class="group">
                    <div class="aspect-square overflow-hidden mb-4 relative">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Holzbau" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                            <p class="text-white text-center">
                                Professionelle Holzbauarbeiten für Ihr Zuhause. Von Dachstühlen bis zu Carports - wir setzen Ihre Wünsche in die Tat um.    
                            </p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold">→ Holzbau</h4>
                </div>

                <div class="group">
                    <div class="aspect-square overflow-hidden mb-4 relative">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Bedachung" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                            <p class="text-white text-center">
                                Kompetente Dachdeckung und -sanierung. Wir sorgen für ein dichtes und langlebiges Dach über Ihrem Kopf.
                            </p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold">→ Bedachung</h4>
                </div>

                <div class="group">
                    <div class="aspect-square overflow-hidden mb-4 relative">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Innenausbau" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                            <p class="text-white text-center">
                                Individuelle Innenausbau-Lösungen. Von Treppen bis zu Einbauschränken - wir gestalten Ihren Wohnraum.
                            </p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold">→ Innenausbau</h4>
                </div>

                <div class="group">
                    <div class="aspect-square overflow-hidden mb-4 relative">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Photovoltaik" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-6">
                            <p class="text-white text-center">
                                Moderne Photovoltaik-Anlagen für nachhaltige Energiegewinnung. Wir machen Ihr Zuhause zukunftssicher.
                            </p>
                        </div>
                    </div>
                    <h4 class="text-lg font-semibold">→ Photovoltaik</h4>
                </div>
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
                    <h3 class="text-xl mb-4">für hochwertige Lösungen im Holzbau</h3>
                    <p class="text-gray-700 mb-6">
                        Mit mehr als 20 Jahren Erfahrung haben wir uns einen Namen als verlässlicher Partner gemacht. 
                        Unsere Expertise reicht von klassischen Zimmererarbeiten bis hin zu modernen energieeffizienten Dachsystemen.
                    </p>
                    <p class="text-gray-700">
                        Qualität ist bei uns oberstes Gebot. Wir verwenden nur die besten Materialien und arbeiten mit höchster Sorgfalt.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section class="py-16 md:py-24" id="references">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mb-16">
                <h2 class="text-2xl md:text-3xl font-bold mb-6">Unsere Referenzen</h2>
                <p class="text-gray-700">
                    Entdecken Sie unsere erfolgreich abgeschlossenen Projekte und lassen Sie sich von unserer Arbeit überzeugen.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-4">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Holzbau" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <p class="hidden group-hover-content">
                            Ein modernes Einfamilienhaus mit nachhaltiger Holzbauweise. Das Projekt umfasste die komplette Erstellung des Dachstuhls und die Montage der Photovoltaikanlage.
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold">→ Holzbau Projekt</h4>
                </div>

                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-4">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Bedachung" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <p class="hidden group-hover-content">
                            Komplette Dachsanierung eines historischen Gebäudes in Lastrup. Wir haben das Dach neu eingedeckt und dabei die historische Optik erhalten.
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold">→ Dachsanierung</h4>
                </div>

                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-4">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Innenausbau" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <p class="hidden group-hover-content">
                            Moderner Innenausbau mit individuellen Holzelementen. Das Projekt umfasste die Erstellung von Einbauschränken, Treppen und Wandverkleidungen.
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold">→ Innenausbau</h4>
                </div>

                <div class="group cursor-pointer">
                    <div class="aspect-square overflow-hidden mb-4">
                        <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                             alt="Photovoltaik" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <p class="hidden group-hover-content">
                            Installation einer modernen Photovoltaikanlage mit Speicherlösung. Das System deckt den kompletten Strombedarf des Hauses.
                        </p>
                    </div>
                    <h4 class="text-lg font-semibold">→ Photovoltaik</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Section -->
    <section class="py-16 md:py-24 bg-gray-50" id="career">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="text-2xl md:text-3xl font-bold mb-6">Wir suchen neue Mitarbeiter!</h2>
                    <p class="text-gray-700 mb-6">
                        Als Meister- und Ausbildungsbetrieb ist das A-Team Holzbau ständig auf der Suche nach motivierten Mitarbeitern.
                    </p>
                    <a href="/karriere" 
                       class="inline-block bg-custom-orange hover:bg-custom-orange text-white px-8 py-3 rounded-sm transition-colors">
                        Mehr über die Karrieremöglichkeiten
                    </a>
                </div>
                <div class="order-1 md:order-2">
                    <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
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
                    Unsere Zimmerei und Dachdeckerei ist auch im Notfall für Sie da
                </h2>
                <p class="text-gray-700 mb-6">
                    Sie haben ein dringendes Anliegen? Kontaktieren Sie uns noch heute!
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
