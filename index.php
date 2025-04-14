<?php get_header(); ?>

<section class="hero-section py-8 md:py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <!-- Image - First on mobile, left on desktop -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <img 
                    src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                    alt="Hero Image" 
                    class="w-full h-auto rounded-lg"          
                    onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;"
                >
            </div>
            
            <!-- Text and Button - Second on mobile, right on desktop -->
            <div class="w-full md:w-5/12 flex flex-col">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-gray-800">
                    Welcome to Konzeptebau
                </h1>
                
                <p class="text-lg text-gray-600 mb-6">
                    We provide high-quality construction services with a focus on innovative design and sustainable building practices. Our expert team is ready to bring your vision to life.
                </p>
                
                <div class="mt-auto">
                    <a href="#contact" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-grid px-4 py-12 max-w-screen-xl mx-auto">
    <div class="md:flex md:gap-12">
        <!-- Text Content - Left Side -->
        <div class="w-full md:w-1/3 mb-12 md:mb-0">
            <h1 class="text-4xl md:text-5xl font-light mb-6">
                Zimmerei und Dachdeckerei in Lastrup:
            </h1>
            <h2 class="text-2xl md:text-3xl mb-8">Das A-Team Holzbau</h2>
            
            <p class="text-lg">
                Sie suchen einen
                <span class="font-medium">zuverlässigen Partner für
                Dachdecker- und
                Zimmererarbeiten</span> im
                Großraum Bremen,
                Oldenburg, Osnabrück,
                Papenburg und Umgebung?
                Dann sind Sie bei unserem
                Meister- und Familienbetrieb
                genau richtig! <span class="text-red-700">Das A-Team
                Holzbau</span> in Lastrup ist Ihr
                Experte rund um:
            </p>
        </div>

        <!-- Services Cards - Right Side -->
        <div class="md:w-2/3 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 md:mt-8">
            <!-- Holzbau -->
            <a href="/holzbau" class="group relative overflow-hidden h-[300px] sm:h-[400px] md:h-full">
                <div class="h-full">
                    <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                         alt="Holzbau Services" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;">
                    <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                        <div class="flex items-center">
                            <span class="text-red-700 mr-2">→</span>
                            <h3 class="text-xl">Holzbau</h3>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Bedachung -->
            <a href="/bedachung" class="group relative overflow-hidden h-[300px] sm:h-[400px] md:h-full">
                <div class="h-full">
                    <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                         alt="Bedachung Services" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;">
                    <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                        <div class="flex items-center">
                            <span class="text-red-700 mr-2">→</span>
                            <h3 class="text-xl">Bedachung</h3>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Innenausbau -->
            <a href="/innenausbau" class="group relative overflow-hidden h-[300px] sm:h-[400px] md:h-full">
                <div class="h-full">
                    <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                         alt="Innenausbau Services" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;">
                    <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                        <div class="flex items-center">
                            <span class="text-red-700 mr-2">→</span>
                            <h3 class="text-xl">Innenausbau</h3>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Photovoltaik -->
            <a href="/photovoltaik" class="group relative overflow-hidden h-[300px] sm:h-[400px] md:h-full">
                <div class="h-full">
                    <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                         alt="Photovoltaik Services" 
                         class="w-full h-full object-cover"
                         onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;">
                    <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                        <div class="flex items-center">
                            <span class="text-red-700 mr-2">→</span>
                            <h3 class="text-xl">Photovoltaik</h3>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="relative text-image-section">
    <!-- Split Layout Container -->
    <div class="flex flex-col lg:flex-row max-w-screen-xl mx-auto">
        <!-- Left Side - Image -->
        <div class="w-full lg:w-1/2 h-48 md:h-64 lg:h-screen">
            <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                 alt="Wood Texture" 
                 class="w-full h-full object-cover"
                 onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;">
        </div>

        <!-- Right Side - Content -->
        <div class="w-full lg:w-1/2 px-4 py-12 md:py-16 lg:py-24 lg:px-16">
            <div class="max-w-3xl">
                <!-- Headings -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-3">
                    Ihr Dachdecker und Zimmerer
                </h2>
                <p class="text-xl md:text-2xl text-gray-700 mb-8">
                    für nachhaltige Lösungen in Niedersachsen und Bremen
                </p>

                <!-- Main Content -->
                <div class="space-y-6 text-lg">
                    <p>
                        Ein <span class="text-red-700">modernes Dach</span> ist nicht nur 
                        <span class="font-medium">optisch ein absolutes Highlight</span>, 
                        das Ihre Immobilie von außen aufwertet. Es ist zugleich auch praktisch 
                        und dank Wärmedämmung besonders 
                        <span class="font-medium">energieeffizient</span> und 
                        <span class="font-medium">umweltfreundlich</span>.
                    </p>

                    <p>
                        Als Dachdecker mit langjähriger Erfahrung beraten wir Sie gerne zu den 
                        verschiedenen Möglichkeiten bezüglich verschiedener Dachformen und 
                        moderner Dachgestaltungen. Sie möchten eine 
                        <span class="text-red-700">Photovoltaikanlage</span> auf Ihrem Dach 
                        installieren lassen und Ihren eigenen Ökostrom produzieren? Auch in 
                        diesem Fall helfen Ihnen unsere Dachdecker kompetent weiter und führen 
                        alle Arbeiten professionell durch.
                    </p>

                    <p>
                        Unsere Dachdecker und Holzbauspezialisten sind für Sie zur Stelle, wenn Sie Ihr 
                        <span class="font-medium">Dach reparieren</span> müssen oder sich eine 
                        <span class="font-medium">neue Bedachung</span> oder 
                        <span class="font-medium">Wohnraumerweiterung</span> wünschen. Ob Neubau, 
                        Ausbau, Renovierung, Reparatur oder Sanierung – wir bieten Ihnen einen 
                        <span class="font-medium">flexiblen Service</span> rund um Haus und Dach nach 
                        Ihrem Bedarf.
                    </p>

                    <p>
                        Teilen Sie uns <span class="font-medium">Ihre Wünsche und Vorstellungen</span> 
                        gerne mit, unsere Zimmerei und Dachdeckerei setzt sie gekonnt in die Realität um. 
                        Werfen Sie einen Blick auf unsere <a href="/referenzen" class="text-red-700 hover:text-red-800">Referenzen</a> 
                        und überzeugen Sie sich selbst von unserer Arbeit!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner Section -->
