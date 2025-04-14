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

<!-- Floating Action Buttons -->
<div class="fixed right-4 top-1/2 transform -translate-y-1/2 z-50 flex flex-col gap-2">
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
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="E-Mail schreiben">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
    </a>

    <!-- Facebook -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Facebook besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/>
        </svg>
    </a>

    <!-- Instagram -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Instagram besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
        </svg>
    </a>

    <!-- Twitter -->
    <a href="#" 
       class="w-12 h-12 bg-emerald-600 hover:bg-emerald-700 rounded flex items-center justify-center transition-colors duration-300"
       title="Twitter besuchen"
       target="_blank"
       rel="noopener noreferrer">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
        </svg>
    </a>
</div>

<?php get_footer(); ?>