<section class="py-12 md:py-16 relative">
    <div class="absolute inset-0 bg-fixed bg-center bg-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/roof-banner.jpg');">
        <div class="absolute inset-0 bg-blue-900 bg-opacity-80"></div>
    </div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-white rounded-lg p-8 md:p-10 backdrop-blur-sm">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0 md:mr-8">
                    <h3 class="text-2xl md:text-3xl font-bold mb-3">Qualität, die überzeugt</h3>
                    <p class="text-lg md:text-xl">Vereinbaren Sie jetzt einen Beratungstermin für Ihr Dachprojekt</p>
                </div>
                <a href="/kontakt" class="bg-white text-blue-600 hover:bg-gray-100 transition-colors px-6 py-3 rounded-lg font-medium text-lg inline-block">
                    Kontakt aufnehmen
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section with Reversed Layout on Desktop -->
<section class="py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row-reverse items-center">
            <!-- Text Content (Right on desktop, top on mobile) -->
            <div class="w-full md:w-1/2 md:pl-8 mb-8 md:mb-0">
                <div class="prose max-w-none">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Unsere Leistungen</h2>
                    <p class="mb-4">
                        Wir bieten Ihnen umfassende Dienstleistungen im Bereich Dachdeckerei und Zimmerei. 
                        Von der Planung bis zur Ausführung stehen wir Ihnen mit unserem Fachwissen zur Seite.
                    </p>
                    <p class="mb-4">
                        Unsere Experten sorgen für hochwertige Arbeit bei jedem Projekt - egal ob 
                        <span class="font-medium">Neubau</span>, <span class="font-medium">Sanierung</span> 
                        oder <span class="font-medium">Reparatur</span>.
                    </p>
                    <a href="/leistungen" class="inline-block bg-red-700 hover:bg-red-800 text-white py-3 px-6 rounded-lg transition-colors mt-4">
                        Alle Leistungen entdecken
                    </a>
                </div>
            </div>
            
            <!-- Image (Left on desktop, bottom on mobile) -->
            <div class="w-full md:w-1/2 md:pr-8">
                <img src="https://media.istockphoto.com/id/1147544807/de/vektor/miniaturbild-vektorgrafik.jpg?s=612x612&w=0&k=20&c=IIK_u_RTeRFyL6kB1EMzBufT4H7MYT3g04sz903fXAk=" 
                     alt="Dachdeckerarbeiten" 
                     class="rounded-lg w-full h-auto object-cover"
                     onerror="this.src='https://via.placeholder.com/600x400/f3f4f6/666666?text=Hero+Image'; this.onerror=null;" />
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-12 md:py-16 bg-gray-50 relative">
    <!-- Parallax Background Image -->
    <div class="absolute inset-0 bg-fixed bg-center bg-cover z-0" 
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/contact-bg.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>
    
    <div class="container mx-auto px-4 max-w-screen-xl relative z-10">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-white">Kontaktieren Sie uns</h2>
            <p class="text-gray-200 max-w-2xl mx-auto">Haben Sie Fragen oder möchten Sie ein Angebot erhalten? Füllen Sie einfach das Formular aus und wir melden uns umgehend bei Ihnen.</p>
        </div>
        
        <div class="bg-white rounded-lg p-6 md:p-8 shadow-xl">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-1">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                
                <div class="md:col-span-1">
                    <label for="email" class="block text-gray-700 font-medium mb-2">E-Mail</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                
                <div class="md:col-span-1">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Telefon</label>
                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="md:col-span-1">
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Betreff</label>
                    <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                
                <div class="md:col-span-2">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Nachricht</label>
                    <textarea id="message" name="message" rows="6" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                
                <div class="md:col-span-2">
                    <div class="flex items-start">
                        <input type="checkbox" id="privacy" name="privacy" class="mt-1 mr-2" required>
                        <label for="privacy" class="text-sm text-gray-600">Ich stimme zu, dass meine Angaben zur Kontaktaufnahme und für Rückfragen gespeichert werden. Hinweise zum Datenschutz finden Sie in unserer <a href="/datenschutz" class="text-blue-600 hover:underline">Datenschutzerklärung</a>.</label>
                    </div>
                </div>
                
                <div class="md:col-span-2">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">Nachricht senden</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>